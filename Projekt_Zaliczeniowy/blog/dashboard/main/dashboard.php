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
        <div class="content">
            <h2 class="page-title">Dashboard</h2>

            <?php include('../../app/includes/messages.php'); ?>            
        </div>
    </div>

      
    </div>
    

   


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <script src="../assets/js/scripts.js"></script>
    
</body>

</html>