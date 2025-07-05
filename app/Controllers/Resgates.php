<?php

namespace App\Controllers;

use App\Models\ResgatesModel;

class Resgates extends BaseController
{
    private $resgatesModel;

    public function __construct()
    {
        $this->resgatesModel = new ResgatesModel();
    }

    public function index()
    {
        $resgates = $this->resgatesModel->findAll();

        return view('resgates/index', ['resgates' => $resgates]);
    }

    public function list()
    {
        $resgates = $this->resgatesModel->findAll();

        return view('resgates/list', ['resgates' => $resgates]);
    }

    public function create()
    {
        return view('resgates/form');
    }

    public function store()
    {
        helper(['form']);

        $id = $this->request->getPost('id');
        $fileAntes = $this->request->getFile('foto_antes');
        $fileDepois = $this->request->getFile('foto_depois');

        $resgateAtual = null;
        if ($id) {
            $resgateAtual = $this->resgatesModel->find($id);
        }

        $rules = [
            'titulo' => 'required|min_length[3]|max_length[100]',
            'descricao' => 'required|min_length[10]',
        ];

        if (!$id || ($fileAntes && $fileAntes->isValid() && !$fileAntes->hasMoved())) {
            $rules['foto_antes'] = 'uploaded[foto_antes]|is_image[foto_antes]|max_size[foto_antes,2048]';
        }
        if (!$id || ($fileDepois && $fileDepois->isValid() && !$fileDepois->hasMoved())) {
            $rules['foto_depois'] = 'uploaded[foto_depois]|is_image[foto_depois]|max_size[foto_depois,2048]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $nomeFotoAntes = null;
        $nomeFotoDepois = null;

        if ($fileAntes && $fileAntes->isValid() && !$fileAntes->hasMoved()) {
            $nomeFotoAntes = $fileAntes->getRandomName();
            $fileAntes->move('uploads/resgates', $nomeFotoAntes);

            if (!empty($resgateAtual['foto_antes'])) {
                $antigo = FCPATH . 'uploads/resgates/' . $resgateAtual['foto_antes'];
                if (file_exists($antigo)) unlink($antigo);
            }
        }

        if ($fileDepois && $fileDepois->isValid() && !$fileDepois->hasMoved()) {
            $nomeFotoDepois = $fileDepois->getRandomName();
            $fileDepois->move('uploads/resgates', $nomeFotoDepois);

            if (!empty($resgateAtual['foto_depois'])) {
                $antigo = FCPATH . 'uploads/resgates/' . $resgateAtual['foto_depois'];
                if (file_exists($antigo)) unlink($antigo);
            }
        }

        $data = [
            'id' => $id,
            'titulo' => $this->request->getPost('titulo'),
            'descricao' => $this->request->getPost('descricao'),
        ];

        if ($nomeFotoAntes) {
            $data['foto_antes'] = $nomeFotoAntes;
        } elseif ($resgateAtual) {
            $data['foto_antes'] = $resgateAtual['foto_antes'];
        }

        if ($nomeFotoDepois) {
            $data['foto_depois'] = $nomeFotoDepois;
        } elseif ($resgateAtual) {
            $data['foto_depois'] = $resgateAtual['foto_depois'];
        }

        $this->resgatesModel->save($data);

        return redirect()->to('/resgates/listar')->with('sucesso', 'Resgate salvo com sucesso!');
    }

    public function edit($id)
    {
        $resgate = $this->resgatesModel->find($id);

        if (!$resgate) {
            return redirect()->to('/resgates/listar')->with('erro', 'Resgate não encontrado.');
        }

        return view('resgates/form', ['resgate' => $resgate]);
    }

    public function delete($id)
    {
        $resgate = $this->resgatesModel->find($id);

        if (!$resgate) {
            return redirect()->to('/resgates/listar')->with('erro', 'Resgate não encontrado.');
        }

        if (!empty($resgate['foto_antes'])) {
            $caminho = FCPATH . 'uploads/resgates/' . $resgate['foto_antes'];
            if (file_exists($caminho)) unlink($caminho);
        }
        if (!empty($resgate['foto_depois'])) {
            $caminho = FCPATH . 'uploads/resgates/' . $resgate['foto_depois'];
            if (file_exists($caminho)) unlink($caminho);
        }

        if ($this->resgatesModel->delete($id)) {
            return redirect()->to('/resgates/listar');
        } else {
            echo "Erro ao deletar.";
        }
    }
}
