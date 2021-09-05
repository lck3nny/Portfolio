<header class="header">
    <?php include "content.php";?>
    <div class="header-bar">
        <div class ="logo">
            <img src="img/devliam.svg" alt="" class="logo_img">
        </div>
        <button class="nav_toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
    </div>
    
    <nav class="nav">
        <ul class="nav_list">
            <li class="nav_item"><a href="index.php" class="nav_link">Home</a></li>
            <li class="nav_item"><a href="avalanche.php" class="nav_link"><?php echo $my_projects[0];?></a></li>
            <li class="nav_item"><a href="pokemon.php" class="nav_link"><?php echo $my_projects[1];?></a></li>
            <li class="nav_item"><a href="photo.php" class="nav_link"><?php echo $my_projects[2];?></a></li>
            <li class="nav_item"><a href="snowsports.php" class="nav_link"><?php echo $my_projects[3];?></a></li>
            <li class="nav_item"><a href="snkrs.php" class="nav_link"><?php echo $my_projects[4];?></a></li>
            <li class="nav_item"><a href="connect.php" class="nav_link"><?php echo $my_projects[5];?></a></li>
        </ul>
    </nav>
</header>
