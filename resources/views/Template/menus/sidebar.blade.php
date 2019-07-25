<aside class="main-sidebar elevation-4 barra-izquierda collapsado sidebar-open" id="barra" style="" >
	<!-- Brand Logo -->
	<a href="{{ url('login') }}" class="brand-link" style="background: #5e2129 ">
		<img src="{{ asset('img/logoux.png') }}" alt="AdminLTE Logo" class=""
		style="opacity: .8;width: 60px">
		<span class="brand-text font-weight-light">Universidad de Xalapa </span>
	</a>

	<!-- Sidebar -->
	<div  class="sidebar font-weight-light" style="background: #5e2129" >
		<!-- Sidebar user panel (optional) -->
		
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<a href="#">
					<div class="image">
						
								<!-- <img id='perfilImg' src="" class="" alt="User Image">
							
								<img id='perfilImg' src="" class="" alt="User Image"><small class="ml-4"></small> -->
						
					</div>
				</a>	
			</div>
		

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">					
				<li class="nav-item" >
					<a  href="" class="nav-link" ><i class="nav-icon fas fa-chart-line"></i> <p>Evaluacion Docente</p></a>
				</li>
				<li class="nav-item" >
					<a  href="" class="nav-link" ><i class="nav-icon fas fa-file-excel"></i> <p>Reportes</p></a>
				</li>

			</ul>
		</nav>
		
		<!-- /.sidebar-menu -->
	</div>
		<!-- /.sidebar -->
</aside>
<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip(); 
});
</script>