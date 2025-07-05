<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DoacaoModel;

class DoacaoDash extends BaseController
{
    public function Listar2()
    {
        $doacao_model = new DoacaoModel();
        $animais = $doacao_model->findAll(); 
        
        $data['animais'] = $animais; 

        echo View('templates/header');
        echo View('animais_doacao/listar2', $data);
        echo View('templates/footer');
    }
    public function cadastrar()
    {
        $dados = $this->request
                        ->getVar();

        $doacao_model = new DoacaoModel();

        $doacao_model->insert($dados);

        return redirect()->to('/doacaodash/listar2?alert=successCreate');
    }

    public function excluir($id)
    {
        $doacao_model = new DoacaoModel();

        $doacao_model
                ->where('id', $id)
                ->delete();

        return redirect()->to('/doacaodash/listar2?alert=successDelete');
    }

    public function editar()
    {
        $dados = $this->request
                        ->getVar();

        $doacao_model = new DoacaoModel();

        $doacao_model
                ->where('id', $dados['animal_id'])
                ->set($dados)
                ->update();

        return redirect()->to('/doacaodash/listar2?alert=successEdit');
    }
}

