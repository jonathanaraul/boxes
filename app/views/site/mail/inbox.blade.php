@extends('site.layouts.base')
{{-- Content --}}
@section('content')
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Inbox <small> Bandeja de Entrada</small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Inbox</a>
						</li>
					</ul>
					<div class="page-toolbar">
						<div class="btn-group pull-right">
							<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							Actions <i class="fa fa-angle-down"></i>
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
				<div class="portlet light">
					<div class="portlet-body">
						<div class="row inbox">
							<div class="col-md-2">
								<ul class="inbox-nav margin-bottom-10">
									<li class="compose-btn">
										<a href="javascript:;" data-title="Compose" class="btn green">
										<i class="fa fa-edit"></i> Redactar </a>
									</li>
									<li class="inbox active">
										<a href="javascript:;" class="btn" data-title="Recibidos">
										Recibidos (3) </a>
										<b></b>
									</li>
									<li class="sent">
										<a class="btn" href="javascript:;" data-title="Enviados">
										Enviados </a>
										<b></b>
									</li>
									<li class="draft">
										<a class="btn" href="javascript:;" data-title="Borradores">
										Borradores </a>
										<b></b>
									</li>
									<li class="trash">
										<a class="btn" href="javascript:;" data-title="Papelera">
										Papelera </a>
										<b></b>
									</li>
								</ul>
							</div>
							<div class="col-md-10">
								<div class="inbox-header">
									<h1 class="pull-left">Inbox</h1>
									<form class="form-inline pull-right" action="index.html">
										<div class="input-group input-medium">
											<input type="text" class="form-control" placeholder="Buscar">
											<span class="input-group-btn">
											<button type="submit" class="btn green"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<div class="inbox-loading">
									 Cargando...
								</div>
								<div class="inbox-content">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
@stop