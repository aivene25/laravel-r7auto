@extends('layouts.head') 
@section('content') 
@include('includes.header')


<div class="theme-page padding-bottom-66">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row full-width padding-top-bottom-50 vertical-align-cell">
			<div class="row">
				<div class="page-header-left">
					<h1>BLOG</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<label>YOU ARE HERE:</label>
						<ul class="bread-crumb">
							<li>
								<a title="HOME" href="/">
									HOME
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							<li>
								BLOG
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="row margin-top-70">
			<div class="column column-1-4 re-smart-column">
				<div class="re-smart-column-wrapper">
					<div class="call-to-action">
						<div class="hexagon small"><div class="sl-small-percent"></div></div>
						<h4 class="margin-top-58">ONLINE APPOINTMENT</h4>
						<p class="description">Book your appointment now and get 10% discount.</p>
						<a class="more" href="/make-appointment" title="MAKE APPOINTMENT"><span>MAKE APPOINTMENT</span></a>
					</div>
					<!--
					<h6 class="box-header page-margin-top">LATEST POSTS</h6>
					<ul class="blog small margin-top-30 clearfix">
						<li>
							<a href="indexb878.html?page=post" title="Clunking Sound Under The Hood" class="post-image">
								<img src="images/samples/90x90/image_01.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Clunking Sound Under The Hood">Clunking Sound Under The Hood</a>
								<ul class="post-details">
									<li class="date">April 25, 2015</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" title="Signs Your Car Needs Engine Repair" class="post-image">
								<img src="images/samples/90x90/image_02.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Signs Your Car Needs Engine Repair">Signs Your Car Needs Engine Repair</a>
								<ul class="post-details">
									<li class="date">April 17, 2015</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" title="Replacing a Timing Belt Service Cost" class="post-image">
								<img src="images/samples/90x90/image_03.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Replacing a Timing Belt Service Cost">Replacing a Timing Belt Service Cost</a>
								<ul class="post-details">
									<li class="date">March 05, 2015</li>
								</ul>
							</div>
						</li>
					</ul>
					<h6 class="box-header page-margin-top">MOST VIEWED</h6>
					<ul class="blog small margin-top-30 clearfix">
						<li>
							<a href="#" title="Summer Driving Safety Tips" class="post-image">
								<img src="images/samples/90x90/image_05.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Summer Driving Safety Tips">Summer Driving Safety Tips</a>
								<ul class="post-details">
									<li class="date">April 25, 2015</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" title="Extend The Life of Your Engine" class="post-image">
								<img src="images/samples/90x90/image_08.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Extend The Life of Your Engine">Extend The Life of Your Engine</a>
								<ul class="post-details">
									<li class="date">April 17, 2015</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" title="Clunking Sound Under The Hood" class="post-image">
								<img src="images/samples/90x90/image_01.jpg" alt="">
							</a>
							<div class="post-content">
								<a href="indexb878.html?page=post" title="Clunking Sound Under The Hood">Clunking Sound Under The Hood</a>
								<ul class="post-details">
									<li class="date">April 25, 2015</li>
								</ul>
							</div>
						</li>
					</ul>
				-->
					<h6 class="box-header page-margin-top">CATEGORIES</h6>
					<ul class="taxonomies margin-top-30 clearfix">
						<li><a href="index9d96.html?page=category&amp;cat=belts" title="BELTS">BELTS</a></li>
						<li><a href="indexdf95.html?page=category&amp;cat=brakes" title="BRAKES">BRAKES</a></li>
						<li><a href="index2879.html?page=category&amp;cat=diagnostics" title="DIAGNOSTICS">DIAGNOSTICS</a></li>
						<li><a href="index4d08.html?page=category&amp;cat=engine" title="ENGINE">ENGINE</a></li>
						<li><a href="index59ef.html?page=category&amp;cat=filters" title="FILTERS">FILTERS</a></li>
						<li><a href="indexccc0.html?page=category&amp;cat=heating" title="HEATING">HEATING</a></li>
						<li><a href="index06ff.html?page=category&amp;cat=oils" title="OILS">OILS</a></li>
						<li><a href="indexf02f.html?page=category&amp;cat=steering" title="STEERING">STEERING</a></li>
						<li><a href="index8c0e.html?page=category&amp;cat=suspension" title="SUSPENSION">SUSPENSION</a></li>
						<li><a href="index978b.html?page=category&amp;cat=tires" title="TIRES">TIRES</a></li>
						<li><a href="index2db2.html?page=category&amp;cat=transmission" title="TRANSMISSION">TRANSMISSION</a></li>
					</ul>
					
				</div>
			</div>
			<div class="column column-3-4">
				<ul class="blog clearfix">
				@if( count($posts)>0 ) @foreach( $posts as $post )
					<li>
						<a href="" title="{{ $post->title}}" class="post-image">
							<img src="{{ $post->post_image}}" alt="Post Image"  style="width:100%">
						</a>
						<div class="post-content-details-container clearfix">
							<ul class="post-content-details">
								<li>{{ $post->created_at}}</li>
								<li>By <a href="#" title="{{ $post->created_at}}">{{ $post->author}}</a></li>
								<li>In <a href="#" title="Engine">Engine</a>, <a href="#" title="Transmission">Transmission</a></li>
							</ul>
							<ul class="post-content-details right">
								<li class="template-bubble"><a href="#" title="5 comments">5</a></li>
								<li class="template-eye">325</li>
							</ul>
						</div>
						<h3 class="box-header"><a href="#">{{ $post->title}}</a></h3>
						<p>{{ $post->body}}</p>
						<div class="row margin-top-40 padding-bottom-20">
							<a class="more" href="#" title="READ MORE"><span>READ MORE</span></a>
						</div>
					</li>

                    @endforeach @else
                    <p>No Posts Found </p>
                    @endif
					
				</ul>
				<!--
				<ul class="pagination page-margin-top">
					<li class="left">
						<a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
					</li>
					<li class="selected">
						<a href="#" title="">
							1
						</a>
					</li>
					<li>
						<a href="#" title="">
							2
						</a>
					</li>
					<li>
						<a href="#" title="">
							3
						</a>
					</li>
					<li class="right">
						<a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
					</li>
				</ul>
-->
			</div>
		</div>
	</div>
</div>			

@include('includes.footer') 
@endsection