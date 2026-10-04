<header class="main-header header-metal">
		<div class="header-sticky bg-section">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					<a class="navbar-brand" href="{{ route('home') }}">
						<img src="{{ asset(setting('site_logo', 'frontend/images/logo-dark.svg')) }}" alt="{{ config('app.name') }}">
					</a>
					<!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                                <li class="nav-item {{ $productMenuCategories->isNotEmpty() ? 'submenu' : '' }}">
                                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">All Products</a></li>
                                            @if ($productMenuCategories->isNotEmpty())
                                                @foreach ($productMenuCategories as $productMenuCategory)
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('products', ['category' => $productMenuCategory->id]) }}">
                                                            {{ $productMenuCategory->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="{{ route('contact-us') }}" class="btn-default">Contact Us</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
