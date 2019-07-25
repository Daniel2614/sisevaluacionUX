<nav class="main-header navbars navbar navbar-expand">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item" >
			<a class="nav-link icono-navbar" data-widget="pushmenu" href="#" id="barras"><i class="fa fa-bars"></i>Sistema Integral de Evaluacion por Jefaturas</a>
		</li>
	</ul>
	<ul class="navbar-nav">
		<li class="nav-item icono-navbar"></li>
		<!-- <h6 id="abrirMenu" style="margin-top: 2px;"><i class="fas fa-arrow-left"></i> Abrir menú</h6>
		<h6 id="cerrarMenu" style="display: none; margin-top: 2px;"><i class="fas fa-arrow-left"></i> Cerrar menú</h6> -->
	</ul>
	<ul class="navbar-nav ml-auto"> 
		<li>
			<h5 style="margin-top: 8px;"><i class="fas fa-user" style="color: #6d6d6d; font-size: 1.5rem;"></i> {{Session::get('rol')}}</h5>
		</li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
	{{-- Iconos de notificacion usables posteriormente	<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="fa fa-comments-o"></i>
				<span class="badge badge-danger navbar-badge">3</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Brad Diesel
								<span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">Call me whenever you can...</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								John Pierce
								<span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">I got your message bro</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Nora Silvester
								<span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">The subject goes here</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
			</div>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="fa fa-bell-o"></i>
				<span class="badge badge-warning navbar-badge">15</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">15 Notifications</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-envelope icon-wide"></i> 4 new messages
					<span class="float-right text-muted text-sm">3 mins</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-users icon-wide"></i> 8 friend requests
					<span class="float-right text-muted text-sm">12 hours</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-file icon-wide"></i> 3 new reports
					<span class="float-right text-muted text-sm">2 days</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
			</div>
		</li>--}}

		{{--  <li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
					class="fa fa-gears"></i></a>
		</li> --}} 
		
		<li class="nav-item " data-toggle="tooltip" data-placement="bottom" title="Cerrar sesión">
			<a class="btn btn-md text-white mt-1 " data-toggle="modal" data-target="#logoutmodal" ><i class="fas fa-power-off fa-fw fa-lg icono-navbar"></i></a>
		</li>
	</ul>
</nav>
<script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
<script>
	$(document).ready(function()
	 {
		$("#barras").click(function(event) {
			$("#abrirMenu").toggle();
			$("#cerrarMenu").toggle();
		});
	});
</script>
