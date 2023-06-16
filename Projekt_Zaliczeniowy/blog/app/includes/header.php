<header> 
        <a href="<?php echo 'index.php'; ?>" class="logo">
            <h1 class="logo-text"><span>WPRG</span>BLOG</h1>
            </a>
        <i class="fa-solid fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="#">Home</a>
        </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>

            <?php if (isset($_SESSION['id'])): ?>
                <li><a href="#"><i class="fa fa-user"></i> 
                <?PHP echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
                <ul>
                    <li><a href="dashboard/main/dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php" class = "logout">Logout</a></li>
                </ul>
            </li>

            <?php else: ?>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            
            <?php endif; ?>

        </ul>
</header>