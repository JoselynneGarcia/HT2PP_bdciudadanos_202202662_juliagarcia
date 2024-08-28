<?= $this->include('informacion/encabezado')?>

<h1>Municipios</h1>
<a href="/municipios/create" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Agregar Nuevo Municipio
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Código del municipio: </th>
            <th>Nombre del municipio: </th>
            <th>Código de departamento: </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($municipios as $munis): ?>
            <tr>
                <td><?php echo $munis-> cod_muni ?></td>
                <td><?php echo $munis-> nombre_municipio ?></td>
                <td><?php echo $munis-> cod_depto ?></td>
                <td>
                    <a href="/municipios/edit/<?= $munis->cod_muni?>" class="btn btn-warning">Editar</a>
                    <a href="/municipios/delet/<?= $munis->cod_muni?>" class="btn btn-danger" onclick="return confirm ('¿Seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver al Menú Principal</a>
<?= $this->include('informacion/pie') ?>
