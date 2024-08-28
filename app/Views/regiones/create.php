<?= $this->include('informacion/encabezado')?>

<h1>Agregar Nueva Región</h1>

<from action="/regiones/store" method="post">
    <div class="form-group"> 
        <label for="cod_region">Código de región:  </label>
        <input type="text" name="cod_nivel_acad" class="form-control" required>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" class="form-control" required>
        <label for="descripcion">Descripción: </label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/regiones" class="btn btn-secondary">Cancelar </a>
</from>
<?= $this->include('informacion/pie')?>