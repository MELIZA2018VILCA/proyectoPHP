<?php
include "includes/config.php";
session_start();

if (isset($_SESSION["user_email"])) {
    header("Location: todos.php");
    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php getHead(); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            
            <div class="col-md-10 mx-auto col-lg-5">
                <form  action="login.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                
                    <h1><center>LOGIN</center> </h1>
                    <h4 >Usuarios</h4>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">correo electronico</label>
                    </div>
                    <h4>Contraseña</h4>
                    <div class="form-floating mb-3">
                         <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">contraseña</label>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">login</button>
                    <hr class="my-4 ">
                   
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>