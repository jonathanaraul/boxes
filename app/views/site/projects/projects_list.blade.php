@extends('site.layouts.base')
{{-- Content --}}
@section('content')
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Listado de Proyectos
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Listados</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Listado de Proyectos</a>
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
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="note note-success note-bordered">
							<p>
								 <h4>Listado completo de proyectos.</h4>
							</p>
						</div>
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>Proyectos
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body flip-scroll">
								<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
								<tr>
									<th width="20%">
										 Titulo
									</th>
									<th width="25%">
										 Cliente
									</th>
									<th width="20%"class="numeric">
										 Fecha de Inicio
									</th>
									<th width="20%"class="numeric">
										 Fecha de Finalización
									</th>
									<th width="15%" class="numeric">
										 Estado
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 AAC
									</td>
									<td>
										 AUSTRALIAN AGRICULTURAL COMPANY LIMITED.
									</td>
									<td class="numeric">
										 -0.36%
									</td>
									<td class="numeric">
										 $1.39
									</td>
									<td class="numeric">
										 $1.39
									</td>
								</tr>
								<tr>
									<td>
										 AAD
									</td>
									<td>
										 ARDENT LEISURE GROUP
									</td>
									<td class="numeric">
										 1.32%
									</td>
									<td class="numeric">
										 $1.14
									</td>
									<td class="numeric">
										 $1.15
									</td>
								</tr>
								<tr>
									<td>
										 AAX
									</td>
									<td>
										 AUSENCO LIMITED
									</td>
									<td class="numeric">
										 -0.99%
									</td>
									<td class="numeric">
										 $4.01
									</td>
									<td class="numeric">
										 $4.05
									</td>
								</tr>
								<tr>
									<td>
										 ABC
									</td>
									<td>
										 ADELAIDE BRIGHTON LIMITED
									</td>
									<td class="numeric">
										 2.04%
									</td>
									<td class="numeric">
										 $2.98
									</td>
									<td class="numeric">
										 $3.00
									</td>
								</tr>
								<tr>
									<td>
										 ABP
									</td>
									<td>
										 ABACUS PROPERTY GROUP
									</td>
									<td class="numeric">
										 0.00%
									</td>
									<td class="numeric">
										 $1.92
									</td>
									<td class="numeric">
										 $1.93
									</td>
								</tr>
								<tr>
									<td>
										 ABY
									</td>
									<td>
										 ADITYA BIRLA MINERALS LIMITED
									</td>
									<td class="numeric">
										 2.00%
									</td>
									<td class="numeric">
										 $0.76
									</td>
									<td class="numeric">
										 $0.77
									</td>
								</tr>
								<tr>
									<td>
										 ACR
									</td>
									<td>
										 ACRUX LIMITED
									</td>
									<td class="numeric">
										 0.14%
									</td>
									<td class="numeric">
										 $3.70
									</td>
									<td class="numeric">
										 $3.72
									</td>
								</tr>
								<tr>
									<td>
										 ADU
									</td>
									<td>
										 ADAMUS RESOURCES LIMITED
									</td>
									<td class="numeric">
										 0.00%
									</td>
									<td class="numeric">
										 $0.73
									</td>
									<td class="numeric">
										 $0.74
									</td>
								</tr>
								<tr>
									<td>
										 AGG
									</td>
									<td>
										 ANGLOGOLD ASHANTI LIMITED
									</td>
									<td class="numeric">
										 -2.74%
									</td>
									<td class="numeric">
										 $7.82
									</td>
									<td class="numeric">
										 $7.82
									</td>
								</tr>
								<tr>
									<td>
										 AGK
									</td>
									<td>
										 AGL ENERGY LIMITED
									</td>
									<td class="numeric">
										 0.14%
									</td>
									<td class="numeric">
										 $13.83
									</td>
									<td class="numeric">
										 $13.83
									</td>
								</tr>
								<tr>
									<td>
										 AGO
									</td>
									<td>
										 ATLAS IRON LIMITED
									</td>
									<td class="numeric">
										 -0.47%
									</td>
									<td class="numeric">
										 $3.11
									</td>
									<td class="numeric">
										 $3.22
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
					</div>
				</div>
<!-- END PAGE CONTENT-->
@stop