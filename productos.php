<?php include 'ini/config.php';?>
<?php include 'ini/top.php';?>

<?php
require 'vendor/autoload.php';
    $clase = new YocoTec\Producto;
    $infoClase = $clase->mostrar();
    $cantidad = count($infoClase);
?>

<div class="content-page">
	<div class="content">
		<div class="container">
            <div class="row">
				<div class="col-sm-12">
					<h4 class="page-title">Productos</h4>
					<ol class="breadcrumb">
                        <li>
                            <a href="index.php">Panel</a>
                        </li>
                        <li class="active">
                            Productos
                        </li>
					</ol>
				</div>
			</div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="btn01 text-right">
                            <a href="prod_detalle.php" class="btn btn-default btn-md waves-effect waves-light m-b-15"><i class="md md-add"></i> Agregar</a>
                        </div>
                        <table id="datatable" class="table table-actions-bar table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Producto</th>
                                    <th>Office</th>
                                    <th>Status</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if($cantidad > 0){
                                    $c=0;
                                for($x = 0; $x < $cantidad; $x++){
                                    $c++;
                                    $item = $infoClase[$x];
                                ?>
                                <tr>
                                    <td><?php print $c?></td>
                                    <td><?php print $item['nombre_producto']?></td>
                                    <td>
                                        <span class="label label-primary">Activo</span>
                                    </td>
                                    <td>Q 10.00</td>
                                    <td>Q 10.00</td>
                                    <td class="text-center">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    }else{
                                ?>
                                <tr>
                                    <td colspan="6">NO HAY REGISTROS</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'ini/foot.php';?>