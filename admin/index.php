<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../dist/css/normalize.css">
   <link href="../dist/css/admin-signin.css" rel="stylesheet">
   <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css">
    <style>
        body{
            background: url("../image/devin-physique-gym.jpg") no-repeat center;
            background-size: cover;
        }
        input{
            background-color:rgba(0,0,0,0.7) !important;
            /*border:none !important;*/
        }
    </style>
</head>
<body class="text-center">
<form id="loginForm" class="form-signin">
    <img class="mb-4" src="../image/Metabolic_Vector_Logo.png" alt="" width="320" height="172">
    <h1 style="color: white" class="h3 mb-3 font-weight-normal">Admin Login</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input style="color: white" name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input style="color: white" name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label style="color: white">
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="button">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018 Metabolic Nutrition.</p>
</form>
<script src="../dist/js/jquery-3.3.1.min.js"></script>
<script src="../dist/semantic-ui/semantic.min.js"></script>
<script>
    $('#btnLogin').click(function () {
        let productForm=$('#loginForm').serialize();
        $.ajax({
            url:"../api/service/UserService.php" ,
            method:"POST",
            async:true,
            data:productForm
        }).done(function (resp) {
            if (resp == true) {
                    window.location="dashboard.php";
            }else {
                alert("Invalid Login !");
            }
        })
    });
</script>
</body>

</html>