@extends('site.layouts.base')

{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Online
    <small>Listado de usuarios en linea</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="portlet light">
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">

                    @for ($i = 0; $i < count($data['objects']); $i++)

                    <li class="timeline-{{$data['colors'][$i]}} @if($i==2)timeline-noline @endif">
                        <div class="timeline-time">
											<span class="date">
											4/10/13 </span>
											<span class="time">
											18:30 </span>
                        </div>
                        <div class="timeline-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="timeline-body">
                            <h2>ICT 2013 20th International Conference</h2>

                            <div class="timeline-content">
                                Ricebean black-eyed pea maize scallion green bean spinach cabbage jicama bell pepper
                                carrot onion corn plantain garbanzo. Winter purslane courgette pumpkin quandong
                                komatsuna fennel green bean cucumber watercress. Parsley amaranth tigernut silver beet
                                maize fennel spinach. Ricebean black-eyed pea maize scallion green bean spinach cabbage
                                jicama bell pepper carrot onion corn plantain garbanzo.
                            </div>
                        </div>
                    </li>

                    @endfor

                </ul>
            </div>
        </div>
    </div>
</div>
@stop