<!-- CCabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Registrar Nueva Licencia</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>">Home</a></li>
          <li class="breadcrumb-item active">Registro de licencia</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.Cabezera de contenido central -->
<section class="content">
	<div class="container-fluid">
		<!-- Formularios -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de licencia</h3>
              </div>
              <hr>
             	<div class="col-12">
		            <div class="card card-primary card-outline card-outline-tabs">
			        	<div class="card-header p-0 border-bottom-0">
			                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
			                  <li class="nav-item">
			                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#licencia-indeterminada" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Licencia Indeterminada</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#licencia-especial" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Licencia Especial</a>
			                  </li>
			                </ul>
			        	</div>
		              <div class="card-body">
		                <div class="tab-content" id="custom-tabs-four-tabContent">
		                  <div class="tab-pane fade show active" id="licencia-indeterminada" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
			                	<form>
					                <div class="card-body row">
					                  <div class="form-group col-md-6">
					                    <label>Numero de Expediente</label>
					                    <input type="number" class="form-control" placeholder="Ingrese su numero de expediente">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Direccion del local</label>
					                    <input type="text" class="form-control" placeholder="Ingrese la direccion del local">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Area del local</label>
					                    <input type="number" class="form-control" placeholder="Ingrese el area del local">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Seleccione la Empresa</label>
					                    <select class="select2" multiple="multiple" data-placeholder="Seleccione Representante" style="width: 100%;">
					                      <option>Alabama</option>
					                      <option>Alaska</option>
					                      <option>California</option>
					                      <option>Delaware</option>
					                      <option>Tennessee</option>
					                      <option>Texas</option>
					                      <option>Washington</option>
					                    </select>
					                  </div>
					                </div>
					                <!-- /.card-body -->
					                <div class="card-footer">
					                  <button type="submit" class="btn btn-primary">Registrar</button>
					                </div>
					            	</form>
		                  </div>
		                  <div class="tab-pane fade" id="licencia-especial" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
		                     <form>
					                <div class="card-body row">
					                  <div class="form-group col-md-6">
					                    <label>Numero de Expediente</label>
					                    <input type="number" class="form-control" placeholder="Ingrese su numero de expediente">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Direccion del local</label>
					                    <input type="text" class="form-control" placeholder="Ingrese la direccion del local">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Area del local</label>
					                    <input type="number" class="form-control" placeholder="Ingrese el area del local">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Seleccione la Empresa</label>
					                    <select class="select2" multiple="multiple" data-placeholder="Seleccione Representante" style="width: 100%;">
					                      <option>Alabama</option>
					                      <option>Alaska</option>
					                      <option>California</option>
					                      <option>Delaware</option>
					                      <option>Tennessee</option>
					                      <option>Texas</option>
					                      <option>Washington</option>
					                    </select>
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Fecha de inicio de Actividad</label>
					                    <input type="date" class="form-control" placeholder="Ingrese la fecha de inicio">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Fecha de finalización de Actividad</label>
					                    <input type="date" class="form-control" placeholder="Ingrese la fecha de finalización">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Horario de Apertura</label>
					                    <input type="time" class="form-control" placeholder="">
					                  </div>
					                  <div class="form-group col-md-6">
					                    <label>Horario de Cierre</label>
					                    <input type="time" class="form-control" placeholder="">
					                  </div>
					                </div>
					                <!-- /.card-body -->
					                <div class="card-footer">
					                  <button type="submit" class="btn btn-primary">Registrar</button>
					                </div>
					            	</form>
		                  </div>
		                </div>
		              </div>
		              <!-- /.card -->
		            </div>
          		</div>
              <!-- /.card-header -->
              <!-- form start -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.Formularios -->
	</div>
</section>  
 
