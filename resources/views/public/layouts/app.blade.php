<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Default - Royal College</title>

    <!-- PLUGINS CSS STYLE -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/selectbox/select_option1.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
    <link rel="stylesheet" href="plugins/animate.css">
    <link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/default.css" id="option_color">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="body-wrapper">

    <div class="main_wrapper">

       @include('public.layouts.header')
       @yield('content')       
        @include('public.layouts.footer')
    </div>

    <!-- JQUERY SCRIPTS -->
    <script src="plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/flexslider/jquery.flexslider.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="plugins/pop-up/jquery.magnific-popup.js"></script>
    <script src="plugins/animation/waypoints.min.js"></script>
    <script src="plugins/count-up/jquery.counterup.js"></script>
    <script src="plugins/animation/wow.min.js"></script>
    <script src="plugins/animation/moment.min.js"></script>
    <script src="plugins/calender/fullcalendar.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="plugins/timer/jquery.syotimer.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.js"></script>
    <script src="js/custom.js"></script>

    <link href="options/optionswitch.css" rel="stylesheet">
    <script src="options/optionswitcher.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"816ed461ec6c99bc","version":"2023.8.0","r":1,"token":"6ab1814688eb46d9922ef568cb561268","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>