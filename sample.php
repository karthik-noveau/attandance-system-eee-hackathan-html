<?php
include "connection.php";
$sql = "SELECT * FROM total_students LEFT JION";
$result = mysqli_query($Link, $sql);

if (1) {
  while($result>0) {
    echo $row['reg_no'],"\n";
  }
} else {
  echo "0 results";
}

mysqli_close($Link);
?>




