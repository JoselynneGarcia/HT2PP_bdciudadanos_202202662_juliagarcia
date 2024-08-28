<?= $this->include('informacion/encabezado')?>

<h1>Agregar Nuevo Departamento</h1>

<from action="/departamentos/store" method="post">
    <div class="form-group"> 
        <label for="cod_depto">Código del departamento:  </label>
        <input type="text" name="cod_depto" class="form-control" required>
        <label for="nombre_depto">Nombre del departamento: </label>
        <input type="text" name="nombre_depto" class="form-control" required>
        <label for="cod_region">Código de la región: </label>
        <input type="text" name="cod_region" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/departamentos" class="btn btn-secondary">Cancelar </a>
</from>
<?= $this->include('informacion/pie')?>