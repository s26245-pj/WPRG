<?php include('../../app/controllers/posts.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
            <h2 class="page-title">Manage Posts</h2>
            <?php include('../../app/includes/messages.php'); ?>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>
            <tbody>
                    <?php foreach ($posts as $nr => $post): ?>
                        <tr>
                            <td><?php echo $nr + 1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>Shad</td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                            <?php if ($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                            <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                            <?php endif; ?>
                         </tr>
                    <?php endforeach; ?>

            </tbody>
        </table>
        </div>
    </div>

      
    </div>
    

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="../..//assets/js/scripts.js"></script>
    
</body>

</html>