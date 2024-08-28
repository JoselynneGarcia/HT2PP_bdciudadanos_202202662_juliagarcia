<?= $this->include('informacion/encabezado') ?>

<h1>Editar datos de la Región</h1>

<form action="/regiones/update/<?= $region->cod_region?>" method="post">

    <div class="form-group"> 
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?= $region->nombre ?>" class="form-control" required>
        <label for="descripcion">Descripción: </label>
        <input type="text" name="descripcion" value="<?= $region->descripcion ?>"  class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/regiones" class="btn btn-secondary">Cancelar </a>
</form>
<?= $this->include('informacion/pie')?>