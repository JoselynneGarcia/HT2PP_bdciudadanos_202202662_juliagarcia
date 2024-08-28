<?= $this->include('informacion/encabezado')?>

<h1>Ciudadanos</h1>
<a href="/ciudadanos/create" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Agregar Nuevo Ciudadano
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>DPI: </th>
            <th>Apellido: </th>
            <th>Nombre: </th>
            <th>Dirección: </th>
            <th>Número de teléfono (Casa): </th>
            <th>Número de teléfono (Movil): </th>
            <th>Correo electrónico: </th>
            <th>Fecha de nacimiento: </th>
            <th>Código nivel académico: </th>
            <th>Código municipal: </th>
            <th>Código Nivel Académico: </th>
            <th>Contraseña: </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ciudadanos as $ciudadano): ?>
            <tr>
                <td><?php echo $ciudadano-> dpi ?></td>
                <td><?php echo $ciudadano-> apellido ?></td>
                <td><?php echo $ciudadano-> nombre ?></td>
                <td><?php echo $ciudadano-> direccion ?></td>
                <td><?php echo $ciudadano-> tel_casa ?></td>
                <td><?php echo $ciudadano-> tel_movil ?></td>
                <td><?php echo $ciudadano-> email ?></td>
                <td><?php echo $ciudadano-> fechanac ?></td>
                <td><?php echo $ciudadano-> cod_nivel_acad ?></td>
                <td><?php echo $ciudadano-> cod_muni ?></td>
                <td><?php echo $ciudadano-> contra ?></td>
                <td>
                    <a href="/ciudadanos/edit/<?= $ciudadano->dpi?>" class="btn btn-warning">Editar</a>
                    <a href="/ciudadanos/delet/<?= $ciudadano->dpi?>" class="btn btn-danger" onclick="return confirm ('¿Seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver al Menú Principal</a>
<?= $this->include('informacion/pie') ?>