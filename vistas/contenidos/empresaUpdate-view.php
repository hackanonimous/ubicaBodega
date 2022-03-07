<!-- CCabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Registrar una Empresa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>">Home</a></li>
          <li class="breadcrumb-item active">Registrar Empresa</li>
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
                <h3 class="card-title">Registro de Empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>N° RUC</label>
                    <input type="number" class="form-control" placeholder="Ingrese su numero de RUC">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Razon Social</label>
                    <input type="text" class="form-control" placeholder="Ingrese sus Razon social">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email">
                  </div>
                  <div class="form-group col-md-6">
                    <label>N° de Celular</label>
                    <input type="number" class="form-control" placeholder="Ingrese su numero de celular">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Giro del Negocio</label>
                    <input type="text" class="form-control" placeholder="Ingrese el Giro del negocio">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Seleccione Representante</label>
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
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.Formularios -->
  </div>
</section>  
