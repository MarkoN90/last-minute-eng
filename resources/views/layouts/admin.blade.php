<!doctype html>
<html lang="en-US" dir="ltr">
@include('includes.admin.header')
<body>
<main class="main" id="top">
    <div class="container-fluid px-0">
        @include('includes.admin.nav')
        <nav class="navbar navbar-light navbar-top navbar-expand">
            <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3"  >
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img id="main-logo" width="200" class="float-left" src="{{ URL::to('/') }}/images/Last-Minute-English_White.png">
                        </div>
                    </div>
                </a></div>
            <div class="collapse navbar-collapse">
                <div class="search-box d-none d-lg-block">
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
{{--                    <li class="nav-item dropdown"><a href="/settings" class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>--}}

                    <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-l"><img class="rounded-circle" src="{{ URL::to('/') }}/images/{{ \Illuminate\Support\Facades\Auth::user()->profile_image }}" alt=""></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                            <div class="card bg-white position-relative border-0">
                                <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl"><img class="rounded-circle" src="{{ URL::to('/') }}/images/{{ \Illuminate\Support\Facades\Auth::user()->profile_image }}" alt=""></div>
                                        <h6 class="mt-2">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
                                    </div>
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3" href="/profile"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="/dashboard"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="/posts"><span class="me-2 text-900" data-feather="lock"></span>Posts</a></li>

                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top">
                                    @if(\Illuminate\Support\Facades\Auth::user()->admin)
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3" href="/add-author"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    @endif
                                    <hr>
                                    <div class="px-3 mb-3" ><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="/logout"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
            <footer class="footer">
                <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                </div>
            </footer>
        </div>
</main>
<script src="{{ asset('js/') }}/phoenix.js"></script>
</body>

</html>
