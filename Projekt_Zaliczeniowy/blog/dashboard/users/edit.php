<?php include('../../app/controllers/users.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - edit User</title>
    <script src="https://kit.fontawesome.com/ab6436d70f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../../app/includes/dashboardHeader.php'); ?>
    <div class="dashboard-wrapper">
    <?php include('../../app/includes/dashboardSidebar.php'); ?>
        
    <div class="dashboard-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

        <div class="content">

            <h2 class="page-title">Edit User</h2>
            <?php include('../../app/validations/errors.php'); ?>

            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                    <input type="password" name="passwordConf" class="text-input" value="<?php echo $password; ?>"></input>
                </div>
                <div>
                <?php if (isset($admin) && $admin == 1): ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            Admin
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                    <?php endif; ?>
                </div>
                <div>
                    <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                </div>
            </form>

           
        </div>
    </div>

      
    </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <script src="../../assets/js/scripts.js"></script>
    
</body>

</html>