<?= $this->include('informacion/encabezado') ?>

<h1>Editar datos de Municipio</h1>

<form action="/municipios/update/<?= $munis['cod_muni']?>" method="post">

    <div class="form-group"> 
        <label for="nombre_municipio">Nombre del municipio: </label>
        <input type="text" name="nombre_municipio" value="<?= $munis['nombre_municipio'] ?>" class="form-control" required>
        <label for="cod_depto">Código de departamento: </label>
        <input type="text" name="cod_depto" value="<?= $munis['cod_depto'] ?>"  class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/municipios" class="btn btn-secondary">Cancelar </a>
</form>
<?= $this->include('informacion/pie')?>