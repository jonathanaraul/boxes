@extends('site.layouts.base')
{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
		Actividades: <small>Crear actividad</small>
	</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="index.html">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Actividades</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Crear Actividad</a>
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
						<div class="portlet box blue ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-docs"></i>Crear Nueva Actividad
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal form-bordered form-row-stripped">
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">Tipo de Actividad</label>
											<div class="col-md-9">
												{{ Form::select('tipo', ['---Seleccione---', 'Desarrollo', 'Correccion'], null, ['class' => 'form-control'] )}}
												<span class="help-block">
												Seleccione el tipo de actividad a crear </span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Descripción</label>
											<div class="col-md-9">
												{{ Form::text('descripcion', null, array('class' => 'form-control')) }}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Prioridad</label>
											<div class="col-md-9">
												{{ Form::select('prioridad', ['---Seleccione---', 'Máxima', 'Alta', 'Normal'], null, ['class' => 'form-control'] )}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Fecha de Entrega</label>
											<div class="col-md-9">
												{{ Form::input('date', 'fecha_entrega', null, ['class' => 'form-control', 'placeholder' => 'dd/mm/aaaa']);}}
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Proyecto</label>
											<div class="col-md-9">
												{{ Form::select('proyecto', ['Proyectos', 'en Base', 'de Datos'], null, ['class' => 'form-control'] )}}
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-md-3">Desarrolladores</label>
											<div class="col-md-9">
												<select id="in" name="desarrolladores[ ]" size="3" class="form-control" multiple="multiple">
											        <option value=" ">--Valores seran llamados desde Base de Datos--</option>
											        <option value="0">Desarrollador1</option>
											        <option value="1">Desarrollador2</option>
											        <option value="2">Desarrollador3</option>
											        <option value="3">Desarrollador4</option>
											        <option value="4">Desarrollador5</option>
											        <option value="5">Desarrollador6</option>
											        <option value="6">Desarrollador7</option>
											        <option value="7">Desarrollador8</option>
											        <option value="8">Desarrollador9</option>
											     </select>
											</div>
										</div>														
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Guardar</button>
												<button type="button" class="btn blue">Cancelar</button>
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