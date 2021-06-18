<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>


<body id="home">
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
                <li><a href="index.php#events">Assessments</a></li>
                <li><a href="index.php#about">About Dar-Al-Attaa Preschool</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="regPage">
        <section class="register">
           <h1>Register</h1>
            <form action="../php/register.php" method="post" id="myForm">
                <input type="text" name="fname" placeholder="Full Name">
                <span id="fnErr"></span>
                <input type="text" name="uname" placeholder="Username">
                <span id="unErr"></span>
                <input type="password" name="pass" placeholder="Password">
                <span id="pErr"></span>
                <input type="password" name="cpass" placeholder="Confirm Password">
                <span id="cpErr"></span>
                <input type="email" name="mail" placeholder="Email">
                <span id="mErr"></span>
                
                           <div class="form-group col-md-6">
									<label for="type">Select Grade</label>
									<select id="type" name="type" class="form-control chosenSelect">
										<?php include('statusList.html'); ?>
									</select>
								  </div><br><br>
                
                 <span id="inErr"></span>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
                <input type="submit" name="register" value="Register" onclick="DoRegisterValidation();">
            </form>
            <br>
            <p>Already have a account,<a href="login.php" style="color:#71BA51;"><b>Login from here</b></a></p>
        </section>
    </div>
    <?php   include "./includes/footer.php";    ?>
