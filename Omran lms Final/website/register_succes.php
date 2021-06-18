<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>

<body id="home">
    <div class="topNav">
        <div class="container">
            <ul class="topLogin">
              <?php
               if(isset($_SESSION['username'])){
                   echo "<li><a href='../user/profile.php'>{$_SESSION['username']}</a></li>";
                   echo "<li><a href='../php/logout.php'>Log Out</a></li>";
               }else{
                   echo "<li><a href='login.php'>Login</a></li>";
                   echo "<li><a href='register.php'>Register</a></li>";
               }
               
               ?>
            </ul>
        </div>
    </div>
  <nav id="loginNav">
        <div class="container">
            <div class="header">
                <img src="./imgs/dar2.jpg" width="150px" height="100px" alt="dar al ataa logo">
            </div>

            <label for="show-menu" class="show-menu"><img src="menu.png" style="width:100%" alt="-"></label>
            <input type="checkbox" id="show-menu" role="button">


            <ul class="navbar" id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#courses">Courses</a>
                    <ul class="hiddenNav">
                        
                    </ul>
                </li>
                <li><a href="index.php#events">Events</a></li>
                <li><a href="index.php#about">About Dar-Al-Attaa Preschool</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>     
    <section class="container regSucc">
        <h1>Registration Succesfull</h1>
        <p><a href="login.php">Click here to Sign In</a></p>
    </section>
    
    <?php   include "./includes/footer.php";    ?>