<?= $this->include('informacion/encabezado')?>

<h1>Niveles Academicos</h1>
<a href="/niveles_academicos/create" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Agregar Nuevo Nivel
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Código nivel académico: </th>
            <th>Nombre: </th>
            <th>Descripción: </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($nivelesacad as $nivel): ?>
            <tr>
                <td><?php echo $nivel-> cod_nivel_acad ?></td>
                <td><?php echo $nivel-> nombre ?></td>
                <td><?php echo $nivel-> descripcion ?></td>
                <td>
                    <a href="/niveles_academicos/edit/<?= $nivel->cod_nivel_acad?>" class="btn btn-warning">Editar</a>
                    <a href="/niveles_academicos/delet/<?= $nivel->cod_nivel_acad?>" class="btn btn-danger" onclick="return confirm ('¿Seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; 
        ?>
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver al Menú Principal</a>
<?= $this->include('informacion/pie') ?>

