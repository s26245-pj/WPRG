<?php include("app/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/ab6436d70f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('app/includes/header.php'); ?>

    <div class="auth-content">

        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <?php include('app/validations/errors.php'); ?>
            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input" value="<?php echo $username; ?>"></input>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input" value="<?php echo $email; ?>"></input>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input" value="<?php echo $password; ?>"></input>
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input"value="<?php echo $passwordConf; ?>"></input>
            </div>

            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>

            <p>Or <a href="login.php">Sign In</a></p>

        </form>

    </div>

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="/assets/js/scripts.js"></script>
    
</body>

</html>