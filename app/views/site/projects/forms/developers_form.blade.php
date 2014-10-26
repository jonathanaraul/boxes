@extends('site.layouts.base')
{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
		Desarrolladores: <small>Anadir nuevo desarrollador</small>
	</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="index.html">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Desarrolladores</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Añadir nuevo desarrollador</a>
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
						<div class="portlet box yellow ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-puzzle"></i>Añadir Nuevo Desarrollador
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal form-bordered form-row-stripped">
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Usuario</label>
											<div class="col-md-9">
												{{ Form::select('user', ['---Seleccione---', 'Usuarios', 'con Rol', 'Desarrollador'], null, ['class' => 'form-control'] )}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Grupo</label>
											<div class="col-md-9">
												{{ Form::select('grupo', ['---Seleccione---', 'Laravel', 'synfony', 'Android', '.Net'], null, ['class' => 'form-control'] )}}
											</div>
										</div>											
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn yellow"><i class="fa fa-check"></i> Guardar</button>
												<button type="button" class="btn yellow">Cancelar</button>
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