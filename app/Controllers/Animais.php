<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnimalModel;

class Animais extends BaseController
{
    protected $animalModel;

    public function __construct()
    {
        $this->animalModel = new AnimalModel();
    }

    public function index()
    {
        $data['animais'] = $this->animalModel->findAll();
        return view('animais/listarAnimais', $data);
    }

    public function novo()
    {
        return view('animais/novoAnimal');
    }

    public function criar()
    {
        $dados = $this->request->getPost();

        if (!$this->animalModel->save($dados)) {
            return view('animais/novoAnimal', [
                'validation' => $this->animalModel->errors()
            ]);
        }

        return redirect()->to('/animais');
    }

    public function editar($id)
    {
        $data['animal'] = $this->animalModel->find($id);
        return view('animais/editarAnimal', $data);
    }

    public function atualizar($id)
    {
        $dados = $this->request->getPost();
        $dados['id'] = $id;

        if (!$this->animalModel->save($dados)) {
            return view('animais/editarAnimal', [
                'animal' => $dados,
                'validation' => $this->animalModel->errors()
            ]);
        }

        return redirect()->to('/animais');
    }

    public function excluir($id)
    {
        $this->animalModel->delete($id);
        return redirect()->to('/animais');
    }
}
