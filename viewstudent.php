<?php
session_start();
if(isset($_SESSION['username']))
{
include('templates/header.php');
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Student Contact No</th>
      <th scope="col">Student Age</th>
    </tr>
  </thead>
  <tbody>
  <?php

        require('config.php');

        $query = "SELECT * FROM `student_details`";

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $rollno = $row['sno'];
                $s_name = $row['s_name'];
                $s_age = $row['s_age'];
                $s_email = $row['s_email'];
                $s_cno = $row['s_cno'];
                echo"
                <tr>
                <th scope='row'>$rollno</th>
                <td>$s_name</td>
                <td>$s_email</td>
                <td>$s_cno</td>
                <td>$s_age</td>
              </tr>
              ";
            }
            mysqli_close($conn);         
        }
        else
        {
            echo "<h1>No Records Found</h1>";
        }
    ?>
  
   
  </tbody>
</table>
<?php
include('templates/footer.php');
}
else
{
    echo "<script>location.replace('index.php')</script>";
}
?>