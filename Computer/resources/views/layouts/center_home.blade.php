<!DOCTYPE html>
<html lang="en">
<head>
	<title>Computer Store</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="computer, computer shop, laptop, monitor, mouse, desktop, pc, keyboard, vga, ram, mainboard, headphone, cpu">
	<meta name="description" content="computer shop">
	<meta name="author" content="Quang, Hoang The Quang">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Custom Fonts -->
     {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css ')}}" rel="stylesheet" type="text/css">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/images/favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/material-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/styleindex.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/style-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/style-top-menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/style-list-product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index/style-footer.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cart_page.css') }}">
	
</head>
<body>
	@include('layouts.header')
	@include('layouts.top-menu')
	@section('content')
	@show()
	@include('layouts.footer')
</body>

</html>