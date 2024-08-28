<?= $this->include('informacion/encabezado')?>

<h1>Agregar Nuevo Municipio</h1>

<from action="/municipios/store" method="post">
    <div class="form-group"> 
        <label for="cod_muni">Código del municipio:  </label>
        <input type="text" name="cod_muni" class="form-control" required>
        <label for="nombre_municipio">Nombre del municipio: </label>
        <input type="text" name="nombre_municipio" class="form-control" required>
        <label for="cod_depto">Código del departamento: </label>
        <input type="text" name="cod_depto" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/mumicipios" class="btn btn-secondary">Cancelar </a>
</from>
<?= $this->include('informacion/pie')?>