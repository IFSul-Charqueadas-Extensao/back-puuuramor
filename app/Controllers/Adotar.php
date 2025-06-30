<?php

namespace App\Controllers;

use App\Models\AdotarModel;

class Adotar extends BaseController
{
    private $adotarModel;

    public function __construct(){
        $this->adotarModel = new AdotarModel();
    }

    public function index()
    {
        $adotaveis = $this->adotarModel->where('categoria', 'adotavel')->findAll();
        $especiais = $this->adotarModel->where('categoria', 'especial')->findAll();

        return view('adotar/index', [
            'adotaveis' => $adotaveis,
            'especiais' => $especiais
        ]);
    }

    public function list(){
        $pets = $this->adotarModel->findAll();
        return view('adotar/list', [
            'pets' => $pets
        ]);
    }

    public function create(){
        return view('adotar/form');
    }

    public function store(){
        helper(['form']);

        $id = $this->request->getPost("id");
        $file = $this->request->getFile("imagem");

        $petAtual = null;
        if ($id) {
            $petAtual = $this->adotarModel->find($id);
        }

        $rules = [
            'nome' => 'required|min_length[3]|max_length[30]',
            'idade' => 'required|is_natural',
            'descricao' => 'required|min_length[10]|max_length[150]',
            'categoria' => 'required|in_list[adotavel,especial]',
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
            $file->move('uploads/adotar', $imageName);

            if (!empty($petAtual['imagem'])) {
                $caminhoAntigo = FCPATH . 'uploads/adotar/' . $petAtual['imagem'];
                if (file_exists($caminhoAntigo)) {
                    unlink($caminhoAntigo);
                }
            }
        }

        $data = [
            "id" => $id,
            "nome" => $this->request->getPost("nome"),
            "idade" => $this->request->getPost("idade"),
            "descricao" => $this->request->getPost("descricao"),
            "categoria" => $this->request->getPost("categoria"),
        ];

        if ($imageName) {
            $data["imagem"] = $imageName;
        } elseif ($petAtual) {
            $data["imagem"] = $petAtual['imagem'];
        }

        $this->adotarModel->save($data);

        return redirect()->to("/adotar/listar")->with('sucesso', 'Pet salvo com sucesso!');
    }

    public function edit($id){
        $pet = $this->adotarModel->find($id);
        if (!$pet) {
            return redirect()->to('/adotar/listar')->with('erro', 'Pet não encontrado.');
        }
        return view("adotar/form", ["pet" => $pet]);
    }

    public function delete($id){
        $pet = $this->adotarModel->find($id);
        if (!$pet) {
            return redirect()->to('/adotar/listar')->with('erro', 'Pet não encontrado.');
        }

        if (!empty($pet['imagem'])) {
            $caminhoImagem = FCPATH . 'uploads/adotar/' . $pet['imagem'];
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
        }

        $this->adotarModel->delete($id);
        return redirect()->to("/adotar/listar");
    }

    public function exibir($id){
        $pet = $this->adotarModel->find($id);
        if (!$pet) {
            return $this->response->setJSON(["status" => false, "msg" => "Pet não encontrado"]);
        }
        return $this->response->setJSON(["status" => true, "pet" => $pet]);
    }
}
