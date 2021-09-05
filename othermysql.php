<?php
include('templates/header.php');

require('config.php');

// $where = "SELECT `s_name` FROM `student_details` WHERE sno = 7"; for where condition

// BETWEEN
$between = "SELECT `s_name` FROM `student_details` WHERE s_age > 20 AND sno BETWEEN 5 AND 10";


// SELECT COUNT(*),emp_branch FROM `employee` GROUP BY emp_branch  ----> For Group By
$result = mysqli_query($conn,$between);

            while($row=mysqli_fetch_assoc($result))
            {
                $name = $row['s_name'];
                echo $name;
                echo "<br>";
            }


include('templates/footer.php');
?>
