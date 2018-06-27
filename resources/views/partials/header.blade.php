<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Bills Investment</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="dropdown-item" href="/clist"> Company Listing </a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="/overview"> Company Overview</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="/company/market-overview"> Market Overview</a>
            </li>

        </ul>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Manage the Site
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @if(Auth::check())
                    <a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                @else
                <a class="dropdown-item" href="#">signin</a>
                <a class="dropdown-item" href="#">signup</a>
                @endif

            </div>
        </div>
    </div>
</nav>