<div class="left-wrapper">
	<div class="left-block">
		<button class="close-menu">
			<i class="fa fa-times"></i>
		</button>
		<div class="left-block-body">
			<nav>
				<div class="nav-logo">
					<a href="{{route('dashboard')}}">
						<img src="{{asset("public/landing")}}/images/logo.png" class="logo" width="70px">
						<img src="{{asset("public/landing")}}/images/m-logo.png" class="logo-icon">
					</a>
				</div>
				<div class="navlink">
					<ul>
						<li>
							<a class="@if((substr(strrchr(url()->current(),"/"),1)=='page')){{'active'}}@endif" href="{{route('landing.index')}}"><i class="fa fa-list-alt"></i> <span>Home</span></a>
						</li>
						<li class="parent">
							<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="javascript-void:(0)"><i class="fa fa-cubes"></i> <span>Services</span> </a>
							<ul class="submenu">
								<li>
									<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="{{route('landing.onlineMarketing')}}"> 
										<i class="fa fa-bullhorn"></i>
										<span>Online Marketing</span>
									</a>
								</li>
								<li>
									<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="{{route('landing.trading')}}"> 
										<i class="fa fa-area-chart"></i>
										<span>Trading</span>
									</a>
								</li>
								<li>
									<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="{{route('landing.develop')}}"> 
										<i class="fa fa-file-code-o"></i>
										<span>Development</span>
									</a>
								</li>
								<li>
									<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="{{route('landing.onlineServices')}}"> 
										<i class="fa fa-desktop"></i>
										<span>Online Service</span>
									</a>
								</li>
								<li>
									<a class="@if((substr(strrchr(url()->current(),"/"),0)=='page')){{'active'}}@endif" href="{{route('landing.privacy.policy')}}"> 
										<i class="fa fa-file"></i>
										<span>Privacy Policy</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{ env('APP_URL') }}/jamali/admin/dashboard"><i class="fa fa-list-alt"></i> <span>Dashboard</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>