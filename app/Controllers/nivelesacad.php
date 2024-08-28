<?php

namespace App\Controllers;

use App\Models\Nivelesmodel;

class Nivelesacad extends BaseController
{
    public function index()
    {
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM nivelesacademicos");
        $data = ['nivelesacad'=> $query->getResult()];
        return view('niveles_academicos/index', $data); 
    }

    public function create()
    {
        return view('niveles_academicos/create');
    }

    public function store()
    {
        $model= new Nivelesmodel();
        $data = [
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'nombre' => $this-> request->getPost('nombre'),
            'descripcion' => $this-> request->getPost('descripcion'),
        ];
        $model->save($data);
        return redirect()->to('/niveles_academicos');
    }

    public function edit($cod_nivel_acad)
    {
        $model = new Nivelesmodel();
        $data['nivel']= $model->find($cod_nivel_acad);
        return view('/niveles_academicos/edit', $data);
    }

    public function update($cod_nivel_acad)
    {
        $model = new Nivelesacad();
        $data = [
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'nombre' => $this-> request->getPost('nombre'),
            'descripcion' => $this-> request->getPost('descripcion'),
        ];
        $model->update($cod_nivel_acad, $data);
        return redirect()->to('/niveles_academicos');
    }

    public function delete($cod_nivel_acad)
    {
        $model= new Nivelesacad();
        $model->delete($cod_nivel_acad);
        return redirect()->to('/niveles_academicos');
    }
}
?>