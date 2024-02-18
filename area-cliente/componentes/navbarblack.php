

<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent ">
            <div class="container">
                <a class="navbar-brand fs-4 " href="..\visual\home.php"><img src="../visual/imgs/logo.png" width="60px" height="60px"></a>
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: black; color: white;">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">São Paulo FC</h5>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0" >
                        <ul class="navbar-nav nav nav-underline justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                            <li class="nav-item mx-2">
                                <a class="nav-link fw-semibold" href="..\visual\home.php" style="color:white" >Home</a>
                            </li>
                            <li class="nav-item mx-2" >
                                <a class="nav-link fw-semibold" href="..\visual\equipe.php" style="color:white">Equipe</a>
                            </li>
                            <li class="nav-item mx-2" >
                                <a class="nav-link fw-semibold" href="..\visual\review.php" style="color:white">Depoimentos</a>
                            </li>
                            <li class="nav-item mx-2" >
                                <a class="nav-link fw-semibold" href="..\..\area-admin\jogador\index.php" style="color:white">Admin</a>
                            </li>
                        </ul>
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                            <a href="..\visual\login.php" class="text-white" id="signup">Login</a>
                            <a href="..\visual\inscrever.php" class="text-black text-decoration-none px-3 py-1 rounded-4" style="background-color: red" id="signup">Inscreva-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <style>
        .offcanvas {
            z-index: 1000;
        }
        #signup:hover{
            filter: brightness(0.8)
        }
        

        @media (max-width: 991px) {
            .sidebar {
                background-color: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
            }
        }
        .navbar{
            z-index: 999 !important;
        }
        .offcanvas-backdrop{
            z-index: 0 !important;
        }
    </style>

