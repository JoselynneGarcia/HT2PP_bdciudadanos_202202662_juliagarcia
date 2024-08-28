<?php

namespace App\Controllers;

use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index()
    {
        $db =\config\Database::connect();
        $query=$db->query("SELECT * FROM regiones");
        $data = ['regiones'=>$query->getResult()];
        return view('regiones/index', $data);
    }

    public function create()
    {
        return view('regiones/create');
    }

    public function store()
    {
        $model= new RegionesModel();
        $data = [
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'nombre' => $this-> request->getPost('nombre'),
            'descripcion' => $this-> request->getPost('descripcion'),
        ];
        $model->save($data);
        return redirect()->to('/regiones');
    }

    public function edit($cod_region)
    {
        $model = new RegionesModel();
        $data['region']= $model->find($cod_region);
        return view('/regiones/edit', $data);
    }

    public function update($cod_region)
    {
        $model = new RegionesModel();
        $data = [
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'nombre' => $this-> request->getPost('nombre'),
            'descripcion' => $this-> request->getPost('descripcion'),
        ];
        $model->update($cod_region, $data);
        return redirect()->to('/regiones');
    }

    public function delete($cod_region)
    {
        $model= new RegionesModel();
        $model->delete($cod_region);
        return redirect()->to('/regiones');
    }
}

?>