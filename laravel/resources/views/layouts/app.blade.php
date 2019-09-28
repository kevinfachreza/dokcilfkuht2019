<!DOCTYPE html>
<html>
<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	<title>@yield('title') - DOKCIL - FK UHT 2019</title>	

	<meta name="keywords" content="@yield('title') - DOKCIL - FK UHT 2019" />
	<meta name="description" content="@yield('title') - DOKCIL - FK UHT 2019">
	<meta name="author" content="http://dokcilfkuht.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{url('')}}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('')}}/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="{{url('')}}/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="{{url('')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{url('')}}/css/theme.css">
	<link rel="stylesheet" href="{{url('')}}/css/theme-elements.css">

	<!-- Current Page CSS -->
	<!-- Demo CSS -->
	<link rel="stylesheet" href="{{url('')}}/css/demos/demo-seo.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{url('')}}/css/skins/skin-seo.css"> 

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{url('')}}/css/customv1.1.css">

	<!-- Head Libs -->
	<script src="{{url('')}}/vendor/modernizr/modernizr.min.js"></script>
	@yield('extra-css')

</head>
<body data-target="#header" data-spy="scroll" data-offset="100">

	@yield('content')
	<!-- Vendor -->
	<script src="{{url('')}}/vendor/jquery/jquery.min.js"></script>
	<script src="{{url('')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="{{url('')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="{{url('')}}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="{{url('')}}/vendor/popper/umd/popper.min.js"></script>
	<script src="{{url('')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{url('')}}/vendor/common/common.min.js"></script>
	<script src="{{url('')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="{{url('')}}/vendor/kute/kute.min.js"></script>
	<script src="{{url('')}}/vendor/kute/kute-svg.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{url('')}}/js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{url('')}}/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{url('')}}/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Demo -->
	<script src="{{url('')}}/js/demos/demo-seo.js"></script>

	<!-- Theme Custom -->
	<script src="{{url('')}}/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="{{url('')}}/js/theme.init.js"></script>

	@yield('js')
</body>
</html>
