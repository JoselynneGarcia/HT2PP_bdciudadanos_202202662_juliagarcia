<?php

namespace App\Controllers;
use App\Models\CiudadanoModel;

class Ciudadanos extends BaseController
{
    public function index()
    {
        $model = new CiudadanoModel();
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM ciudadanos");
        $data = ['ciudadanos'=> $query->getResult()];
        return view('ciudadanos/index', $data);
        
    }

    public function create()
    {
        return view('ciudadanos/create');
    }

    public function store()
    {
        $model= new CiudadanoModel();
        $data = [
            'dpi' => $this-> request->getPost('dpi'),
            'apellido' => $this-> request->getPost('apellido'),
            'nombre' => $this-> request->getPost('nombre'),
            'direccion' => $this-> request->getPost('direccion'),
            'tel_casa' => $this-> request->getPost('tel_casa'),
            'tel_movil' => $this-> request->getPost('tel_movil'),
            'email' => $this-> request->getPost('email'),
            'fechanac' => $this-> request->getPost('fechanac'),
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'cod_muni' => $this-> request->getPost('cod_muni'),
            'contra' => $this-> request->getPost('contra'),
        ];
        $model->save($data);
        return redirect()->to('/ciudadanos');
    }
    
    public function edit($dpi)
    {
        $model= new CiudadanoModel();
        $data['ciudadano']= $model->find($dpi);
        return view('ciudadanos/edit/', $data);
    }

    public function update($dpi)
    {
        $model= new CiudadanoModel();
        $data= [
            'dpi' => $this-> request->getPost('dpi'),
            'apellido' => $this-> request->getPost('apellido'),
            'nombre' => $this-> request->getPost('nombre'),
            'direccion' => $this-> request->getPost('direccion'),
            'tel_casa' => $this-> request->getPost('tel_casa'),
            'tel_movil' => $this-> request->getPost('tel_movil'),
            'email' => $this-> request->getPost('email'),
            'fechanac' => $this-> request->getPost('fechanac'),
            'cod_nivel_acad' => $this-> request->getPost('cod_nivel_acad'),
            'cod_muni' => $this-> request->getPost('cod_muni'),
            'contra' => $this-> request->getPost('contra'),
        ];
        $model->update($dpi, $data);
        return redirect()->to('/ciudadanos');
    }

    public function delete($dpi)
    {
        $model= new CiudadanoModel();
        $model->delete($dpi);
        return redirect()->to('/ciudadanos');
    }
    
}
?>