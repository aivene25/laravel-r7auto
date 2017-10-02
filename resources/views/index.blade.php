@extends('layouts.head') 
@section('content') 
@include('includes.header')

<style>
	.autocomplete-suggestions {
		border: 1px solid;
		background: #fff;
		cursor: default;
		overflow: auto;
	}

	.autocomplete-suggestion {
		padding: 10px 5px;
		font-size: 1.2em;
		white-space: nowrap;
		overflow: hidden;
	}

	.autocomplete-selected {
		background: #f0f0f0;
	}

	.autocomplete-suggestions strong {
		font-weight: normal;
		color: #3399ff;
	}

	#searchfield {
		display: block;
		width: 100%;
		text-align: center;
		margin-bottom: 35px;
	}

	#searchfield form {
		display: inline-block;

		padding: 0;
		margin: 0;

		border-radius: 3px;
	}

	#searchfield form .biginput {
		width: 400px;
		height: 60px;
		padding: 0 10px 0 10px;
		border-radius: 3px;
		color: #aeaeae;
		font-weight: normal;
		font-size: 1.5em;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		transition: all 0.2s linear;
	}

	#searchfield form .biginput:focus {
		color: #858585;
	}

	#bg-img {
		background-image: url('images/backgrounds/images/image_1.jpg');
		background-repeat: no-repeat;
		background-position: center;
		width: 100vw;
		height: 40em;
	}
	.text-center{
		text-align:center;
		color:whitesmoke !important;
	}
	.bg-text{
		padding:20px;
		line-height:150%;
		color:#717171 !important;
		padding-bottom:20px;
	}
	@media screen and (max-width:767px){
		#searchfield form .biginput {
			width: 300px;
		}
	}
</style>


<div class="revolution-slider-container">
	<div id='bg-img'>
		<div class='container'>
			<div class='row' style='min-height:150px;'>

			</div>
			<div class='row text-center bg-text' >

				<h2 style='color:black'>Service at your home or office <br>Fair and transparent pricing</h2>
			</div>
			<div class='row'>

				<div id="searchfield">
					<form>
						<input type="text" name="services" id="autocomplete" class="biginput form-control" placeholder="Search for repair service .." autofocus />
					</form>


					<div id="outputbox">
						<p id="outputcontent"></p>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!--/-->

