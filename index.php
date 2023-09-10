<?php include 'ini/config.php';?>
<?php include 'ini/top.php';?>

<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Panel</h4>
                    <p class="text-muted page-title-alt">Bienvenido a YocoTec admin !</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-attach-money text-primary"></i>
                        <h2 class="m-0 text-dark counter font-600">50568</h2>
                        <div class="text-muted m-t-5">Total Ultimo Ingreso</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-add-shopping-cart text-pink"></i>
                        <h2 class="m-0 text-dark counter font-600">1256</h2>
                        <div class="text-muted m-t-5">Total ordenes</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-store-mall-directory text-info"></i>
                        <h2 class="m-0 text-dark counter font-600">340</h2>
                        <div class="text-muted m-t-5">Clientes</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-account-child text-custom"></i>
                        <h2 class="m-0 text-dark counter font-600">11</h2>
                        <div class="text-muted m-t-5">Personal</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="text-dark header-title m-t-0 m-b-30">Total Ganancias</h4>
                        <div class="widget-chart text-center">
                            <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                            <h5 class="text-muted m-t-20">Total Ganancias del mes</h5>
                            <h2 class="font-600">Q 4475.00</h2>
                            <ul class="list-inline m-t-15">
                                <li>
                                    <h5 class="text-muted m-t-20">Dia</h5>
                                    <h4 class="m-b-0">Q 1500</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">Semana</h5>
                                    <h4 class="m-b-0">Q 900</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted m-t-20">Mes pasado</h5>
                                    <h4 class="m-b-0">Q 19650</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card-box">
						<h4 class="text-dark header-title m-t-0">Analisis de ventas</h4>
						<div class="text-center">
							<ul class="list-inline chart-detail-list">
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Garrafones</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Bolsas</h5>
								</li>
								<li>
									<h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Otros</h5>
								</li>
							</ul>
						</div>
                        <div id="morris-bar-stacked" style="height: 303px;"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">Ver todas</a>
                        <h4 class="text-dark header-title m-t-0">Liquidacion de dia</h4>
                        <p class="text-muted m-b-30 font-13">
							Reporte de la ultima venta registrada.
						</p>
                        <div class="table-responsive">
                            <table class="table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th>Piloto</th>
                                        <th>Fecha</th>
                                        <th>Ruta</th>
                                        <th>Monto</th>
                                        <th style="min-width: 80px;">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mario Juarez</td>
                                        <td>08/09/2023</td>
                                        <td><a href="#">#001</a></td>
                                        <td>Q 1500.00</td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-box">
                        <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">Ver todos</a>
                        <h4 class="text-dark header-title m-t-0">Productos recientes</h4>
                        <p class="text-muted m-b-30 font-13">
							Ultimos producto agregados.
						</p>
                        <div class="table-responsive">
                            <table class="table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Fecha</th>
                                        <th style="min-width: 80px;">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/images/products/garrafon20l.jpg" class="thumb-sm" alt=""> </td>
                                        <td>Garrafon 20L</td>
                                        <td><b>Q 8.00</b></td>
                                        <td>08/09/2023</td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'ini/foot.php';?>