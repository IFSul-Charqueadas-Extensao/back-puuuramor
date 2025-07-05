<?php

namespace App\Controllers;

use App\Models\ApadrinharModel;

class Apadrinhar extends BaseController
{
    private $apadrinharModel;

    public function __construct(){
        $this->apadrinharModel = new ApadrinharModel();
    }

    public function index()
    {
        $pets = $this->apadrinharModel->findAll();
        return view("/apadrinhar/index.php", [
            "pets" => $pets
        ]);
    }

    public function list(){
        $pets = $this->apadrinharModel->findAll();
        return view("/apadrinhar/list.php", [
            "pets" => $pets
        ]);
    }

    public function create(){
        return view("/apadrinhar/form.php");
    }

    public function store(){
        helper(['form']);

        $id = $this->request->getPost("id");
        $file = $this->request->getFile("imagem");

        $petAtual = null;
        if ($id) {
            $petAtual = $this->apadrinharModel->find($id);
        }

        $rules = [
            'nome' => 'required|min_length[3]|max_length[30]',
            'descricao' => 'required|min_length[10]|max_length[150]',
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
            $file->move('uploads/apadrinhar', $imageName);

            if (!empty($petAtual['imagem'])) {
                $caminhoAntigo = FCPATH . 'uploads/apadrinhar/' . $petAtual['imagem'];
                if (file_exists($caminhoAntigo)) {
                    unlink($caminhoAntigo);
                }
            }
        }

        $data = [
            "id" => $id,
            "nome" => $this->request->getPost("nome"),
            "descricao" => $this->request->getPost("descricao"),
        ];

        if ($imageName) {
            $data["imagem"] = $imageName;
        } elseif ($petAtual) {
            $data["imagem"] = $petAtual['imagem'];
        }

        $this->apadrinharModel->save($data);

        return redirect()->to("/apadrinhar/listar")->with('sucesso', 'Pet salvo com sucesso!');
    }

    public function edit($id){
        $pet = $this->apadrinharModel->find($id);

        if (!$pet) {
            return redirect()->to('/apadrinhar/listar')->with('erro', 'Pet não encontrado.');
        }
        
        return view("/apadrinhar/form", [
            "pet" => $pet
        ]);
    }

    public function delete($id){
        $pet = $this->apadrinharModel->find($id);

        if (!$pet) {
            return redirect()->to('/apadrinhar/listar')->with('erro', 'Pet não encontrado.');
        }

        if (!empty($pet['imagem'])) {
            $caminhoImagem = FCPATH . 'uploads/apadrinhar/' . $pet['imagem'];
            if (file_exists($caminhoImagem)) {
                unlink($caminhoImagem);
            }
        }

        if($this->apadrinharModel->delete($id)){
            return redirect()->to("/apadrinhar/listar");
        }else{
            echo "Erro.";
        }
    }

    public function exibir(int $id = 0){
        $validation = \Config\Services::validation();

        if(!$validation->check($id, "required|is_natural_no_zero")){
            return $this->response->setJson(["status" => false, "msg" => "Falha na validação dos dados"]);
        }

        $response = $this->apadrinharModel->find($id);

        if(empty($response)){
            return $this->response->setJson(["status" => false, "msg" => "Pet não encontrado"]);
        }

        return $this->response->setJson(["status" => true, "pet" => $response]);
    }
}