<div class="theme-page">
	<div class="clearfix">
		<div class="row gray full-width">
			<div class="announcement clearfix">
				<ul class="columns no-width">
					<li class="column column-2-3">
						<div class="vertical-align">
							<div class="vertical-align-cell">
								<h3>BOOK AN APPOINTMENT WITH US NOW</h3>
							</div>
						</div>
					</li>
					<li class="column column-1-3">
						<div class="vertical-align">
							<div class="vertical-align-cell">
								<a class="more" href="#" title="MAKE AN APPOINTMENT"><span>BOOK AN APPOINTMENT</span></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row page-margin-top-section">
			<div class="row">
				<h2 class="box-header">WHY CHOOSE US?</h2>
				<p class="description align-center">We are one of the leading auto repair shops serving customers in Tucson.<br>All mechanic services are performed by highly
					qualified mechanics.</p>
				<div class="row page-margin-top">
					<div class="column column-1-3">
						<ul class="features-list big">
							<li>
								<div class="hexagon">
									<div class="sl-small-user-chat"></div>
								</div>
								<h4 class="box-header page-margin-top">EVERY JOB IS PERSONAL</h4>
								<p>If you want the quality you would expect from the dealership, but with a more personal and friendly atmosphere, you
									have found it.</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="features-list big">
							<li>
								<div class="hexagon">
									<div class="sl-small-wrench-screwdriver"></div>
								</div>
								<h4 class="box-header page-margin-top">BEST MATERIALS</h4>
								<p>We have invested in all the latest specialist tools and diagnostic software that is specifically tailored for the
									software in your vehicle.</p>
							</li>
						</ul>
					</div>
					<div class="column column-1-3">
						<ul class="features-list big">
							<li>
								<div class="hexagon">
									<div class="sl-small-truck-tow"></div>
								</div>
								<h4 class="box-header page-margin-top">PROFESSIONAL STANDARDS</h4>
								<p>Our auto repair shop is capable of servicing a variety of models. We only do the work that is needed to fix your
									problem.
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="align-center margin-top-67 padding-bottom-20">
					<a class="more" href="index171c.html?page=about" title="READ MORE"><span>READ MORE</span></a>
				</div>
			</div>
		</div>
		<div class="row full-width gray flex-box page-margin-top-section">
			<div class="column column-1-2 background-1">
				<a class="flex-hide" href="indexe99e.html?page=service_engine_diagnostics" title="Tiling and Painting">
					<img src="images/samples/960x680/image_01.jpg" alt="">
				</a>
			</div>
			<div class="column column-1-2 padding-bottom-66">
				<div class="row padding-left-right-100">
					<h2 class="box-header page-margin-top-section">VEHICLES SERVICED</h2>
					<p class="description align-center">We provide top notch maintenance service for all types of vehicles.<br>We are certified to service and repair the following
						makes:
					</p>
					<div class="row margin-top-30">
						<div class="column column-1-3">
							<ul class="list">
								<li class="template-bullet">General Motors</li>
								<li class="template-bullet">Land Rover</li>
								<li class="template-bullet">Lexus</li>
								<li class="template-bullet">Lincoln</li>
								<li class="template-bullet">Mazda</li>
							</ul>
						</div>
						<div class="column column-1-3">
							<ul class="list">
								<li class="template-bullet">Mercedes - Benz</li>
								<li class="template-bullet">Mercury</li>
								<li class="template-bullet">Mitsubishi</li>
								<li class="template-bullet">Nissan</li>
								<li class="template-bullet">Renault</li>
							</ul>
						</div>
						<div class="column column-1-3">
							<ul class="list">
								<li class="template-bullet">Plymouth</li>
								<li class="template-bullet">Pontiac Porsche</li>
								<li class="template-bullet">Rover</li>
								<li class="template-bullet">Saab</li>
								<li class="template-bullet">Saleen</li>
							</ul>
						</div>
					</div>
					<div class="align-center margin-top-67 padding-bottom-20">
						<a class="more simple" href="index94f6.html?page=services" title="VIEW FULL LIST"><span>VIEW FULL LIST</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row full-width page-padding-top-section">
			<div class="row">
				<h2 class="box-header">AUTO REPAIR SERVICES</h2>
				<p class="description align-center">We offer a full range of garage services to vehicle owners located in Tucson area.<br>Our professinals know how to handle
					a wide range of car services.</p>
				<ul class="services-list clearfix page-margin-top">
					<li>
						<a href="indexe99e.html?page=service_engine_diagnostics" title="Engine Diagnostics">
							<img src="images/samples/390x260/image_01.jpg" alt="">
						</a>
						<h4 class="box-header"><a href="indexe99e.html?page=service_engine_diagnostics" title="Engine Diagnostics">ENGINE DIAGNOSTICS<span class="template-arrow-menu"></span></a></h4>
					</li>
					<li>
						<a href="indexa673.html?page=service_lube_oil_filters" title="Lube, Oil and Filters">
							<img src="images/samples/390x260/image_02.jpg" alt="">
						</a>
						<h4 class="box-header"><a href="indexa673.html?page=service_lube_oil_filters" title="Lube, Oil and Filters">LUBE, OIL AND FILTERS<span class="template-arrow-menu"></span></a></h4>
					</li>
					<li>
						<a href="indexde12.html?page=service_belts_hoses" title="Belts and Hoses">
							<img src="images/samples/390x260/image_03.jpg" alt="">
						</a>
						<h4 class="box-header"><a href="indexde12.html?page=service_belts_hoses" title="Belts and Hoses">BELTS AND HOSES<span class="template-arrow-menu"></span></a></h4>
					</li>
				</ul>
				<div class="align-center margin-top-40 padding-bottom-87">
					<a class="more" href="index94f6.html?page=services" title="VIEW ALL SERVICES"><span>VIEW ALL SERVICES</span></a>
				</div>
			</div>
		</div>
		<div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">
			<div class="row testimonials-container">
				<a href="#" class="slider-control left template-arrow-left-1"></a>
				<ul class="testimonials-list">
					<li>
						<div class="hexagon small">
							<div class="sl-small-pen"></div>
						</div>
						<p>"I have taken several of the family cars here for the past several years and without exception the experiences have
							been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really
							great people."</p>
						<h6>ROBERT SMITH</h6>
						<!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
					</li>
					<li>
						<div class="hexagon small">
							<div class="sl-small-pen"></div>
						</div>
						<p>"I have taken several of the family cars here for the past several years and without exception the experiences have
							been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really
							great people."</p>
						<h6>ROBERT SMITH</h6>
						<!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
					</li>
					<li>
						<div class="hexagon small">
							<div class="sl-small-pen"></div>
						</div>
						<p>"I have taken several of the family cars here for the past several years and without exception the experiences have
							been outstanding. I would highly recommend this place to any one who wants great service, honest value, and really
							great people."</p>
						<h6>ROBERT SMITH</h6>
						<!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
					</li>
				</ul>
				<a href="#" class="slider-control right template-arrow-left-1"></a>
			</div>
		</div>
		<div class="row page-margin-top-section">
			<div class="row">
				<h2 class="box-header">COMPANY OVERVIEW</h2>
				<p class="description align-center">We can help you with everything from an oil change to an engine change.<br>We can handle any problem on both foreign
					and domestic vehicles.</p>
			</div>
			<div class="row page-margin-top-section">
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>CAR AUDIO SERVICE</h5>
							<div class="icon sl-small-car-audio"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
						<li>
							<h5>CAR A/C RECHARGE</h5>
							<div class="icon sl-small-air-conditioning"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>FREE OIL CHANGE</h5>
							<div class="icon sl-small-car-oil"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
						<li>
							<h5>PARKING SENSORS CALIBRATION</h5>
							<div class="icon sl-small-parking-sensor"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
					</ul>
				</div>
				<div class="column column-1-3">
					<ul class="features-list">
						<li>
							<h5>ENGINE DIAGNOSTICS</h5>
							<div class="icon sl-small-signal-warning"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
						<li>
							<h5>CAR BATTERY REPAIRS</h5>
							<div class="icon sl-small-car-battery"></div>
							<p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern
								forte elementum vehicula.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row full-width page-margin-top-section">
			<ul class="galleries-list clearfix page-margin-top">
				<li>
					<a href="index7d13.html?page=gallery_tire_change" title="Tire Change">
						<img src="images/samples/480x320/image_07.jpg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Tire Change</p>
								<a class="more simple" href="index7d13.html?page=gallery_tire_change" title="READ MORE">READ MORE</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="indexdc54.html?page=gallery_oil_change" title="Oil Change">
						<img src="images/samples/480x320/image_02.jpg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Oil Change</p>
								<a class="more simple" href="indexdc54.html?page=gallery_oil_change" title="READ MORE">READ MORE</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="indexef12.html?page=gallery_belts_hoses" title="Our Facility">
						<img src="images/samples/480x320/image_08.jpg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Our Facility</p>
								<a class="more simple" href="indexef12.html?page=gallery_belts_hoses" title="READ MORE">READ MORE</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="indexaef0.html?page=gallery_brake_repair" title="Brakes Repair">
						<img src="images/samples/480x320/image_05.jpg" alt="">
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">Brakes Repair</p>
								<a class="more simple" href="indexaef0.html?page=gallery_brake_repair" title="READ MORE">READ MORE</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="row gray full-width padding-top-54 padding-bottom-61 align-center">
			<h3><span class="button-label">DO YOU LIKE WHAT YOU SEE</span> <a class="more" target="_top" href="https://themeforest.net/cart/add_items?item_ids=12332985&amp;ref=QuanticaLabs"
				    title="PURCHASE TEMPLATE"><span>PURCHASE TEMPLATE</span></a></h3>
		</div>
		<!--<div class="row gray full-width padding-top-bottom-50">
			<div class="row">
				<div class="column column-1-2 align-right padding-top-7">
					<h3>EXPLORE OUR PROJECTS</h3>
				</div>
				<div class="column column-1-2">
					<a class="more float" href="?page=projects" title="VIEW ALL PROJECTS">VIEW ALL PROJECTS</a>
				</div>
			</div>
		</div>-->
		<div class="row page-margin-top-section">
			<div class="column column-1-2">
				<h3 class="box-header">OUR MISSION</h3>
				<p class="description">We offer a full range of garage services to vehicle owners located in Tucson area. All mechanic services are performed
					by highly qualified mechanics. We can handle any car problem.</p>
				<p>We offer a full range of garage services to vehicle owners in Tucson. Our professionals know how to handle a wide range
					of car services. Whether you drive a passenger car or medium sized truck or SUV, our mechanics strive to <a href="#">ensure that your vehicle</a>					will be performing at its best <a href="#">before leaving</a> our car shop.</p>
				<div class="page-margin-top">
					<a class="more" href="index171c.html?page=about" title="READ MORE"><span>READ MORE</span></a>
				</div>
			</div>
			<div class="column column-1-2">
				<h3 class="box-header">POPULAR QUESTIONS</h3>
				<ul class="accordion margin-top-40 clearfix">
					<li>
						<div id="accordion-using-synthetic">
							<h4>Should I consider using synthetic motor oil?</h4>
						</div>
						<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into
							larger designer molecules with premium lubricating properties.</p>
					</li>
					<li>
						<div id="accordion-parts-replacements">
							<h4>What parts should be replaced at what intervals?</h4>
						</div>
						<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into
							larger designer molecules with premium lubricating properties.</p>
					</li>
					<li>
						<div id="accordion-track-routine">
							<h4>How do I keep track of routine maintenance?</h4>
						</div>
						<p>Synthetic engine oils are produced through a synthesis process that takes very small molecules and assembles them into
							larger designer molecules with premium lubricating properties.</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row full-width top-border page-margin-top-section padding-bottom-50">
			<div class="row">
				<div class="our-clients-list-container page-margin-top">
					<ul class="our-clients-list">
						<li>
							<img src="images/logos/logo_01.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_02.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_03.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_04.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_05.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_06.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_06.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_05.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_04.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_03.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_02.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_01.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_04.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_03.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_01.png" alt="">
						</li>
						<li>
							<img src="images/logos/logo_05.png" alt="">
						</li>
					</ul>
					<div class="our-clients-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('includes.footer') @endsection