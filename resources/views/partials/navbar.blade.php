<nav class="navbar navbar-dark navbar-expand-lg sticky-top bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#">Laracrud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "product") ? 'active' : '' }}" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/categories">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
            @auth
                
            @endauth
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ ($active === "signin") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>