<header>
        <a href="<?php echo '../../index.php'; ?>" class="logo">
            <h1 class="logo-text"><span>WPRG</span>BLOG</h1>
        </a>
        <i class="fa-solid fa-bars menu-toggle"></i>
        <ul class="nav">
            <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#"><i class="fa fa-user"></i> 
                <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i></a>
                <ul>
                    <li><a href="../../logout.php" class = "logout">Logout</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
</header>