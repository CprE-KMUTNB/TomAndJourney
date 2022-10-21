<!-- import config.php -->
<?php include("config.php") ?>
<!-- end import config.php -->

</div>
<!-- end wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- footer -->
<footer class="main-footer fixed-bottom text-sm bg-dark">

    <!-- import version from config.php -->
    <!-- footer right text -->
    <?php
    echo "
    <div class='float-right d-none d-sm-block'>
        Version $VERSION
    </div>
    ";
    ?>

    <!-- footer left text -->
    ©KMUTNB Trademarks and brands are the property of their respective owners.
</footer>
<!-- end footer -->

</body>
<!-- end body -->

</html>
<!-- end html -->


<style>
    /* body */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: white;
    }

    /* footer */
    .main-footer {
        border-top: 1px solid #343a40 !important;

    }

    /* form control */

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /* --- navbar --- */
    #custom-nav-bar {
        background-color: #A64343 !important;
        border-color: #A64343;
    }

    .nav-link {
        color: white !important;
    }

    .nav-item {
        padding-left: 5px;
        padding-right: 5px;
    }

    .nav-item :hover {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    .nav-item .active {
        color: #A64343 !important;
        background-color: white;
        padding: 10px 5px;
        border-radius: 5px;
        font-weight: 500;
    }

    #brand-logo {
        vertical-align: middle;
    }


    /* --- login form ---*/

    /* content-header */

    .login-box-msg-group {
        line-height: 1%;
    }

    .text-1 {
        padding-bottom: 10px;
    }

    .login-box-msg-group {
        padding-bottom: 2%;
    }

    /* content form */

    #form-frame {
        background-color: white;
        outline: 1px solid black;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-wrapper {
        background-color: white;
    }

    /* input username */

    .input-group-1 {
        margin-top: 30px;
        outline: 1px solid #A64343;
        border-color: black;
        border-radius: 10px;
    }

    #username {
        border-radius: 10px;
        border-color: transparent;
        padding-left: 10px;
        padding-right: 10px;
    }

    .input-group-1 #username-logo {
        margin-top: auto;
        margin-bottom: auto;
        padding-left: 15px;
        padding-right: 15px;
        color: grey;
    }

    /* input password */

    .input-group-2 {
        margin-top: 30px;
        outline: 1px solid #A64343;
        border-color: black;
        border-radius: 10px;

    }

    .input-group-2 #password-logo {
        margin-top: auto;
        margin-bottom: auto;
        padding-left: 15px;
        padding-right: 15px;
        color: grey;
    }

    #password {
        border-radius: 10px;
        border-color: transparent;
    }

    /* remember me and forgot password */

    #remember-group {
        color: grey;

        margin-left: auto;
        margin-right: auto;
        /* margin: 0px auto 0px auto; */
    }

    #remember-group label {
        margin: 20px 0px 20px 0px;
    }

    #remember-group input {
        margin-right: 5px;
    }


    .blank-buffer {
        width: auto;
    }

    #remember-group label {
        font-weight: 400;
    }

    #remember-group input:hover {

        color: grey;
    }

    #top-buffer-1 {
        color: #A64343;
        margin: 20px auto 20px auto;
    }

    /* login button */
    #login-button {
        background-color: #A64343;
        border-radius: 10px;
        color: white;
        font-weight: 700;
        margin-bottom: 10px;
    }

    #text-1 {
        color: grey;
    }

    #register-text {
        color: #A64343 !important;
    }

    /* register text */

    #outside-text {
        padding-top: 10px;
    }

    #outside-text a {
        color: #A64343;
    }

    #outside-text p {
        padding-right: 10px;
    }
</style>