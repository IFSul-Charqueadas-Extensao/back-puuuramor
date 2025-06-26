<?php

namespace App\Controllers;

use App\Models\GaleriaModel;

class Galeria extends BaseController
{
    private $galeriaModel;

    public function __construct()
    {
        $this->galeriaModel = new GaleriaModel();
    }

    public function index()
    {
        $posts = $this->galeriaModel->findAll();
        return view("galeria/index", ['posts' => $posts]);
    }

    public function list()
    {
        $posts = $this->galeriaModel->findAll();
        return view("galeria/list", ['posts' => $posts]);
    }

    public function create()
    {
        return view("galeria/form");
    }

    public function store()
    {
        helper(['form']);

        $id = $this->request->getPost("id");
        $file = $this->request->getFile("imagem");

        $postAtual = $id ? $this->galeriaModel->find($id) : null;

        $rules = [
            'titulo' => 'required|min_length[3]|max_length[100]',
            'descricao' => 'required|min_length[10]|max_length[255]',
        ];

        if (!$id || ($file && $file->isValid() && !$file->hasMoved())) {
            $rules['imagem'] = 'uploaded[imagem]|is_image[imagem]|max_size[imagem,2048]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $imageName = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/galeria', $imageName);

            if (!empty($postAtual['imagem'])) {
                $caminhoAntigo = FCPATH . 'uploads/galeria/' . $postAtual['imagem'];
                if (file_exists($caminhoAntigo)) {
                    unlink($caminhoAntigo);
                }
            }
        }

        $data = [
            "id" => $id,
            "titulo" => $this->request->getPost("titulo"),
            "descricao" => $this->request->getPost("descricao"),
        ];

        if ($imageName) {
            $data["imagem"] = $imageName;
        } elseif ($postAtual) {
            $data["imagem"] = $postAtual['imagem'];
        }

        $this->galeriaModel->save($data);

        return redirect()->to("/galeria/list")->with('sucesso', 'Post salvo com sucesso!');
    }

    public function edit($id)
    {
        $post = $this->galeriaModel->find($id);

        if (!$post) {
            return redirect()->to('/galeria/list')->with('erro', 'Post não encontrado.');
        }

        return view("galeria/form", ['post' => $post]);
    }

    public function delete($id)
    {
        $post = $this->galeriaModel->find($id);

        if (!$post) {
            return redirect()->to('/galeria/list')->with('erro', 'Post não encontrado.');
        }

        if (!empty($post['imagem'])) {
            $caminhoImagem = FCPATH . 'uploads/galeria/' . $post['imagem'];
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
        }

        if ($this->galeriaModel->delete($id)) {
            return redirect()->to("/galeria/list")->with('sucesso', 'Post deletado com sucesso!');
        } else {
            return redirect()->to("/galeria/list")->with('erro', 'Erro ao deletar o post.');
        }
    }
}
