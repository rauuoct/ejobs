<nav class="navbar navbar-expand-lg navbar-dark bg-nav py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span>e-JOB</span> CENTERS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="employee-register">Employee</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="employer-register.html">Employer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(\Request :: is('institute')) active @endif" href="{{ URL::to('institute') }}">Training Institute</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="agency-register.html">Recruitment Agency</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="serviceProvider-register.html">Service Provider</a></li>
                    <li><a class="dropdown-item" href="serviceSeeker-register.html">Service Seeker</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    @if (Auth::guest())
                        <a class="nav-link @if(\Request :: is('login')) active @endif" href="{{ URL::to('login') }}">Login</a>
                    @else
                        <a class="nav-link @if(\Request :: is('login')) active @endif" href="#">{{ Auth::user()->name }}</a>
                        <!-- <a href="{{ URL::to('logout') }}">Logout</a> -->
                    @endif
                </li>
                <li class="nav-item">
                   <a class="nav-link p-0" href="javascript:void(0);">
                    <input type="checkbox" checked data-toggle="toggle" data-on="English" data-off="Urdu" data-onstyle="success" data-offstyle="primary">
                  </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
