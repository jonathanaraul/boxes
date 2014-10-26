@extends('site.layouts.base')
{{-- Content --}}
@section('content')
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Listado de Desarrolladores
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
							<a href="#">Listado de Desarrolladores</a>
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
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>Desarrolladores
								</div>
							</div>
							<div class="portlet-body flip-scroll">
								<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
								<tr>
									<th width="30%">
										 Usuario
									</th>
									<th width="30%">
										 Grupo
									</th>
									<th width="40%" class="numeric">
										 Email
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