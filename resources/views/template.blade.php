<!DOCTYPE html>
<html>
<head>
	<title>Ravarel Harsha Athalla - 5026221048</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
	  href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@400;500;600&display=swap"
	  rel="stylesheet">

	<!-- Font Awesome for Modern Icons -->
    <!--
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    -->

    <script src="/js/fontawesome.js"></script>
    <script src="/js/solid.js"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<style>
		body {
			font-family: 'Be Vietnam Pro', sans-serif;
		}
		.table th, .table td {
			vertical-align: middle;
		}
		.btn-icon {
			padding: 0.4rem 0.6rem;
			font-size: 0.9rem;
		}
	</style>
</head>
<body class="bg-light">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Ravarel Harsha Athalla</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="/pegawai">Pegawai</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/handphone">Handphone</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/eas">EAS</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <div class="container py-4">
        <h3 class="mb-4 text-center">Ravarel Harsha Athalla - 5026221048</h3>
        <h2 class="mb-4 text-center">@yield('headerPage')</h2>

        @yield('link1')

        <br/>
        <br/>

        @yield('content')
    </div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</div>
</html>
