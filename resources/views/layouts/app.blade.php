<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
@yield('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	var baseApiUrl =  "https://a-l-t-p.herokuapp.com/api/";
    var baseLaravelUrl = "{{ url('/') }}"
</script>
<title>Ai Là Triệu Phú</title>
</head>
<body>
    <header>
        @yield('content')
    </header>
</body>