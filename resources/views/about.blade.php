@php
	html::make()->charset("utf-8")->meta();
	html::make()->name('viewport')->acontent('width=device-width, initial-scale=1')->meta();

	html::make()->css(
		asset('vendor/splittlogic/css/bootstrap.min.css')
	);
	html::make()->css(
		asset('vendor/splittlogic/css/bootstrap-icons-1.5.0/bootstrap-icons.css')
	);

@endphp

<!DOCTYPE html>
<html>

	{!! html::head() !!}

	<style>
		#main-wrapper {
			width: 100%;
		}

		#page-wrapper {
			width: 100%;
		}

		#sidebar-nav a:link {
			color: white;
			margin: 2px;
		}

		#sidebar-nav a:hover, a:active {
			color: black;
			background-color: #d2f4ea;
		}

		#sidebar-nav .active, button:active {
			border: 2px solid #0d6efd;
		}

		#sidebar-nav button {
			color: white;
			margin: 2px;
		}

		#sidebar-nav button:hover {
			color: black;
			background-color: #d2f4ea;
		}

		#sidebar-nav .opened {
			background-color: #0d6efd;
		}

		#sidebar-title a:link, a:visited {
			color: white;
			text-decoration: none;
		}

		#sidebar-title a:hover {
			text-decoration: underline;
		}

		#sidebar-wrapper {
			display: block;
			width: 280px;
			overflow-x: hidden;
			overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
		}
	</style>
	<body{!! html::getBodyAttributes() !!}>

	{!! html::make()->js(asset('vendor/splittlogic/js/bootstrap.bundle.min.js')) !!}

	<div id="page-wrapper" class="d-flex">

		<div id="sidebar-wrapper" class="bg-dark text-white p-3">

			<h4 id="sidebar-title" class="text-center">
				<a href="{{ route('splittlogic.bs5') }}">
					Splittlogic
					<br>
					Bootstrap
				</a>
			</h4>

			<hr>

			@if (isset($menu))
				{!! $menu !!}
			@endif

		</div>

		<div id="main-wrapper">

			<div class="container-fluid">

				<div class="container">

					@if (isset($content))
						{!! $content !!}
					@endif

				</div>

			</div>

		</div>

	</div>

	{!! html::getjs() !!}

	</body>
</html>
