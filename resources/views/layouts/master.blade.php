<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Heru Setyiawan">
		<title>FASTPRINT Test</title>

		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
		 <link href="{{ asset('js/plugins/grafik/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
		<style type="text/css">
			body {
				padding-top: 60px;
			}

			.at-error {
				/* placed on a error labels */
				color: #A94442;
				font-size: 12px !important;
			}
			.at-warning {
				/* placed on a warning (invalid) labels */
				color: #8A6D3B;
				font-size: 12px !important;
			}
		</style>

		<script src="{!! asset('js/main.js') !!}"></script>
		<script src="/js/plugins/vue.min.js"></script>
		<script src="{!! asset('js/plugins/validator.js') !!}"></script>
		
		<script type="text/javascript" >
			jQuery(document).ready(function(){
			   $('#form').valida();
			});
		</script>

	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">FastPrint Test</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav ">
					<li><a href="{!! url('nilaisiswa') !!}"><span class="fa fa-home"></span> Home</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			@yield('content')
			<hr class="featurette-divider">
			<footer>
		        <p>© 2016, Created by : <a href="#">Heru Setyiawan</a> | E-mail : <a href="#">eyesblackhawk@gmail.com</a></p>
		      </footer>
		</div>

		<!-- jQuery -->


	<script src="{{ asset('js/bs.min.js') }}"></script>
	<script src="{{ asset('js/data.js') }}"></script>

    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->    

    <script src="{{ asset('js/plugins/grafik/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/plugins/grafik/morris/morris.js') }}"></script>
    <script src="{{ asset('js/plugins/grafik/morris/morris-demo.js') }}"></script>


	</body>
</html>