@extends('site.layouts.base')

@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Canvas <small>Collaborate</small>
</h3>
<!-- END PAGE HEADER-->
<div class="portlet light">
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12 blog-page">
                <div class="row">
                    <div class="col-md-12 col-sm-12 article-block">
                        <div id="myCanvas" style=" border: 2px solid;"></div>

                        <div id="buttons">
                            <!-- <input type="button" id="agregar" name="agregar" value="Agregar" onclick="agregar();"> -->
                            @if (Auth::check())
                            <input type="button" id="addRect" name="addRect" value="A&ntilde;adir" onclick="addRect();">
                            <input type="button" id="refresh" name="refresh" value="Refrescar" onclick="refresh();">
                            @else
                            <h4>Debe loguearse para participar user:admin, password:admin</h4>
                            @endif
                        </div>

                        {{--<div id="OtheUserCanvas" style=" border: 2px solid;"></div>--}}

                    </div>
                    <!--end col-md-9-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('jsBottom')
<script src="{{asset('assets-template/admin/pages/scripts/inbox.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kinetic/kinetic-v5.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/kinetic/jquery-2.1.1.min.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.3/jquery.mousewheel.min.js"></script>
<script src="{{asset('assets/js/kinetic/app.js')}}"></script>
<script type="javascript">
</script>
@stop