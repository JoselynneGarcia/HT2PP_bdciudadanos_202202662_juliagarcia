<?= $this->include('informacion/encabezado') ?>

<h1>Editar datos de Departamento</h1>

<form action="/departamentos/update/<?= $depto['cod_depto']?>" method="post">

    <div class="form-group"> 
        <label for="nombre_depto">Nombre del departamento: </label>
        <input type="text" name="nombre_depto" value="<?= $depto['nombre_depto'] ?>" class="form-control" required>
        <label for="cod_region">Código de la región: </label>
        <input type="text" name="cod_region" value="<?= $depto['cod_regio'] ?>"  class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/departamentos" class="btn btn-secondary">Cancelar </a>
</form>
<?= $this->include('informacion/pie')?>