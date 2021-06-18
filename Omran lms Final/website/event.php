<?php   include "../php/db.php";    ?>
<?php   include "./includes/header_events.php";    ?>
<?php   include "./includes/nav_events.php";    ?>

<div id="eventsview">  
    <div class="container heading">
        <h1>Quiz Assignment Section For Students</h1>
     </div>

    <div class="container">
        <?php
        $query="select * from quiz_assignment ";
        $select_events=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_events)){
            $e_id=$row["id"];
            $e_name=$row["name"];
            $e_image=$row["image"];
            $e_content=$row["content"];
            $e_venue=$row["venue"];
            $e_date=$row["date"];
            $e_time=$row["time"];
       ?>
            <div class="eventItem row">
                <!-- bdy div-->
                <a href="event_content.php?event=<?php echo $e_id;  ?>"><div class="box">
                    <img src="<?php echo $e_image;  ?>" alt="event">
                    <div class="eventCaption">
                        <h2><?php echo $e_name;  ?></h2>
                        <div class="info">
                            <p><?php echo $e_date;  ?></p>
                            <p><?php echo $e_venue;  ?></p>
                        </div>
                    </div>
                </div></a>

            </div>
            <?php
         }
    ?>
    </div>
</div>      
    <!-- end of bdy -->


     <?php   include "./includes/footer.php";    ?>