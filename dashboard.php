<?php
session_start();
if(isset($_SESSION['username']))
{
include('templates/header.php');
?>

<!-- Main Content Starts Here -->


<div class="main">
            
            <div class="row">
                <div class="col-sm-4">
                    <a href="addstudent.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">Create Student</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="viewstudent.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">View Students</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>   
                <div class="col-sm-4">
                    <a href="updstudent.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">Update Student</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
         
            <div class="row">
                <div class="col-sm-4">
                    <a href="delstudent.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">Delete Student</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="othermysql.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">Check All MYSQL Operations</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>   
                <div class="col-sm-4">
                    <a href="sessionvscookie.php"style="text-decoration: none;">
                        <div class="card cardshow">
                            <div class="card-body">
                                <center>
                                <h4 class="card-text">Add Admin</h4>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
         
        </div>

<!-- Main Content Ends Here -->
<?php
include('templates/footer.php');
}
else
{
    echo "<script>location.replace('index.php')</script>";
}
?>