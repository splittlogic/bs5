@php
	html::make()->charset("utf-8")->meta();
	html::make()->name('viewport')->acontent('width=device-width, initial-scale=1')->meta();

	html::make()->css(
		asset('vendor/splittlogic/css/bootstrap.min.css')
	);

@endphp
<!DOCTYPE html>
<html>
	{!! html::head() !!}
	<body{!! html::getBodyAttributes() !!}>

    <style>

      #sidebar {
        min-width: 265px;
        max-width: 265px;
      }

      #main {
        width: 100%;
        min-height: 100vh;
        flex-direction: column;
      }

      #wrapper {
        align-items: stretch;
        display: flex;
        width: 100%;
      }

    </style>

    <div id="wrapper">

      <div id="sidebar">

        @if (isset($sidebar))
          {!! $sidebar !!}
        @endif

      </div>

      <div id="main">

    		@if (isset($content))
    			{!! $content !!}
    		@endif

      </div>

    <!-- Close wrapper -->
    </div>
	</body>
</html>
