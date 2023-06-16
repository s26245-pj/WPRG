<?php include('../../app/controllers/posts.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Add Post</title>
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
            <h2 class="page-title">Add Post</h2>

            <?php include('../../app/validations/errors.php'); ?> 

            <form action="create.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                </div>
                <div>
                    <label >Body</label>
                    <textarea name="body" value="<?php echo $body ?>" id="body"></textarea>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div>
                <div>
                    <?php if (empty($published)): ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                    </label>
                    <?php endif; ?>    
                </div>
                
                <div>
                    <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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