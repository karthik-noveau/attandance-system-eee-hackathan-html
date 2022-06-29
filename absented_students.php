<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absented_students</title>
    <link rel="styleSheet" href="./absented_students1.css" />

</head>

<body>
    <div class="college_name_container">
        <img src="./images/logo.png" alt="logo">
        <p>KONGUNADU COLLEGE OF ENGINEERING AND TECHNOLOGY (AUTONOMOUS)</br> Namakkal-Trichy Main Road,
            Tholurpatti,Thottiam- Taluk,<br> Trichy- Dist, Tamil Nadu -621 215</p>
    </div>

    <table class="db_tabel_main">
        <tr>
            <th>Roll number</th>
            <th>Register No</th>
            <th>Name</th>
             

        </tr>
        <?php
                  $res=mysqli_query($Link,"select a.roll_no,a.reg_no,a.name from total_students a where a.reg_no NOT IN ( select b.reg_no from scanned_students b);");
               while($row=mysqli_fetch_array($res))
           {
            echo "<tr class='db_tabel'>";
  
             echo "<td>"; echo $row["roll_no"]; echo"</td>";
             echo "<td>"; echo $row["reg_no"]; echo"</td>";
             echo "<td>"; echo $row["name"]; echo"</td>";
   
              echo "</tr>";
}
?>
    </table>
</body>

</html>