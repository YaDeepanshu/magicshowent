<?php include"config.php";?>
<style>
    .menu{
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: #171d21;
}
.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: transparent;
}

.nav a:hover {
    background: transparent;
    color: #e2d703;
}
</style>
    <header>
        <div class="menu fixed-top">
            <a href="#" class="logo">MAGICSHOW</a>
            <ul class="nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="allmovies.php">MOVIES</a></li>
                <li><a href="allmusic.php">MUSIC</a></li>
                <li><a href="allgames.php">GAMES</a></li>
            </ul>
            <div class="action">
                

    <?php
    if(isset($_SESSION['user_login_details'])){
      echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.ucwords(strtolower($_SESSION['user_login_details']['fname'])).'
            <ul class="dropdown-menu">
              <li><a href="my_account.php">My Account</a></li>
              <li><a>'.$_SESSION['user_login_details']['subscription'].' User</a></li>
              <li><a href="index.php?user_logout=true">Logout</a></li>
            </ul>';
          }else{
            echo '<a href="login.php" class="btn btn-success btn2">Login</a>';
          }
    ?>

                
            </div>
        </div>
    </header>

