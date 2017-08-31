<div class="mainMenu">
	<div class="container">
		<img src="/images/logo_hotelapp.png" height="35px" style="margin-right: 15px; float: left;">
		<ul class="nav">
			<li class="nav-item ">
				<a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" href="/">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::path() == 'payments' ? 'active' : '' }}" href="/payments">Payments</a>
			</li>
		</ul>
	</div>
</div>
