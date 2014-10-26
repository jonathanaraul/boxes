@extends('site.layouts.base')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
<meta name="description" content="{{{ $post->meta_description() }}}"/>

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
<meta name="keywords" content="{{{ $post->meta_keywords() }}}"/>

@stop

@section('meta_author')
<meta name="author" content="{{{ $post->author->username }}}"/>
@stop

{{-- Content --}}
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
Blog Post <small>blog post samples</small>
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			{{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Pages</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Blog Post</a>
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
<div class="portlet light">
	<div class="portlet-body">
		<div class="row">
			<div class="col-md-12 blog-page">
				<div class="row">
					<div class="col-md-9 article-block">
						<h3 style="margin-top:0;">{{ $post->title }}</h3>
						<div class="blog-tag-data">
							<img src="{{asset('assets-template/admin/pages/media/gallery/item_img.jpg')}}" class="img-responsive" alt="">
							<div class="row">
								<div class="col-md-6">
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">
											Technology </a>
											<a href="#">
											Education </a>
											<a href="#">
											Internet </a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 blog-tag-data-inner">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="#">
											Posted {{{ $post->date() }}}</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											{{ $comments->count() }} {{ \Illuminate\Support\Pluralizer::plural('Comment', $comments->count()) }} </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--end news-tag-data-->
						<div>
							<p>
								 {{ $post->content() }}
							</p>
						</div>
						<hr>
						<div class="media">
							<h3>Comments</h3>
							@if ($comments->count())
								@foreach ($comments as $comment)
								<a href="#" class="pull-left">
								<img alt="" src="{{asset('assets-template/admin/pages/media/blog/9.jpg')}}" class="media-object">
								</a>
								<div class="media-body">
									<h4 class="media-heading">{{{ $comment->author->username }}}<span>
									{{{ $comment->date() }}} / <a href="#">
									Reply </a>
									</span>
									</h4>
									<p>
										 {{{ $comment->content() }}}
									</p>
									<hr>
								</div>
								@endforeach
							@else
							<hr/>
							@endif
						</div>
						<!--end media-->
						@if ( ! Auth::check())
						You need to be logged in to add comments.<br/><br/>
						Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
						@elseif ( ! $canComment )
						You don't have the correct permissions to add comments.
						@else
						
						@if($errors->has())
						<div class="alert alert-danger alert-block">
						    <ul>
						        @foreach ($errors->all() as $error)
						        <li>{{ $error }}</li>
						        @endforeach
						    </ul>
						</div>
						@endif

						<div class="post-comment">
							<h3>Add a Comment</h3>
							<form role="form" method="post" action="{{{ URL::to($post->slug) }}}">
								<div class="form-group">
									<input type="hidden" class="form-control" name="_token" value="{{{ Session::getToken() }}}"/>
								</div>
								<div class="form-group">
									<label class="control-label">Message <span class="required">
									* </span>
									</label>
									<textarea class="col-md-10 form-control" rows="8" name="comment" id="comment">{{{ Request::old('comment')}}}</textarea>
								</div>
								<input type="submit" class="margin-top-20 btn blue" id="submit" value="Submit"/>
							</form>
						</div>
						@endif
						</div>
					<!--end col-md-9-->
						<div class="col-md-3 blog-sidebar">
	                        @include('site.blog.top_entiries')
	                        @include('site.blog.flickr')
	                        @include('site.blog.tabs')
	                        @include('site.blog.recent_twitts')
						</div>
					<!--end col-md-3-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT-->
@stop