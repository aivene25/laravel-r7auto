<!DOCTYPE html>
<html>
<head>
    <title>Professional Auto Repair Services - R7Auto</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Mechanic, Car, Auto" />
    <meta name="description" content="Mechanic Auto Repair Platform" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>R7Auto  -  Admin Dashboard </title>

    <!-- Summernote css -->
    <link href= {{ asset("admin-assets/plugins/summernote/summernote.css") }} rel="stylesheet" />

    <!-- Select2 -->
    <link href= {{ asset("admin-assets/plugins/select2/css/select2.min.css") }} rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href= {{ asset("admin-assets/plugins/jquery.filer/css/jquery.filer.css") }} rel="stylesheet" />
    <link href= {{ asset("admin-assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css") }} rel="stylesheet" />

    <!-- App css -->
    <link href= {{ asset("admin-assets/css/bootstrap.min.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/core.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/components.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/icons.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/pages.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/menu.css") }} rel="stylesheet" type="text/css" />
    <link href= {{ asset("admin-assets/css/responsive.css") }} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href= {{ asset("admin-assets/plugins/switchery/switchery.min.css") }}>

    <style>
        a:hover{
            cursor: pointer;
        
        }
    </style>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src= {{ asset("admin-assets/js/modernizr.min.js") }}></script>

</head>

<body>
    @yield('content')

</body>

<script src= {{ asset("admin-assets/js/jquery.min.js")}}></script>
<script src= {{ asset("admin-assets/js/bootstrap.min.js")}}></script>
<script src= {{ asset("admin-assets/js/detect.js")}}></script>
<script src= {{ asset("admin-assets/js/fastclick.js")}}></script>
<script src= {{ asset("admin-assets/js/jquery.blockUI.js")}}></script>
<script src= {{ asset("admin-assets/js/waves.js")}}></script>
<script src= {{ asset("admin-assets/js/jquery.slimscroll.js")}}></script>
<script src= {{ asset("admin-assets/js/jquery.scrollTo.min.js")}}></script>
<script src= {{ asset("admin-assets/plugins/switchery/switchery.min.js")}}></script>

<!--Summernote js-->
<script src= {{ asset("admin-assets/plugins/summernote/summernote.min.js")}}></script>
<!-- Select 2 -->
<script src= {{ asset("admin-assets/plugins/select2/js/select2.min.js")}} type="text/javascript"></script>
<!-- Jquery filer js -->
<script src= {{ asset("admin-assets/plugins/jquery.filer/js/jquery.filer.min.js")}}></script>

<!-- page specific js -->
<script src= {{ asset("admin-assets/pages/jquery.blog-add.init.js" )}}></script>

<!-- App js -->
<script src= {{ asset("admin-assets/js/jquery.core.js")}}></script>
<script src= {{ asset("admin-assets/js/jquery.app.js" )}}></script>


<script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>


</html>