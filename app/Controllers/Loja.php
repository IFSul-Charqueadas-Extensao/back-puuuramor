<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Loja extends BaseController
{
    private $produtoModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
    }

    public function index()
    {
        $produtos = $this->produtoModel->findAll();
        return view("loja/index", [
            "produtos" => $produtos
        ]);
    }

    public function listar()
    {
        $produtos = $this->produtoModel->findAll();
        return view("loja/list", [
            "produtos" => $produtos
        ]);
    }

    public function exibir($id = 0)
    {
        $validation = \Config\Services::validation();

        if (!$validation->check($id, "required|is_natural_no_zero")) {
            return $this->response->setJSON(["status" => false, "msg" => "ID inválido"]);
        }

        $produto = $this->produtoModel->find($id);

        if (!$produto) {
            return $this->response->setJSON(["status" => false, "msg" => "Produto não encontrado"]);
        }

        return $this->response->setJSON(["status" => true, "produto" => $produto]);
    }

    public function create()
    {
        return view("loja/form");
    }

    public function store()
    {
        helper(['form']);

        $id = $this->request->getPost("id");
        $file = $this->request->getFile("imagem");

        $produtoAtual = null;
        if ($id) {
            $produtoAtual = $this->produtoModel->find($id);
        }

        $rules = [
            'nome' => 'required|min_length[3]|max_length[100]',
            'descricao' => 'required|min_length[10]|max_length[255]',
            'preco' => 'required|decimal',
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
            $file->move('uploads/produtos', $imageName);

            if (!empty($produtoAtual['imagem'])) {
                $caminhoAntigo = FCPATH . 'uploads/produtos/' . $produtoAtual['imagem'];
                if (file_exists($caminhoAntigo)) {
                    unlink($caminhoAntigo);
                }
            }
        }

        $data = [
            "id" => $id,
            "nome" => $this->request->getPost("nome"),
            "descricao" => $this->request->getPost("descricao"),
            "preco" => $this->request->getPost("preco"),
            "link_compra" => $this->request->getPost("link_compra")

        ];

        if ($imageName) {
            $data["imagem"] = $imageName;
        } elseif ($produtoAtual) {
            $data["imagem"] = $produtoAtual['imagem'];
        }

        $this->produtoModel->save($data);

        return redirect()->to("/loja/listar")->with('sucesso', 'Produto salvo com sucesso!');
    }

    public function edit($id)
    {
        $produto = $this->produtoModel->find($id);

        if (!$produto) {
            return redirect()->to('/loja/listar')->with('erro', 'Produto não encontrado.');
        }

        return view("loja/form", [
            "produto" => $produto
        ]);
    }

    public function delete($id)
    {
        $produto = $this->produtoModel->find($id);

        if (!$produto) {
            return redirect()->to('/loja/listar')->with('erro', 'Produto não encontrado.');
        }

        if (!empty($produto['imagem'])) {
            $caminhoImagem = FCPATH . 'uploads/produtos/' . $produto['imagem'];
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
        }

        $this->produtoModel->delete($id);

        return redirect()->to("/loja/listar")->with('sucesso', 'Produto removido!');
    }
}
