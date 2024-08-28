<?= $this->include('informacion/encabezado') ?>

<h1>Editar datos de Ciudadano</h1>

<form action="/ciudadanos/update/<?= $ciudadano['dpi']?>" method="post">

    <div class="form-group"> 
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" value="<?= $ciudadano['apellido'] ?>" class="form-control" required>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?= $ciudadano['nombre'] ?>"  class="form-control" required>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" value="<?= $ciudadano['direccion'] ?>"  class="form-control" required>
        <label for="tel_casa">Número de teléfono (Casa): </label>
        <input type="number" name="tel_casa" id="tel_casa" value="<?= $ciudadano['tel_casa'] ?>"  class="form-control">
        <label for="tel_movil">Número de teléfono (Movil): </label>
        <input type="number" name="tel_movil" id="tel_movil" value="<?= $ciudadano['tel_movil'] ?>" class="form-control">
        <label for="email">Correo electrónico: </label>
        <input type="email" name="email" id="email" value="<?= $ciudadano['email'] ?>"  class="form-control" required>
        <label for="fechanac">Fecha de nacimiento: </label>
        <input type="date" name="fechanac" id="fechanac" value="<?= $ciudadano['fechanac'] ?>"  class="form-control" required>
        <label for="cod_nivel_acad">Código nivel académico: </label>
        <input type="cod_nivel_acad" value="<?= $ciudadano['cod_nivel_acad'] ?>"  class="form-control" required>
        <label for="cod_muni">Código municipal: </label>
        <input type="cod_muni" value="<?= $ciudadano['cod_muni'] ?>"  class="form-control" required>
        <label for="contra">Contraseña: </label>
        <input type="password" name="contra" id="contra" value="<?= $ciudadano['contra'] ?>"  class="form-control" required>

    </div>
    <button type="submit" class="btn btn-primary">Guardar </button>
    <a href="/ciudadanos" class="btn btn-secondary">Cancelar </a>
</form>
<?= $this->include('informacion/pie')?>