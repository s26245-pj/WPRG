<?php include("path.php"); ?> 

<?php include("app/database/db.php");

$posts = selectAll('posts', ['published' => 1]);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPRG_BLOG</title>
    <script src="https://kit.fontawesome.com/ab6436d70f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('app/includes/header.php'); ?>
    <?php include('app/includes/messages.php'); ?>
    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Trending</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>


            <div class="post-wrapper"> 

            <?php foreach ($posts as $post): ?>
                <?php var_dump($post['image']); ?>
                <?php echo 'app/assets/images' . '/' . $post['image']; ?>
                <div class="post">
                <img src="<?php echo '/app/assets/images' . '/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"><?php echo $post['title']; ?></a></h4>
                        <i class="fa fa-user"></i> John Doe 
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created'])) ?></i> 
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="content clearfix">

            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                <?php foreach ($posts as $post): ?>   
                    <img src="/app/assets/images/1687417606_japko.jpg" alt="" class="post-image">

                  
                <div class="post">
                <img src="<?php echo 'app/assets/images' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html"><?php echo $post['title']; ?></a></h2>
                        <i class="far fa-user"></i> John Travolta
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created'])) ?></i>
                        <p class="preview-text">
                            <?php echo substr($post['body'], 0, 150) . '...' ?>
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>

                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

                
            </div>
        </div>
    </div>

    <?php include('app/includes/footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/scripts.js"></script>
    
</body>

</html>