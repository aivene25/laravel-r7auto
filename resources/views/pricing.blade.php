@extends('layouts.head') @section('content') @include('includes.header')


<div class="theme-page">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>PRICING</h1>
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
                                <a title="Our Services" href="#">
                                    PRICING
                                </a>
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
                        <a href="#engine" title="Engine Diagnostics">
                            Engine Diagnostics
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#battery" title="Lube, Oil and Filters">
                            Battery
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#belts" title="Belts and Hoses">
                            Belts and Hoses
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#brakes" title="Air Conditioning">
                            Brakes
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#tire" title="Tire and Wheel Services">
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
                    <a class="more" href="/make-appointment" title="MAKE APPOINTMENT">
                        <span>MAKE APPOINTMENT</span>
                    </a>
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
                            <img src= {{ asset( 'images/samples/480x320/image_05.jpg') }} alt='img'>
                        </a>
                    </div>
                    <div class="column column-1-2">
                        <a href="images/samples/870x580/image_10.jpg" class="prettyPhoto re-preload" title="Brake Repair">
                            <img src= {{ asset( 'images/samples/480x320/image_10.jpg') }} alt='img'>
                        </a>
                    </div>
                </div>
                <div id="brakes">
                    <h3 class="box-header page-margin-top">BRAKES</h3>
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

                <div id="battery">
                    <h3 class="box-header page-margin-top">BATTERY</h3>
                    <table class="margin-top-40">
                        <tbody>
                            <tr>
                                <td>Car Battery Cable Replacement</td>
                                <td>#4,995</td>
                            </tr>
                            <tr>
                                <td>Car Battery Replacement</td>
                                <td>#5,995</td>
                            </tr>
                            <tr>
                                <td>Car Battery Temperature Sensor Replacement</td>
                                <td>#6,525</td>
                            </tr>
                            <tr>
                                <td>Service Battery Cables</td>
                                <td>#14,995 Each</td>
                            </tr>

                        </tbody>
                    </table>

                </div>


                <div id="belts">
                    <h3 class="box-header page-margin-top">BELTS</h3>
                    <table class="margin-top-40">
                        <tbody>
                            <tr>
                                <td>Drive Belt Tension Replacement</td>
                                <td>#4,995</td>
                            </tr>
                            <tr>
                                <td>Serpentine/Drive Belt Replacement</td>
                                <td>#5,995</td>
                            </tr>
                            <tr>
                                <td>Timing Belt Replacement</td>
                                <td>#6,525</td>
                            </tr>
                            <tr>
                                <td>Service Battery Cables</td>
                                <td>#14,995 Each</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div>
                    <h3 class="box-header page-margin-top">CAR BUYING</h3>
                    <table class="margin-top-40">
                        <tbody>
                            <tr>
                                <td>Pre-purchase Car Inspection</td>
                                <td>#4,995</td>
                            </tr>

                        </tbody>
                    </table>

                </div>


                <div id="engine">
                    <h3 class="box-header page-margin-top">ENGINE</h3>
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

                <div>
                    <h3 class="box-header page-margin-top">WINDOWS</h3>
                    <table class="margin-top-40">
                        <tbody>
                            <tr>
                                <td>Power WIndow Switch Repair</td>
                                <td>#4,995</td>
                            </tr>
                            <tr>
                                <td>Wndow Motor Regulator Replacement </td>
                                <td>#5,995</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div>
                    <h3 class="box-header page-margin-top">MIRRORS</h3>
                    <table class="margin-top-40">
                        <tbody>
                            <tr>
                                <td>Car Door Mirror Replacement</td>
                                <td>#4,995</td>
                            </tr>
                            <tr>
                                <td>Car Mirror Control Switch Replacement </td>
                                <td>#5,995</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <hr>
            <br>
            <div class="row page-margin-top padding-bottom-70">
                <div class="column column-1-2">
                    <h4 class="box-header">WHY CHOOSE US</h4>
                    <p class="margin-top-20">We offer a full range of garage services to vehicle owners in Tucson. We can help you with everything
                        from an oil change to an engine change. We can handle any problem on both foreign and domestic vehicles.
                    </p>
                    <ul class="list margin-top-20">
                        <li class="template-bullet">We make auto repair more convenient for you</li>
                        <li class="template-bullet">We are a friendly and professional
                            <a href="#">group of people</a>
                        </li>
                        <li class="template-bullet">We handle a wide range of
                            <a href="#">car services</a>
                        </li>
                        <li class="template-bullet">Same day service for most repairs and maintenance</li>
                        <li class="template-bullet">We get the job done right — all the time</li>
                    </ul>
                    <br>
                    <h4>Fast and easy Cylinder Head Temperature Sensor Replacement service at your home or office.</h4>
                    <div style='margin-top:60px'>
                        <a class="more" href="/make-appointment" title="MAKE APPOINTMENT">
                            <span>MAKE APPOINTMENT</span>
                        </a>

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