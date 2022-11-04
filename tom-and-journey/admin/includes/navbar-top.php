<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Tom and Dashboard</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        <!-- WIP Search -->
        <!-- <div class="input-group">
                 <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->

    </form>
    <a class="text-light logout-btn" onclick="LogOut()" name="logout_btn">Logout</a>
    <!-- Navbar-->
    <!-- <form method="post" action="../config/server.php"> -->

    <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" name="logout_btn">Logout</a></li>
                </ul>
            </li>
        </ul> -->
    <!-- </form> -->
</nav>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>

<style>
    .logout-btn {
        text-decoration: none;
        margin-right: 5%;
        cursor: pointer;
        font-weight: 500;
    }
</style>

<script>
    function LogOut() {

        //send data to server.php to logout

        $.ajax({
            url: 'config/server.php',
            type: 'post',
            data: {
                ajax: 1,
                logout: 1,
                // Action: 'render',
            },
            success: function(response) {
                console.log(response);
                if (response.indexOf('logout') != -1) {
                    window.location.href = '../index.php';
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('error')
                // window.location.href = 'index.php';
            }
        });
    }
</script>