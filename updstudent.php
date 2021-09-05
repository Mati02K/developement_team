<?php
session_start();
if(isset($_SESSION['username']))
{
include('templates/header.php');

?>


<div class="container">
        <div class="row">
          <div class="col-sm-10 col-md-9 col-lg-9 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <img src="logo.jpg" class="img-responsive center-block d-block mx-auto" height="160" width="150" alt="Logo">  
                <center><h3>Update Student</h3></center>
                
                <form action="controller/update.php"  method="post"  autocomplete="off">
           
                <div class="form-group">
                    <label for="exampleFormControlInput1">Student Roll No</label>
                    <select name="rollno" class="form-control" required> 

                    <option value="">Enter the Roll No</option>
                    <?php 
                    require('config.php');

                    $query = "SELECT * FROM `student_details`";
                    
                    $result = mysqli_query($conn,$query);
                    
                    $option = '';
                    // <option value='xyz'>xyz</option>
                    while($row=mysqli_fetch_assoc($result))
                    {
                       $rollno = $row['sno'];
                       $option = "<option value=$rollno>$rollno</option>";
                       echo $option;
                    }
                    
                    ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Student Name</label>
                    <input type="text" name="sname" class="form-control" placeholder="Enter Name" required>
                </div>
                
                  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Update...</button>
                 
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
<?php
include('templates/footer.php');
}
else
{
    echo "<script>location.replace('index.php')</script>";
}
?>

