<?php   include "../php/db.php";    ?>
<?php   include "./includes/header.php";    ?>
<?php   include "./includes/nav_home.php";    ?>
    <div class="main">
        <section id="landing" style="background-image: url('./imgs/pic1.jpg');">
            <div class="container">
                <div class="loginBox">
                    <img src="./imgs/user2.png" id="login-img" alt="user">
                    <form action="../php/login2.php" method="post" >
                        <h3>Username</h3>
                        <div class="form-input">
                            <input type="text" name="username" placeholder="Enter username ">
                        </div>
                        <h3>Password</h3>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Enter password ">
                        </div>
                        <span id="logErr">
                            <?php if(isset($_GET['loginErr'])){
                            foreach($_GET as $loc=>$item)
                                $_GET[$loc] = base64_decode(urldecode($item));
                            echo   $_GET[$loc]; }?>
                        </span><br>
                        <button type="submit" name="login">Login</button>
                    </form>
                    <a href="forgot_password.php"> Forget Password ? </a><br><br>
                    <a href="register.php"> Don't have a account!<br> REGISTER NOW </a>
                </div>
            </div>
        </section>
        
        <section id="courses" style="background-image: url('./imgs/pic2.jpg');"  >
            <div class="container">
                <h1>Courses</h1>
                 <div class="box col-sm-3">
                    <img src="./imgs/grade5.jpg" alt="computing">
                    <div class="text-box">
                        <h2>Grade 1</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div>
                <div class="box col-sm-3">
                    <img src="./imgs/grade1.jpg" alt="manegment">
                    <div class="text-box">
                        <h2>Grade 2</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div> <div class="box col-sm-3">
                    <img src="./imgs/grade2.jpg" alt="manegment">
                    <div class="text-box">
                        <h2>Grade 3</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div> <div class="box col-sm-3">
                    <img src="./imgs/grade3.jpg" alt="manegment">
                    <div class="text-box">
                        <h2>Grade 4</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div> <div class="box col-sm-3">
                    <img src="./imgs/grade4.jpg" alt="manegment">
                    <div class="text-box">
                        <h2>Grade 5</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div>
                <div class="box col-sm-3">
                    <img src="./imgs/grade6.jpg" alt="engineering">
                    <div class="text-box">
                        <h2>Grade 6</h2>
                        <form action="SOC.php" method="get"><button>View courses</button></form>
                    </div>
                </div>
            </div>
        </section>
        <section id="events">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="./imgs/pic3.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <img src="./imgs/pic4.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <img src="./imgs/pic5.jpg" alt="events" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="container">
                    <h1>Quiz And Assignments</h1>
                     <form action="../admin/admin_addevents.php"><button>View Details</button></form>
                </div>
            </div>

            <div style="text-align:center;background-color: #55C34D;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <h1>About Dar-AL-Atta PreSchool</h1>
                <div class="box">
                    <p> Dar Al-Atta is the first charity association in the sultanate of Oman that was founded in the year of 2002. This organization aims to help all the people from different sectors of life who are poor. Dar Al-Atta was officially registered as charity organization with the Ministry of Social Development in 2006.  After this registration, Dar Al-Atta was able and allowed to hire staff and organize events for fund raising and awareness so that the organization will be able to cater the issues of underprivileged people including men, women, children etc. This organization has offered programs and activities to the needy people and in these program youngsters volunteer to work because it is a non-profitable organization. These program and activities comprises o family welfare, education care, empowerment, disaster relief, Islamic values like Eid, Ramadan, zakat etc. relief.
Each organization has obvious aims and objectives to achieve that give the organization a way to lead. This organization also has certain aims and objectives to achieve and few of them are as follows: to renovate 25 and build 15 new houses each year, to provide a school meal to 5000 students yearly, to provide school uniforms to 10,000 students every year, to provide Ramadan ration to 10,000 families not only in the Sultanate of Oman in fact across of it as well, to make and train a first aid team for disaster relief program in every Wilayat, to provide empowerment programs up 200 beneficiaries which consists of providing loans to the needy people with no interest so that they can commence their business on small scale. 
Dar Al-Atta charity association has widened up their aims and objectives and decided to open schools now. The association had inaugurated its new project of preschool classes and schools for underprivileged students. At the inauguration event Sheikh Al Hinai said: “I think the education law in Oman should implement preschool education in the Sultanate because it is an extremely important step for our students." Moreover, the Executive Director of Dar Al-Atta, Rahma Al Amri said: "The classrooms are filled with everything the children need to learn and develop in the early stages of education." Education at the level of pre-school is a very crucial step in a student’s social, intellectual and physical development.
                    </p>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container head">
                <h1>Dar-Al-Attaa PreSchool</h1>
                <p>We are looking forward to hearing from you soon...</p>
                <p>inquiries@daralata.com</p>
                 <div class="container">
                   <?php
                    $nameErr=$emailErr=$msgErr="";
                    $name=$email=$msg="";
                    
                    if(isset($_POST['submit'])){
                        
                        $tele=$_POST['tele'];
                        
                        
                        if($_POST['name'] =="" || empty($_POST['name'])){
                            $nameErr="* your name is required";
                        }else{
                            $name=$_POST['name'];
                        }
                        if($_POST['email'] =="" || empty($_POST['email'])){
                            $emailErr="* your email is required";
                        }else{
                            $email=$_POST['email'];
                        }
                        if($_POST['msg'] =="" || empty($_POST['msg'])){
                            $msgErr="* message is required";
                        }else{
                            $msg=$_POST['msg'];
                        }
                        if($name!=="" && $email !=="" && $msg!==""){
                            $query="insert into inquiries(inq_name,inq_email,inq_msg) values ('{$name}','{$email}','{$msg}') ";

                            $inqiry_query=mysqli_query($connection,$query);

                            if(!$inqiry_query){
                                die('QUERY FAILED'.mysqli_error($connection));
                            }
                        }
                    } 
                    
                    ?>             
                    <form action="#" method="post" id="inqForm">
                        <div class="row">
                            <input type="text" placeholder="Name*" name="name" class="col-sm-4">
                            <span class="err"><?php echo $nameErr;?></span>
                            <input type="email" placeholder="Email*" name="email" class="col-sm-4">
                            <span class="err"><?php echo $emailErr;?></span>
                            <input type="text" placeholder="Phone Number" name="tele" class="col-sm-4">
                        </div>
                        <div class="row">
                            <textarea name="msg" cols="30" rows="10" placeholder="Write your message here.."></textarea>
                            <span class="err"><?php echo $msgErr;?></span>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit" name="submit" >
                        </div>
                    </form>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.054963175283!2d58.44860481446266!3d23.60236168466257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ff39e8d95f89%3A0x607cfe5d4580dbb5!2sDar%20Al%20Atta&#39;a!5e0!3m2!1sen!2s!4v1615620667578!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
            </div>

        
        <?php   include "./includes/footer.php";    ?>
       