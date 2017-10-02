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
    <!--slider revolution-->

    <link rel="stylesheet" type="text/css" href= {{ asset("rs-plugin/css/settings.css")}}>
    <!--style-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href={{ asset('style/reset.css') }}>

    <link rel="stylesheet" type="text/css" href= {{ asset('style/superfish.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/prettyPhoto.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/jquery.qtip.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/style.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/animations.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/responsive.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('style/odometer-theme-default.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('fonts/streamline-small/style.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('fonts/template/styles.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('fonts/social/styles.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('images/favicon.ico') }}>
    
</head>

<body>
    @yield('content')

</body>



<script type="text/javascript" src= {{ asset('js/jquery-3.2.1.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery-migrate-1.4.1.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.autocomplete.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.ba-bbq.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery-ui-1.11.4.custom.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.ui.touch-punch.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.isotope.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.easing.1.3.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.touchSwipe.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.transit.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.hint.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.costCalculator.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.parallax.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.prettyPhoto.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.qtip.min.js') }}></script>
<script type="text/javascript" src= {{ asset('js/jquery.blockUI.min.js') }}></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA2LLXoPbK_YPWDdpwgHaG3-PFYl6KiWhI"></script>
<script type="text/javascript" src= {{ asset('js/main.js') }}> </script>
<script type="text/javascript" src= {{ asset('js/odometer.min.js') }}></script>


<!--slider revolution-->
<script type="text/javascript" src= {{ asset("rs-plugin/js/jquery.themepunch.tools.min.js")}}></script>
<script type="text/javascript" src= {{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js")}}></script>

<script>
    var services = [{
            value: 'Brake repair',
            data: '/brake-repair'
        },
        {
            value: 'Battery Inspection',
            data: '/battery-inspection'
        },
        

    ];

    $('#autocomplete').autocomplete({
        lookup: services,
        onSelect: function (suggestion) {
            var thehtml = '<strong>Service Name:</strong> ' + suggestion.value +
                ' <br> <strong>Symbol:</strong> ' + suggestion.data;
            window.location = "http://localhost:8000/services" + suggestion.data;
        }
    });
</script>


</html>