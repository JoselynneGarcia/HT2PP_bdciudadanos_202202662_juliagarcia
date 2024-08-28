<?= $this->include('informacion/encabezado')?>
<h1>Regiones</h1>
<a href="/regiones/create" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Agregar Nueva Región
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Código de región: </th>
            <th>Nombre de la región: </th>
            <th>Descripción: </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($regiones as $region): ?>
            <tr>
                <td><?php echo $region-> cod_region ?></td>
                <td><?php echo $region-> nombre ?></td>
                <td><?php echo $region-> descripcion ?></td>
                <td>
                    <a href="/regiones/edit/<?= $region->cod_region?>" class="btn btn-warning">Editar</a>
                    <a href="/regiones/delet/<?= $region->cod_region?>" class="btn btn-danger" onclick="return confirm ('¿Seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver al Menú Principal</a>
<?= $this->include('informacion/pie') ?>
