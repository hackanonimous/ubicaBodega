			
			<script>
				function mostrar(dato){
			        if(dato=="1"){
			            document.getElementById("formIndertinada").style.display = "flex";
			            document.getElementById("formEspecial").style.display = "none";
			        }
			        if(dato=="2"){
			            document.getElementById("formIndertinada").style.display = "none";
			            document.getElementById("formEspecial").style.display = "flex";
			        }
			    }
			</script>
			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LICENCIA
				</h3>
				<p class="text-justify">
					Podremso generar las licencias de negocios que previamente se hayan registrado sus representantes.
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="<?php echo SERVERURL;?>licenciaNew/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR LICENCIA</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL;?>licenciaList/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LICENCIAS</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL;?>licenciaSearch/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR LICENCIA</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información de licencia</legend>
						<div class="container-fluid">


							<input type="radio" name="licencia" id="indeterminada" value="1" onchange="mostrar(this.value);"><label for="">indeterminada</label>
							<input type="radio" name="licencia" id="especial" value="2" onchange="mostrar(this.value);"><label for="">especial</label>

				
							<div class="row" id="formIndertinada" style="display:none;">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">Tipo de Licencia</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">Indeterminada</option>
											<option value="Deshabilitado">Especial</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">N° Expediente</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="40">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">DNI</label>
										<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="cliente_dni_reg" id="cliente_dni" maxlength="27">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="40">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">Apellido</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="40">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="150">
									</div>
								</div>
							</div>
							<div class="row" id="formEspecial" style="display:none;">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">Tipo de Licencia</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">Indeterminada</option>
											<option value="Deshabilitado">Especial</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="150">
									</div>
								</div>
							</div>


						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>	