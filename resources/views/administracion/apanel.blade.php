@extends('layouts.app')
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/administracion/apanel.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<script src="{{ asset('js/font-awesome.min.js')}}" ></script>
@section('content')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="{{ Route('apanel') }}">APanel</a>
	<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
	<!-- Navbar Search-->

	<!-- Navbar-->

</nav>
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<div class="sb-sidenav-menu-heading">Secciones</div>
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseHome" aria-expanded="false" aria-controls="collapseHome">
						Home
						<div class="sb-nav-link-icon ml-2"><i class="fas fa-home"></i></div>
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapseHome" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
							<a class="nav-link" href="/carousel">
								Carousel
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-images"></i></div>
							</a>
							<a class="nav-link" href="/historia">
								Historia
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-history"></i></div>
							</a>
							<a class="nav-link" href="/destacados">
								<span style="font-size:0.9em">Productos destacados</span>
								<div class="sb-nav-link-icon ml-2"><i class="fab fa-buromobelexperte" style="font-size:1.4em"></i></div>
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseLocales" aria-expanded="false" aria-controls="collapseLocales" href="/shopping-mall" >
						Productos
						<div class="sb-nav-link-icon ml-2"><i class="fas fa-tags"></i></div>
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="collapseLocales" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
							<a class="nav-link" href="/lineas">
								Lineas
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-venus-mars"></i></div>
							</a>
							<a class="nav-link" href="/marcas">
								Marcas
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-registered"></i></div>
							</a>
							<a class="nav-link" href="/perfumes">
								Perfumes
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-gem"></i></div>
							</a>
							<a class="nav-link" href="/presentaciones">
								Presentaciones
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-map"></i></div>
							</a>
							<a class="nav-link" href="/variedades">
								Variedades
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-air-freshener"></i></div>
							</a>
							<a class="nav-link" href="/presentacionesporvariedades">
								Presentaciones/Variedades
								<div class="sb-nav-link-icon ml-2"><i class="fas fa-barcode"></i></div>
							</a>
						</nav>
					</div>
					<a class="nav-link" href="/usuarios" >
						Usuarios
						<div class="sb-nav-link-icon ml-2"><i class="fas fa-users"></i></div>
					</a>


				</div>
			</div>
			<div class="sb-sidenav-footer">
				{{ Auth::user()->name }}
				<div class="small">{{ Auth::user()->roles->first()->name }}</div>
				<button class="btn btn-outline-danger mt-1" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">Cerrar sesión</button>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>
				<div class="container-fluid mt-5 pl-5 pr-5">
				@yield('main')
				</div>
			</main>

		</div>
	</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/administracion/apanel.js')}}" ></script>
