<?= $this->include('informacion/encabezado')?>

<h1>Agregar Nuevo Nivel Académico</h1>

<from action="/nivelesacad/store" method="post">
    <div class="form-group"> 
        <label for="cod_nivel_acad">Código nivel académico:  </label>
        <input type="text" name="cod_nivel_acad" class="form-control" required>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" class="form-control" required>
        <label for="descripcion">Descripción: </label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/nivelesacad" class="btn btn-secondary">Cancelar </a>
</from>
<?= $this->include('informacion/pie')?>