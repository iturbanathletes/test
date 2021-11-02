<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index.html" class="brand-link bg-white pb-2 text-decoration-none">
		<img src="{{ url('img/icon/logo_ua.png') }}" alt="Urban Athletes" class="brand-image ms-1">
		{{-- <b>LOGO</b> --}}

		<span class="brand-text font-weight-light">
			{{-- <img src="dist/img/bpjskt text.png" alt="BPJS Ketenagakerjaan" class="" style="height: 35px;"> --}}
			<b class="text-dark font-weight-bold">Urban </b>Athletes
		</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu"
				data-accordion="false">

				<li class="nav-header">MASTER DATA</li>
				<li class="nav-item">
					<a href="/" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/karyawan" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-user-friends"></i>
						<p>Karyawan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/club" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Club</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/divisi" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Divisi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/jabatan" class="nav-link" data-nav="{{ $side ?? '' }}">
						<i class="nav-icon fa-fw fas fa-edit"></i>
						<p>Jabatan</p>
					</a>
				</li>

		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>