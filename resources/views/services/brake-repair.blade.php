@extends('layouts.head') @section('content') @include('includes.header')

ul.default{
    list-style-type:square;
    margin:0;
    padding:0;
}

<div class="theme-page">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>BRAKE REPAIR</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>YOU ARE HERE:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="HOME" href="index9ba3.html?page=home">
									HOME
								</a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                <a title="Our Services" href="index94f6.html?page=services">
									OUR SERVICES
								</a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                BRAKE REPAIR
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row margin-top-70">
            <div class="column column-1-4">
                <ul class="vertical-menu">
                    <li>
                        <a href="indexe99e.html?page=service_engine_diagnostics" title="Engine Diagnostics">
							Engine Diagnostics
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                    <li>
                        <a href="indexa673.html?page=service_lube_oil_filters" title="Lube, Oil and Filters">
							Lube, Oil and Filters
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                    <li>
                        <a href="indexde12.html?page=service_belts_hoses" title="Belts and Hoses">
							Belts and Hoses
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                    <li>
                        <a href="index9812.html?page=service_air_conditioning" title="Air Conditioning">
							Air Conditioning
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                    <li class="selected">
                        <a href="index9950.html?page=service_brake_repair" title="Brake Repair">
							Brake Repair
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                    <li>
                        <a href="index0f40.html?page=service_tire_wheel" title="Tire and Wheel Services">
							Tire and Wheel Services
							<span class="template-arrow-menu"></span>
						</a>
                    </li>
                </ul>
                <div class="call-to-action page-margin-top">
                    <div class="hexagon small">
                        <div class="sl-small-percent"></div>
                    </div>
                    <h4 class="margin-top-58">ONLINE APPOINTMENT</h4>
                    <p class="description">Book your appointment now and get 5% discount.</p>
                    <a class="more" href="/make-appointment" title="MAKE APPOINTMENT"><span>MAKE APPOINTMENT</span></a>
                </div>
                <h6 class="box-header page-margin-top">DOWNLOAD</h6>
                <ul class="buttons margin-top-30">
                    <li class="template-arrow-circle-down">
                        <a href="#" title="Download Brochure">Download Brochure</a>
                    </li>
                    <li class="template-arrow-circle-down">
                        <a href="#" title="Download Summary">Download Summary</a>
                    </li>
                </ul>
            </div>
            <div class="column column-3-4">
                <div class="row">
                    <div class="column column-1-2">
                        <a href="images/samples/870x580/image_05.jpg" class="prettyPhoto re-preload" title="Brake Repair">
							<img src= {{ asset('images/samples/480x320/image_05.jpg') }} alt='img'>
						</a>
                    </div>
                    <div class="column column-1-2">
                        <a href="images/samples/870x580/image_10.jpg" class="prettyPhoto re-preload" title="Brake Repair">
							<img src= {{ asset('images/samples/480x320/image_10.jpg') }} alt='img'>
						</a>
                    </div>
                </div>
                <div class="row page-margin-top">
                    <div class="column-1-1">
                        <h3 class="box-header">BRAKE REPAIR SERVICE</h3><br><br>
                        <h4>What is the brake repair service all about</h4>
                        <p class='margin-top-20'>
                            Your engine control module monitors and regulates nearly all of your engine’s performance based on temperature measurements.
                            During cold conditions or cold starts, the engine requires more fuel to run well and maintain
                            a higher idle speed. When the engine is warm, less fuel is required for the engine to run smoothly
                            and efficiently. There are a couple of methods car makers have utilized to determine engine temperature,
                            with the most common being a coolant temperature sensor.
                        </p>
                        <p>
                            The coolant temperature sensor regularly monitors the engine’s heat based on the temperature of the fluid circulating in
                            the block and reports it to the engine control module. The ECM adjusts EGR flow, engine timing
                            and many other things based on this information. For vehicles not equipped with a coolant temperature
                            sensor, a cylinder head temperature sensor, or CHT sensor, is employed. It consists of two resistors
                            encapsulated in one sensor to maintain a wide operating temperature of -40F to 260F. One resistor
                            monitors the high temperatures and the other, the low temperatures, and reports them in a voltage
                            reading to the ECM. From this reading, the engine control module infers the coolant temperature
                            and bases its adjustments on it. If the CHT sensor isn’t reading correct voltages, you can experience
                            issues ranging from long cranking times and low idle speeds on cold starts to stalling and hesitation
                            on acceleration while the engine is warm.
                        </p>
                        <div class='padding-bottom-30'>
                            <h4>Keep in mind:</h4>
                            <ul class='list default margin-top-20'>
                                <li class=''> The cylinder head temperature sensor doesn’t measure the coolant temperature. Instead, it
                                    measures the metal temperature and infers the coolant temperature from that.</li>
                                <li class=''> Allow the engine to cool off before servicing the cylinder head temperature sensor.</li>

                            </ul>

                        </div>
                        <div class='padding-bottom-30'>
                            <h4>How it's done</h4>
                            <ul class='list default margin-top-20'>
                                <li> The cylinder head temperature sensor is verified that it needs to be replaced. The rubber
                                    head seal and connector are removed to access the sensor.</li>
                                <li> The defective cylinder head temperature sensor is removed with a deep well socket to unscrew
                                    the sensor from the cylinder head.</li>
                                <li> The new cylinder head temperature sensor is installed into the head and tightened to specifications.
                                </li>
                                <li> The electrical connection and rubber seal are reinstalled. The cylinder head temperature
                                    sensor is tested for operation with a scanner.</li>
                                <li> The vehicle is road tested to ensure proper operation of the cylinder head temperature sensor.</li>
                            </ul>
                        </div>
                        <div class='padding-bottom-30'>
                            <h4>Our recommendation</h4>
                            <p>
                                The CHT sensor should last the life of your vehicle. It is an electrical component and can fail unexpectedly, and if it does,
                                it will need to be replaced by one of our expert technicians. If you suspect you have a CHT
                                sensor problem, have a trained technician diagnose the problem as monitoring the sensor is
                                tricky and requires certain knowledge.
                            </p>
                        </div>
                        <div class='padding-bottom-30'>
                            <h4>What common symptoms indicate you may need to replace the Cylinder Head Temperature Sensor?
                            </h4>
                            <ul class='list default margin-top-20'>
                                <li>Long cranking time when trying to start your engine</li>
                                <li> Difficulty with accelerating </li>
                                <li> Engine stalling when at running temperature or when started cold</li>
                                <li> Idle speed when the engine is cold stays very low</li>
                            </ul>
                        </div>
                        <div >
                            <h4>How important is this service? </h4>
                            <p>
                                The cylinder head temperature sensor can dramatically affect your engine’s performance if it is faulty. It may cause running
                                issues while you are driving in traffic including stalling and hesitation. Have it diagnosed
                                and repaired as soon as possible so you don’t put yourself in a potentially difficult or
                                dangerous driving situation.
                            </p>
                        </div>
                        <h3 class="box-header page-margin-top">PRICING</h3>
                        <table class="margin-top-40">
                            <tbody>
                                <tr>
                                    <td>Front Brakes Repair</td>
                                    <td>#4,995</td>
                                </tr>
                                <tr>
                                    <td>Rear Brakes Repair</td>
                                    <td>#5,995</td>
                                </tr>
                                <tr>
                                    <td>Rear Brakes Shoes</td>
                                    <td>#6,525</td>
                                </tr>
                                <tr>
                                    <td>Axle</td>
                                    <td>#14,995 Each</td>
                                </tr>
                                <tr>
                                    <td>Starters / Alternators</td>
                                    <td>#22,595 Plus Parts</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row page-margin-top padding-bottom-70">
                    <div class="column column-1-2">
                        <h4 class="box-header">WHY CHOOSE US</h4>
                        <p class="margin-top-20">We offer a full range of garage services to vehicle owners in Tucson. We can help you with everything
                            from an oil change to an engine change. We can handle any problem on both foreign and domestic
                            vehicles.
                        </p>
                        <ul class="list margin-top-20">
                            <li class="template-bullet">We make auto repair more convenient for you</li>
                            <li class="template-bullet">We are a friendly and professional <a href="#">group of people</a></li>
                            <li class="template-bullet">We handle a wide range of <a href="#">car services</a></li>
                            <li class="template-bullet">Same day service for most repairs and maintenance</li>
                            <li class="template-bullet">We get the job done right — all the time</li>
                        </ul>
                        <br>
                        <h4>Fast and easy Cylinder Head Temperature Sensor Replacement service at your home or office.</h4>
                        <div style='margin-top:60px'>
                            <a class="more" href="/make-appointment" title="MAKE APPOINTMENT"><span>MAKE APPOINTMENT</span></a>

                        </div>
                    </div>
                    <div class="column column-1-2">
                        <h4 class="box-header">POPULAR QUESTIONS</h4>
                        <ul class="accordion margin-top-40 clearfix">
                            <li>
                                <div id="accordion-using-synthetic">
                                    <h4>Should I consider using synthetic oil?</h4>
                                </div>
                                <p>Synthetic engine oils are produced through a synthesis process that takes very small molecules
                                    and assembles them into larger ones.</p>
                            </li>
                            <li>
                                <div id="accordion-parts-replacements">
                                    <h4>What parts should be replaced?</h4>
                                </div>
                                <p>Synthetic engine oils are produced through a synthesis process that takes very small molecules
                                    and assembles them into larger ones.</p>
                            </li>
                            <li>
                                <div id="accordion-track-routine">
                                    <h4>How do I keep track of routine?</h4>
                                </div>
                                <p>Synthetic engine oils are produced through a synthesis process that takes very small molecules
                                    and assembles them into larger ones.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer') @endsection