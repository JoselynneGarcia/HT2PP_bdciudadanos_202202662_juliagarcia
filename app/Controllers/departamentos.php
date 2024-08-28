<?php

namespace App\Controllers;

use App\Models\Deptomodel;

class Departamentos extends BaseController
{
    public function index()
    {
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM departamentos");
        $data =['departamentos'=> $query->getResult()];
        return view('departamentos/index', $data);
    }

    public function create()
    {
        return view('departamentos/create');
    }

    public function store()
    {
        $model= new Deptomodel();
        $data = [
            'cod_depto' => $this-> request->getPost('cod_depto'),
            'nombre_depto' => $this-> request->getPost('nombre_depto'),
            'cod_region' => $this-> request->getPost('cod_region'),
        ];
        $model->save($data);
        return redirect()->to('/departamentos');
    }

    public function edit($cod_depto)
    {
        $model = new Deptomodel();
        $data['depto']= $model->find($cod_depto);
        return view('departamentos/edit', $data);
    }

    public function update($cod_depto)
    {
        $model = new Deptomodel();
        $data= [
            'cod_depto' => $this-> request->getPost('cod_depto'),
            'nombre_depto' => $this-> request->getPost('nombre_depto'),
            'cod_region' => $this-> request->getPost('cod_region'),
        ];
        $model->update($cod_depto, $data);
        return redirect()->to('/departamentos');
    }

    public function delete($cod_depto)
    {
        $model= new Deptomodel();
        $model->delete($cod_depto);
        return redirect()->to('/departamentos');
    }
        
    }

?>