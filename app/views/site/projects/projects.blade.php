@extends('site.layouts.base')
{{-- Content --}}
@section('content')
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN TODO SIDEBAR -->
		<div class="todo-sidebar">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
						<span class="caption-subject font-green-sharp bold uppercase">PROYECTOS </span>
					</div>
					<div class="actions">
						<div class="btn-group">
							<a class="btn green-haze btn-circle btn-sm todo-projects-config" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-settings"></i> &nbsp; <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="#" class="">
									<i class="i"></i> Nuevo Proyecto </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
									En Planificación <span class="badge badge-danger">
									4 </span>
									</a>
								</li>
								<li>
									<a href="#">
									En Progreso <span class="badge badge-success">
									12 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Culminados <span class="badge badge-warning">
									9 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Atrasados <span class="badge badge-warning">
									9 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Cancelados <span class="badge badge-warning">
									9 </span>
									</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
									<i class="i"></i> Proyectos Archivados </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="portlet-body todo-project-list-content">
					<div class="todo-project-list">
						<ul class="nav nav-pills nav-stacked">
							<li>
								<a href="#">
								<span class="badge badge-success"> 6 </span> AirAsia Ads </a>
							</li>
							<li>
								<a href="#">
								<span class="badge badge-success"> 2 </span> HSBC Promo </a>
							</li>
							<li class="active">
								<a href="#">
								<span class="badge badge-success badge-active"> 3 </span> GlobalEx System </a>
							</li>
							<li>
								<a href="#">
								<span class="badge badge-default"> 14 </span> Empire City </a>
							</li>
							<li>
								<a href="#">
								<span class="badge badge-success"> 6 </span> AirAsia Ads </a>
							</li>
							<li>
								<a href="#">
								<span class="badge badge-success"> 2 </span> Loop Inc Promo </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END TODO SIDEBAR -->
		<!-- BEGIN TODO CONTENT -->
		<div class="todo-content">
			<div class="portlet light">
				<!-- PROJECT HEAD -->
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-sharp hide"></i>
						<span class="caption-helper">PROYECTO:</span> &nbsp; <span class="caption-subject font-green-sharp bold uppercase">Tune Website</span>
					</div>
					<div class="actions">
						<div class="btn-group">
							<a class="btn green-haze btn-circle btn-sm" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							GESTIONAR <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="#">
									<i class="i"></i> Nueva Actividad </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
									Pendientes <span class="badge badge-danger">
									4 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Culminadas <span class="badge badge-success">
									12 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Atrasadas <span class="badge badge-warning">
									9 </span>
									</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">
									<i class="i"></i> Eliminar Proyecto </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end PROJECT HEAD -->
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-5 col-sm-4">
							<div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
								<div class="todo-tasklist">
									<div class="todo-tasklist-item todo-tasklist-item-border-green">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar4.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Slider Redesign
										</div>
										<div class="todo-tasklist-item-text">
											Lorem dolor sit amet ipsum dolor sit consectetuer dolore.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Sep 2014 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Maxima</span>
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-red">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar5.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Homepage Alignments to adjust
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum dolor sit amet, consectetuer dolore dolor sit amet.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Alta</span>
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-green">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar9.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Slider Redesign
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Alta</span>&nbsp;
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-blue">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar6.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Contact Us Map Location changes
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum amet, consectetuer dolore dolor sit amet.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 04 Oct 2014 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Normal</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Test</span>
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-purple">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar7.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Projects list new Forms
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 19 Dec 2014 </span>
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-yellow">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar8.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											New Search Keywords
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor, consectetuer ipsum consectetuer sit amet dolore.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 02 Feb 2015 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Normal</span>&nbsp;
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-green">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar9.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Slider Redesign
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Alta</span>&nbsp;
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-red">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar5.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Homepage Alignments to adjust
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Alta</span>
										</div>
									</div>
									<div class="todo-tasklist-item todo-tasklist-item-border-blue">
										<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar6.jpg')}}" width="27px" height="27px">
										<div class="todo-tasklist-item-title">
											Contact Us Improvement
										</div>
										<div class="todo-tasklist-item-text">
											Lorem ipsum amet, psum dolor sit consectetuer dolore.
										</div>
										<div class="todo-tasklist-controls pull-left">
											<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Feb 2015 </span>
											<span class="todo-tasklist-badge badge badge-roundless">Normal</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Primary</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="todo-tasklist-devider">
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
								<form action="#" class="form-horizontal">
									<!-- TASK HEAD -->
									<div class="form">
										<div class="form-group">
											<div class="col-md-8 col-sm-8">
												<div class="todo-taskbody-user">
													<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar6.jpg')}}" width="50px" height="50px">
													<span class="todo-username pull-left">Vanessa Bond</span>
													<button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp;Editar&nbsp;</button>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<div class="todo-taskbody-date pull-right">
													<button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp; Culminada &nbsp;</button>
												</div>
											</div>
										</div>
										<!-- END TASK HEAD -->
										<!-- TASK TITLE -->
										<div class="form-group">
											<div class="col-md-12">
												<input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Titulo de Actividad...">
											</div>
										</div>
										<!-- TASK DESC -->
										<div class="form-group">
											<div class="col-md-12">
												<textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Descripción de Actividad..."></textarea>
											</div>
										</div>
										<!-- END TASK DESC -->
										<!-- TASK DUE DATE -->
										<div class="form-group">
											<div class="col-md-12">
												<div class="input-icon">
													<i class="fa fa-calendar"></i>
													<input type="text" class="form-control todo-taskbody-due" placeholder="Fecha de Entrega...">
												</div>
											</div>
										</div>
										<!-- TASK TAGS -->
										<div class="form-group">
											<div class="col-md-12">
												<input type="text" class="form-control todo-taskbody-tags" placeholder="Tags..." value="Pending, Requested">
											</div>
										</div>
										<!-- TASK TAGS -->
										<div class="form-actions right todo-form-actions">
											<button class="btn btn-circle btn-sm green-haze">Guardar Cambios</button>
											<button class="btn btn-circle btn-sm btn-default">Cancelar</button>
										</div>
									</div>
									<div class="tabbable-line">
										<ul class="nav nav-tabs ">
											<li class="active">
												<a href="#tab_1" data-toggle="tab">
												Comentarios </a>
											</li>
											<li>
												<a href="#tab_2" data-toggle="tab">
												Historial </a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1">
												<!-- TASK COMMENTS -->
												<div class="form-group">
													<div class="col-md-12">
														<ul class="media-list">
															<li class="media">
																<a class="pull-left" href="#">
																<img class="todo-userpic" src="{{asset('assets-template/admin/layout/img/avatar8.jpg')}}" width="27px" height="27px">
																</a>
																<div class="media-body todo-comment">
																	<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Responder &nbsp;</button>
																	<p class="todo-comment-head">
																		<span class="todo-comment-username">Christina Aguilera</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 2:05pm</span>
																	</p>
																	<p class="todo-text-color">
																		 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																		 Following code sud be helpful:
																		<pre class="prettyprint linenums">
																			<ol class="linenums">
																				<li class="L0">
																					<span class="dec">&lt;!DOCTYPE html&gt;</span>
																				</li>
																				<li class="L1">
																					<span class="com">&lt;!--[if IE 8]&gt; &lt;html lang="en" class="ie8"&gt; &lt;![endif]--&gt;</span>
																				</li>
																				<li class="L2">
																					<span class="com">&lt;!--[if IE 9]&gt; &lt;html lang="en" class="ie9"&gt; &lt;![endif]--&gt;</span>
																				</li>
																				<li class="L3">
																					<span class="com">&lt;!--[if !IE]&gt;&lt;!--&gt;</span><span class="pln"></span><span class="tag">&lt;html</span><span class="pln"></span><span class="atn">lang</span><span class="pun">=</span><span class="atv">"en"</span><span class="tag">&gt;</span><span class="pln"></span><span class="com">&lt;!--&lt;![endif]--&gt;</span>
																				</li>
																			</ol>
																		</pre>
																	</p>
																	<!-- Nested media object -->
																	<div class="media">
																		<a class="pull-left" href="#">
																		<img class="todo-userpic" src="{{asset('assets-template/admin/layout/img/avatar4.jpg')}}" width="27px" height="27px">
																		</a>
																		<div class="media-body">
																			<p class="todo-comment-head">
																				<span class="todo-comment-username">Carles Puyol</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 4:30pm</span>
																			</p>
																			<p class="todo-text-color">
																				 Thanks so much my dear!
																			</p>
																		</div>
																	</div>
																</div>
															</li>
															<li class="media">
																<a class="pull-left" href="#">
																<img class="todo-userpic" src="{{asset('assets-template/admin/layout/img/avatar5.jpg')}}" width="27px" height="27px">
																</a>
																<div class="media-body todo-comment">
																	<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Responder &nbsp;</button>
																	<p class="todo-comment-head">
																		<span class="todo-comment-username">Andres Iniesta</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 9:22am</span>
																	</p>
																	<p class="todo-text-color">
																		 Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																	</p>
																</div>
															</li>
															<li class="media">
																<a class="pull-left" href="#">
																<img class="todo-userpic" src="{{asset('assets-template/admin/layout/img/avatar6.jpg')}}" width="27px" height="27px">
																</a>
																<div class="media-body todo-comment">
																	<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Responder &nbsp;</button>
																	<p class="todo-comment-head">
																		<span class="todo-comment-username">Olivia Wilde</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 11:50am</span>
																	</p>
																	<p class="todo-text-color">
																		 Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																	</p>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<!-- END TASK COMMENTS -->
												<!-- TASK COMMENT FORM -->
												<div class="form-group">
													<div class="col-md-12">
														<ul class="media-list">
															<li class="media">
																<img class="todo-userpic pull-left" src="{{asset('assets-template/admin/layout/img/avatar4.jpg')}}" width="27px" height="27px">
																<div class="media-body">
																	<textarea class="form-control todo-taskbody-taskdesc" rows="4" placeholder="Type comment..."></textarea>
																</div>
															</li>
														</ul>
														<button type="button" class="pull-right btn btn-sm btn-circle green-haze"> &nbsp; Enviar &nbsp; </button>
													</div>
												</div>
												<!-- END TASK COMMENT FORM -->
											</div>
											<div class="tab-pane" id="tab_2">
												<ul class="todo-task-history">
													<li>
														<div class="todo-task-history-date">
															 20 Jun, 2014 at 11:35am
														</div>
														<div class="todo-task-history-desc">
															 Tarea Creada
														</div>
													</li>
													<li>
														<div class="todo-task-history-date">
															 21 Jun, 2014 at 10:35pm
														</div>
														<div class="todo-task-history-desc">
															 La prioridad de la actividad cambio a "Maxima"
														</div>
													</li>
													<li>
														<div class="todo-task-history-date">
															 22 Jun, 2014 at 11:35am
														</div>
														<div class="todo-task-history-desc">
															 Tarea reasignada a "Nick Larson"
														</div>
													</li>
													<li>
														<div class="todo-task-history-date">
															 30 Jun, 2014 at 8:09am
														</div>
														<div class="todo-task-history-desc">
															 Tarea culminada por "Nick Larson"
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END TODO CONTENT -->
	</div>
</div>
<!-- END PAGE CONTENT-->
@stop