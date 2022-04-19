<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/') }}/phoenix.min.css" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/') }}/user.min.css" rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
<main class="main" id="top">
    <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="navbar-vertical-content scrollbar">



                    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                        <li class="nav-item"><a class="nav-link" href="../index.html">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashboard</span></div>
                            </a></li>

                        <a class="nav-link" target="_blank" href="/" role="button" data-bs-toggle="" aria-expanded="false">
                                 <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="arrow-up-right"></span>
                                    </span>
                                    <span class="nav-link-text">Go To website</span>
                                </div>
                         </a>

                        <li class="nav-item">
                            <p class="navbar-vertical-label">Pages</p>

                            <a class="nav-link" href="/post" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="flag"></span>
                                    </span>
                                    <span class="nav-link-text">New Post</span>
                                </div>
                            </a>

                            <a class="nav-link" href="/posts" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="flag"></span>
                                    </span>
                                    <span class="nav-link-text">All Posts</span>
                                </div>
                            </a>

                            <a class="nav-link" href="/posts" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="file-text"></span>
                                    </span>
                                    <span class="nav-link-text">All Posts</span>
                                </div>
                            </a>

                            <a class="nav-link" href="/settings" role="button" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="settings"></span>
                                    </span>
                                    <span class="nav-link-text">Settings</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Settings</span></a></div>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
            <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="32">
                            <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                        </div>
                    </div>
                </a></div>
            <div class="collapse navbar-collapse">
                <div class="search-box d-none d-lg-block">
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
                    <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>

                    <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-l"><img class="rounded-circle" src="../assets/img/team/57.png" alt=""></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                            <div class="card bg-white position-relative border-0">
                                <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl"><img class="rounded-circle" src="../assets/img/team/57.png" alt=""></div>
                                        <h6 class="mt-2">User</h6>
                                    </div>
                                     <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="lock"></span>Posts</a></li>

                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr>
                                    <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">

            <h3 class="text-900 mb-3" data-anchor="" id="example">Create New Blog Post</h3>

            <form action="/posts" enctype="multipart/form-data" method="post">

                <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">Post Title</label> <input class="form-control" id="exampleFormControlInput1"   placeholder=""></div>

                <div class="mb-3"><label class="form-label" for="customFile">Post Image</label> <input class="form-control" id="customFile" type="file"></div>

                <div class="form-check" style="padding-left: 40px;"><input class="form-check-input ml-2" id="flexCheckDefault" type="checkbox" value=""> <label class="form-check-label" for="flexCheckDefault">Published</label></div>

                <div class="mb-3"><label class="form-label" for="exampleTextarea">Post Text</label> <textarea style="min-height: 400px;" class="form-control needs-validation" id="exampleTextarea" rows="3"> </textarea></div>

                <div class="mb-3 "><label class="form-label" for="exampleTextarea"></label> <button type="submit" class="btn btn-phoenix-primary me-1 mb-1" type="button">Save Post</button></div>

            </form>

            <footer class="footer">
                <div class="row g-0 justify-content-between align-items-center h-100 mb-3">

                </div>
            </footer>
        </div>
    </div>
</main>
<script src="{{ asset('js/') }}/phoenix.js"></script>
</body>

</html>
