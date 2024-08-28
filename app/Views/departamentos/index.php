<?= $this->include('informacion/encabezado')?>

<h1>Departamentos</h1>
<a href="/departamentos/create" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Agregar Nuevo Departamento
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Código del departamento: </th>
            <th>Nombre del departamento: </th>
            <th>Código de la región: </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($departamentos as $depto): ?>
            <tr>
                <td><?php echo $depto-> cod_depto ?></td>
                <td><?php echo $depto-> nombre_depto ?></td>
                <td><?php echo $depto-> cod_region ?></td>
                <td>
                    <a href="/departamentos/edit/<?= $depto->cod_depto?>" class="btn btn-warning">Editar</a>
                    <a href="/departamentos/delet/<?= $depto->cod_depto?>" class="btn btn-danger" onclick="return confirm ('¿Seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver al Menú Principal</a>
<?= $this->include('informacion/pie') ?>
