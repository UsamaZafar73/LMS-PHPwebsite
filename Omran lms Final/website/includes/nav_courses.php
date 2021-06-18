
   <body>
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

    <nav>
        <div class="container">
            <div class="header">
                <img src="./imgs/dar2.jpg" width="150px" height="100px" alt="dar al ataa logo">
            </div>

            <label for="show-menu" class="show-menu"><img src="menu.png" style="width:100%" alt="-"></label>
            <input type="checkbox" id="show-menu" role="button">


            <ul class="navbar" id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#courses" class="current">Courses</a>
                    <ul class="hiddenNav">
                       <li><a href="SOC.php">Grade 1</a></li>
                        <li><a href="SOC.php">Grade 2</a></li>
                        <li><a href="SOC.php">Grade 3</a></li>
                        <li><a href="SOC.php">Grade 4</a></li>
                        <li><a href="SOC.php">Grade 5</a></li>
                        <li><a href="SOC.php">Grade 6</a></li>
                    </ul>
                </li>
                <li><a href="index.php#events">Assessments</a></li>
                <li><a href="index.php#about">About Dar al attaa</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
