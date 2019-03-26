<html>
<head>
<title> @yield('title') </title>
<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4\
/css/bootstrap-theme.min.css">
<script src="{{url('public/js/bootstrap.js')}}"></script>
<script src="{{url('public/js/jquery-3.1.1.js')}}"></script>
</head>
<body>

@yield('content')
</body>
</html>
