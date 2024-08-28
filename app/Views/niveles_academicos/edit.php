<?= $this->include('informacion/encabezado') ?>

<h1>Editar datos del Nivel Académico</h1>

<form action="/nivelesacad/update/<?= $nivel->cod_nivel_acad?>" method="post">

    <div class="form-group"> 
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?= $nivel->nombre ?>" class="form-control" required>
        <label for="descripcion">Descripción: </label>
        <input type="text" name="descripcion" value="<?= $nivel->descripcion ?>"  class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/nivelesacad" class="btn btn-secondary">Cancelar </a>
</form>
<?= $this->include('informacion/pie')?>