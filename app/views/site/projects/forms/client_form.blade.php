@extends('site.layouts.base')
{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
		Clientes: <small>Anadir nuevo cliente</small>
	</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="index.html">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Clientes</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Añadir nuevo cliente</a>
				</li>
			</ul>
			<div class="page-toolbar">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
					Acciones <i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li>
							<a href="#">Another action</a>
						</li>
						<li>
							<a href="#">Something else here</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">Separated link</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="col-md-12">
			<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
					<div class="tab-pane" id="tab_6">
						<div class="portlet box green ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-user"></i>Añadir Nuevo Cliente
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal form-bordered form-row-stripped">
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Usuario</label>
											<div class="col-md-9">
												{{ Form::select('user', ['---Seleccione---', 'Usuarios', 'con Rol', 'Cliente'], null, ['class' => 'form-control'] )}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">País</label>
											<div class="col-md-9">
												{{ Form::select('pais', ['---Seleccione---', 'pais1', 'pais2', 'pais3'], null, ['class' => 'form-control'] )}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Ciudad</label>
											<div class="col-md-9">
												{{ Form::select('ciudad', ['---Seleccione---', 'ciudad1', 'ciudad2', 'ciudad3'], null, ['class' => 'form-control'] )}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Descripción</label>
											<div class="col-md-9">
												{{ Form::text('descripcion', null, array('class' => 'form-control')) }}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Skype</label>
											<div class="col-md-9">
												{{ Form::text('skype', null, array('class' => 'form-control')) }}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Huso Horario</label>
											<div class="col-md-9">
												{{ Form::select('huso', ['---Seleccione---', 'husohorario1', 'husohorario2', 'husohorario3'], null, ['class' => 'form-control'] )}}
											</div>
										</div>												
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green"><i class="fa fa-check"></i> Guardar</button>
												<button type="button" class="btn green">Cancelar</button>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
<!-- END PAGE CONTENT-->
@stop