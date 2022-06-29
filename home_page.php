<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_page</title>
    <link rel="styleSheet" href="./home_page.css">
</head>

<body>
    <div class="college_name_container">
        <img src="./images/logo.png" alt="logo">
        <p>KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY (AUTONOMOUS)</br> Namakkal-Trichy Main Road,
            Tholurpatti,Thottiam- Taluk,<br> Trichy- Dist, Tamil Nadu -621 215</p>
    </div>
    <div class="cout_per_container">
        <div class="count_div">
            <p>Total Students : <b style="color:#02ffab">
                    <?php
                    $result = mysqli_query($Link,"SELECT count(*) as countstud from total_students;");
                    $abcd=mysqli_fetch_assoc($result);
                    echo $abcd['countstud']
                    ?>
                </b>
            </p>
        </div>
        <div class="count_div">
            <p>No. of Present : <b style="color:rgb(182 247 31)">
                    <?php
                    $result = mysqli_query($Link,"SELECT count(*) as countstud from scanned_students;");
                    $abcd=mysqli_fetch_assoc($result);
                    echo $abcd['countstud']
                    ?>
                </b></p>
        </div>
        <div class="per_div">
            <p>No. of Absent :<b style="color:#e71a1a">
                    <?php
                    $result2 = mysqli_query($Link,"SELECT count(*) as countstud from total_students;");
                    $abcd2=mysqli_fetch_assoc($result2);
                    
                            
                    $result1 = mysqli_query($Link,"SELECT count(*) as countstud from scanned_students;");
                    $abcd1=mysqli_fetch_assoc($result1);
                     echo ($abcd2['countstud']-$abcd1['countstud']);
                    ?>
                </b></p>
        </div>
        <div class="per_div">
            <p>Present Students percentage :<b style="color:#02ffab">
                    <?php

                            $result2 = mysqli_query($Link,"SELECT count(*) as countstud from total_students;");
                    $abcd2=mysqli_fetch_assoc($result2);

            
                $result1 = mysqli_query($Link,"SELECT count(*) as countstud from scanned_students;");
                                $abcd1=mysqli_fetch_assoc($result1);
                        echo round($abcd1['countstud']/$abcd2['countstud'],2)*100; echo "%";
        ?>
                </b> </p>
        </div>

    </div>

    <div class="students_details">
        <div class="std_total">
            <a href="./total_students.php"><button style="padding:14px 55px">Total Students</button></a>
        </div>

        <div class="std_present">
            <a href="./presented_students.php"><button style="margin:0px 70px">Presented Students</button></a>
        </div>

        <div class="std_absent">
            <a href="./absented_students.php"><button>Absented Students</button></a>
        </div>
    </div>

    <div class="spinner">
        <div class="loader"></div>
    </div>

</body>

</html>