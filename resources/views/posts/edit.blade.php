@extends('layouts.admin') @section('content') @include('includes.admin-header')


<div class="wrapper">
	<div class="container">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li>
								<a href="#">R7Auto</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li class="active">
								Add / Edit Post
							</li>
						</ol>
					</div>
					<h4 class="page-title">Add / Edit Post</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="p-20">
					<div class="">
						<form role="form" method="POST" action="" enctype="multipart/form-data">
								{{ csrf_field() }}
							<div class="form-group m-b-20">
								<label for="exampleInputEmail1">Post Title</label>
								<input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Post Title" value="{{ $post->title}}">
							</div>
							<div class="form-group m-b-20">
								<label class="m-b-10">Post Type</label>
								<br/>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
									<label for="inlineRadio1"> News </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="inlineRadio2" value="option2" name="radioInline">
									<label for="inlineRadio2"> Advert </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="inlineRadio3" value="option3" name="radioInline">
									<label for="inlineRadio3"> Best Practices </label>
								</div>
								<div class="radio radio-info radio-inline">
									<input type="radio" id="inlineRadio4" value="option4" name="radioInline">
									<label for="inlineRadio4"> Traffic Report</label>
								</div>
							</div>

							<div class="form-group m-b-20">
								<label>Description</label>
								<textarea class="summernote" name="body">Write post here
								</textarea value="{{ $post->description}}">
							</div>
							<!--
							<div class="form-group m-b-20">
								<label>Post Category</label>
								<select class="select2 form-control " multiple="multiple" data-placeholder="Choose ...">
									<option value="lifestyle">Lifestyle</option>
									<option value="Music">Music</option>
									<option value="Travel">Travel</option>
									<option value="Fashion">Fashion</option>
								</select>
							</div>
						-->
						<div class="form-group">
                                
                            <label class="control-label">Upload Post Image</label>
                            <img src="https://s3.eu-west-2.amazonaws.com/aiveneshero/public/post_images/{{ $post->post_image}}" style="height:100px; width:100px;">    
                            <input type="file" class="filestyle" name="post_image" data-iconname="fa fa-cloud-upload">
                                
							</div>
							
							<div class="form-group m-b-20">
									<label for="exampleInputEmail1">Post Tags</label>
									<input name="tags" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tags">
								</div>
							<button type="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
							<button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
						</form>
					</div>
				</div>
				<!-- end p-20 -->
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->

		@include('includes.admin-footer') @endsection