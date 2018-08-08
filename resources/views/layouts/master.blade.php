<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Furbook</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<body>
	<div class="container">
		<div class="page_header">
			@yield('header')
		</div>
		@if (Session::has('success'))
		 <div class="alert alert-success">
		 	{{Session::get('success')}}
		 	
		 </div>
		@endif
		@yield('content')
	</div>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$( function() {
    		$('.datepicker').datepicker({
    			dateFormat: 'yy-mm-dd',
    			showOn: 'button'

    		});
  		});
	</script>
	
</body>
</html>