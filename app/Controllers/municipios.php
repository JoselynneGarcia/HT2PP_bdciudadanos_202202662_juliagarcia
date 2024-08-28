<?php

namespace App\Controllers;

use App\Models\Munismodel;

class Municipios extends BaseController
{
    public function index()
    {
        $db = \config\Database::connect();
        $query=$db->query("SELECT * FROM municipios");
        $data=['municipios'=> $query->getResult()];
        return view('municipios/index', $data);
    }

    public function create()
    {
        return view('municipios/create');
    }

    public function store()
    {
        $model= new Munismodel();
        $data = [
            'cod_muni' => $this-> request->getPost('cod_muni'),
            'nombre_municipio' => $this-> request->getPost('nombre_municipio'),
            'cod_depto' => $this-> request->getPost('cod_depto'),
        ];
        $model->save($data);
        return redirect()->to('/municipios');
    }

    public function edit($cod_muni)
    {
        $model = new Munismodel();
        $data['munis']= $model->find($cod_muni);
        return view('/municipios/edit', $data);
    }

    public function update($cod_muni)
    {
        $model = new Munismodel();
        $data = [
            'cod_muni' => $this-> request->getPost('cod_muni'),
            'nombre_municipio' => $this-> request->getPost('nombre_municipio'),
            'cod_depto' => $this-> request->getPost('cod_depto'),
        ];
        $model->update($cod_muni, $data);
        return redirect()->to('/municipios');
    }

    public function delete($cod_muni)
    {
        $model= new Munismodel();
        $model->delete($cod_muni);
        return redirect()->to('/municipios');
    }
}
?>