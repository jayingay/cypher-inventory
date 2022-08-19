<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('/admin/dist/img/admin-logo2.png') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info ml-2">
				<a href="#" class="d-block">{{ Auth::user()->name ?? '' }}</a>
			</div>
      	</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
				data-accordion="false">

				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Menus<i class="right fas fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} "><i class="fa fa-home nav-icon"></i><p>Dashboard</p></a>
						</li>
						<li class="nav-item">
							<a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users') ? 'active' : '' }}"><i class="fa fa-users nav-icon"></i><p>User</p></a>
						</li>
						<li class="nav-item">
							<a href="{{ route('categories.index') }}" class="nav-link {{ request()->is('categories') ? 'active' : '' }}"><i class="fa fa-list nav-icon"></i><p>Category</p></a>
						</li>
						<li class="nav-item">
							<a href="{{ route('brands.index') }}" class="nav-link {{ request()->is('brands') ? 'active' : '' }}"><i class="fa fa-list nav-icon"></i><p>Brand</p></a>
						</li>
						<li class="nav-item">
							<a href="{{ route('sizes.index') }}" class="nav-link {{ request()->is('sizes') ? 'active' : '' }}"><i class="fa fa-list nav-icon"></i><p>Size</p></a>
						</li>
						<li class="nav-item">
							<a href="{{ route('products.index') }}" class="nav-link {{ request()->is('products') ? 'active' : '' }}"><i class="fa fa-list nav-icon"></i><p>Product</p></a>
						</li>
					</ul>
				</li>
			</ul>
			
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
