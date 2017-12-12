@extends('layouts.admin') @section('content')

<section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <div class="text-center m-b-20">
                                        <div class="m-b-20">
                                            <div class="checkmark">
                                                <svg version="1.1" xmlns="" viewBox="0 0 130.2 130.2">
                                                  <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                  <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                                </svg>
                                            </div>
                                        </div>

                                        <h3>Post Added Successfully  !</h3>

                                        <p class="text-muted font-13 m-t-10"> You are now being redirected to your dashboard. </p>
                                    </div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-30">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Return to <a href="/posts/create" class="text-primary m-l-5 m-r-5"><b>Add Post</b></a> OR <a href="/posts" class="text-primary m-l-5"><b>Dashboard</b></a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
            <script>
            setTimeout(function () {
                window.location.href = "/posts"; //will redirect to your blog page (an ex: blog.html)
                }, 3000); //will call the function after 2 secs.

            </script>
          </section>
          <!-- END HOME -->
@endsection