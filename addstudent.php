
<?php
include('templates/header.php');
?>

<div class="container">
        <div class="row">
          <div class="col-sm-10 col-md-9 col-lg-9 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <img src="logo.jpg" class="img-responsive center-block d-block mx-auto" height="160" width="150" alt="Logo">  
                <center><h3>Create Student</h3></center>
                
                <form action="controller/create.php"  method="post"  autocomplete="off">
           
                <div class="form-group">
                    <label for="exampleFormControlInput1">Student Name</label>
                    <input type="text" name="sname" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="smail" class="form-control" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Number</label>
                    <input type="tel" name="scno" class="form-control" placeholder="XXXXXXXXXXX" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Enter Student Age</label>
                    <input type="number" name="sage" class="form-control" placeholder="XX" required min="18" max="25">
                </div>

                  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Add...</button>
                 
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
<?php
include('templates/footer.php');
?>