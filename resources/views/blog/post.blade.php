<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>{{ $data->judul }} | Bregaster</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="shortcut icon" sizes="114x114" href="{{ asset('foto/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('solidstate') }}/assets/css/main.css">
	<noscript>
		<link rel="stylesheet" href="{{ asset('solidstate') }}/assets/css/noscript.css">
	</noscript>
</head>

<body class="is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<section id="wrapper">
			<header>
				<div class="inner">
					<h2>{{ $data->judul }}</h2>
					<p>Posted by Bregas at {{$data->tanggal}}</p>
				</div>
			</header>

			<!-- Content -->
			<div class="wrapper">
				<div class="inner">
					{!!$data->isi !!}
				</div>
			</div>

		</section>

		<!-- Footer -->
		<section id="footer">
			<div class="inner">
				<ul class="copyright">
					<li>&copy; 2023 Bregaster. </li>
				</ul>
			</div>
		</section>

	</div>

	<!-- Scripts -->
	<script src="{{ asset('solidstate') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('solidstate') }}/assets/js/jquery.scrollex.min.js"></script>
	<script src="{{ asset('solidstate') }}/assets/js/browser.min.js"></script>
	<script src="{{ asset('solidstate') }}/assets/js/breakpoints.min.js"></script>
	<script src="{{ asset('solidstate') }}/assets/js/util.js"></script>
	<script src="{{ asset('solidstate') }}/assets/js/main.js"></script>

</body>

</html>