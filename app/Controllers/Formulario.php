<?php

namespace App\Controllers;
use App\Models\AdotarModel;
class Formulario extends BaseController
{
    public function index()
    {
        // $idPet = $this->input->getGet('idPet');
        // return view('formulario', ['id'=> $idPet]);
        return view('formulario'); 
    }
    
}