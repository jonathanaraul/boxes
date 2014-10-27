@extends('site.layouts.base')

{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Blog <small>blog listing and post samples</small>
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
            <a href="#">Blog</a>
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
        <div class="row">
            <div class="col-md-12 blog-page">
                <div class="row">
                    <div class="col-md-12 col-sm-12 article-block">
                        <h1 style="margin-top:0px">Latest Blog</h1>
                        @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-4 blog-img blog-tag-data">
                                <img src="{{asset('assets-template/admin/pages/media/gallery/image4.jpg')}}" alt="" class="img-responsive">
                                <ul class="list-inline">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <a href="#">
                                            {{{ $post->date() }}} </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        <a href="{{{ $post->url() }}}#comments">
                                            {{$post->comments()->count()}}
                                            {{ \Illuminate\Support\Pluralizer::plural('Comment',
                                            $post->comments()->count()) }}
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        <a href="#">
                                            {{{ $post->author->username }}}
                                        </a>
                                    </li>

                                </ul>
                                {{--<ul class="list-inline blog-tags">
                                    <li>
                                        <i class="fa fa-tags"></i>
                                        <a href="#">
                                            Technology </a>
                                        <a href="#">
                                            Education </a>
                                        <a href="#">
                                            Internet </a>
                                    </li>
                                </ul>--}}
                            </div>
                            <div class="col-md-8 blog-article">
                                <h3>
                                    <a href="{{{ $post->url() }}}">
                                        {{ String::title($post->title) }} </a>
                                </h3>
                                <p>
                                    {{ String::tidy(Str::limit($post->content, 500)) }}
                                </p>
                                <a class="btn blue" href="{{{ $post->url() }}}">
                                    Read more <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                    <!--end col-md-9-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop
