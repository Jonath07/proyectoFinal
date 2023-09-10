<?php include 'ini/config.php';?>
<?php include 'ini/top.php';?>

<div class="content-page">
               
                <div class="content">
                    <div class="container">

						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Add/ Edit Producto</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Panel</a>
									</li>
                                    <li>
										<a href="productos.php">Productos</a>
									</li>
									<li class="active">
										Add/Edit Producto
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
                            <div class="col-sm-12">


                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-box">
                                                    <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

                                                    <div class="form-group m-b-20">
                                                        <label>Nombre de Producto <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="e.g : Apple iMac">
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Referencias <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="e.g : Apple iMac">
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Descripcion Producto <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" rows="5" placeholder="Please enter description"></textarea>
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Resumen de Producto</label>
                                                        <textarea class="form-control" rows="3" placeholder="Please enter summary"></textarea>
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Categoria <span class="text-danger">*</span></label>
                                                        <select class="form-control select2">
                                                            <option>Seleccionar</option>
                                                            <optgroup label="Shopping">
                                                                <option value="SH1">Shopping 1</option>
                                                                <option value="SH2">Shopping 2</option>
                                                                <option value="SH3">Shopping 3</option>
                                                                <option value="SH4">Shopping 4</option>
                                                            </optgroup>
                                                            <optgroup label="CRM">
                                                                <option value="CRM1">Crm 1</option>
                                                                <option value="CRM2">Crm 2</option>
                                                                <option value="CRM3">Crm 3</option>
                                                                <option value="CRM4">Crm 4</option>
                                                            </optgroup>
                                                            <optgroup label="eCommerce">
                                                                <option value="E1">eCommerce 1</option>
                                                                <option value="E2">eCommerce 2</option>
                                                                <option value="E3">eCommerce 3</option>
                                                                <option value="E4">eCommerce 4</option>
                                                            </optgroup>

                                                        </select>

                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Precio <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" value="Q 562.56">
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label class="m-b-15">Status <span class="text-danger">*</span></label>
                                                        <br/>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                            <label for="inlineRadio1"> Activo </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                            <label for="inlineRadio2"> Agotado </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                                            <label for="inlineRadio3"> Suspendido </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-10">
                                                        <label>Comentario</label>
                                                        <textarea class="form-control" rows="3" placeholder="Please enter summary"></textarea>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="card-box">
                                                    <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Meta Data</b></h5>

                                                    <div class="form-group m-b-20">
                                                        <label>Meta title</label>
                                                        <input type="text" class="form-control" placeholder="Enter title">
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Meta Keywords</label>
                                                        <input type="text" class="form-control" placeholder="Enter keywords">
                                                    </div>

                                                    <div class="form-group m-b-20">
                                                        <label>Meta Description </label>
                                                        <textarea class="form-control" rows="5" placeholder="Please enter description"></textarea>
                                                    </div>

                                                </div>

                                                <div class="card-box">
                                                    <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Imagen de Producto</b></h5>
                                                    <div class="text-center m-t-30">
                                                        <div class="fileupload btn btn-purple btn-md w-md waves-effect waves-light">
                                                            <span><i class="ion-upload m-r-5"></i>Upload</span>
                                                            <input type="file" class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <hr />
                                                <div class="text-center p-20">
                                                    <a href="productos.php" type="button" class="btn w-sm btn-white waves-effect">Cancelar</a>
                                                    <button type="button" class="btn w-sm btn-default waves-effect waves-light">Guardar</button>
			                                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Eliminar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div> 
                    
                </div> 

<?php include 'ini/foot.php';?>