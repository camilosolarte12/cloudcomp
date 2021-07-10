<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Computación en la nube</title>
</head>
<body>
<?php   include("menu.php")   ?>
<hr>
        <form class="row g-3" method="POST" action="guardar.php">
        <div class="col-auto">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="">
        </div>

        <div class="col-auto">
            <label for="staticEmail2" >Email</label>
            <input type="text" name="correo" class="form-control" id="staticEmail2" value="">
        </div>
        <div class="col-auto">
            <label for="inputPassword2">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword2">
        </div>
        <div class="col-auto">
        <br>
            <button type="submit" class="btn btn-primary mb-3">Entrar</button>
        </div>
        </form>

    <hr>
    <?php   if(isset($_SESSION['mensaje']))  { ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> <?php echo $_SESSION['mensaje']; ?> </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php session_unset(); }  ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>