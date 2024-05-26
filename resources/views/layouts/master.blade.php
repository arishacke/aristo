

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title id="title">Inclusive Village</title>
		<meta name="description" content="Inclusive is a responsive HTML5 coming soon template by hencework." />
		<meta name="keywords" content="Inclusive, Responsive Coming Soon Template, Under Construction Template, Responsive Template, HTML5 Template, themeforest.net, Bootstrap, HTML5, Creative, Landing Page, Sass, Clean, Design, Modern, Angular js, MailChimp Subscription," />
		<meta name="author" content="Inclusive" />

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="{{url('/')}}/assets/img/logo-dark.png" type="image/x-icon">

		<!--Fonts - changed to Source Code Pro-->
		<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/style.css" />
	</head>

	<body data-ng-app="contactApp">
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->


	@yield('content')



	<!-- Scripts -->
		<script src="{{url('/')}}/assets/js/jquery-1.11.3.min.js"></script>
		<script src="{{url('/')}}/assets/js/angular.min.js"></script>
		<script src="{{url('/')}}/assets/js/modernizr.custom.js"></script>
		<script src="{{url('/')}}/assets/js/classie.js"></script>
		<script src="{{url('/')}}/assets/js/cbpSplitLayout.js"></script>
		<script src="{{url('/')}}/assets/js/jquery.countdown.js"></script>
		<script src="{{url('/')}}/assets/js/typed.js"></script>
		<script src="{{url('/')}}/assets/js/app.js"></script>
		<script src="{{url('/')}}/assets/js/controllers.js"></script>
		<script src="{{url('/')}}/assets/js/owl.carousel.js"></script>
		<script src="{{url('/')}}/assets/js/input-text.js"></script>
		<script src="{{url('/')}}/assets/js/notifyMe.js"></script>
		<script src="{{url('/')}}/assets/js/jquery.placeholder.js"></script>
		<script src="{{url('/')}}/assets/js/init.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- header style two End -->
    @if(session()->has('message'))
    <script>
        Swal.fire({
        icon: "success",
        title: "Message Sent",
        text: "{{ session()->get('message') }}",
        });
    </script>
    @endif
</body>

</html>
