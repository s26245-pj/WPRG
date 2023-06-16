<?php include('../../app/controllers/users.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Users</title>
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
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>

        <div class="content">
            <h2 class="page-title">Manage Users</h2>
            <?php include('../../app/includes/messages.php'); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th colspan="2">Action</th>
                </thead>
            <tbody>
                <?php foreach ($users as $key => $user) : ?>
                    <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo ($user['admin'] == 1) ? 'admin' : 'author'; ?></td>
                    <td><a href="edit.php?id=<?php echo $user['id'] ?>" class="edit">edit</a></td>
                    <td><a href="index.php?delete_id=<?php echo $user['id'] ?>" class="delete">delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>

      
    </div>
    

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="../../assets/js/scripts.js"></script>
    
</body>

</html>