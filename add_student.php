<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
    session_start();
    $connect=mysqli_connect('localhost','root','');
    if($connect)
    $selectdb=mysqli_select_db($connect,"std_assignment");
?>

<head>
  <meta charset="utf-8">
  <title>Student Section</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="ERP%20Portal/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Neucha&family=Rock+Salt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script type="text/javascript">
  $(document).ready(function(){

          var css = '<div class="form-row"><div class="form-group col-sm-3"><label for="validationCustom01">Student name</label><input type="text" name="sname" class="form-control" id="validationCustom01" placeholder="Peter" required><div class="valid-feedback">
                Looks good!</div></div><div class="form-group col-sm-3">
              <label for="validationCustom02">Roll number</label>
              <input type="number" name="rno" class="form-control" id="validationCustom02" placeholder="1828568014" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="form-group col-sm-3">
              <label for="validationCustom03">Student ID</label>
              <input type="number" name="sid" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid ID.
              </div>
            </div>
            <div class="form-group col-sm-3">
              <label for="validationCustom04">Email</label>
              <input type="email" name="email" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please select a valid Email.
              </div>
            </div>
          </div>';

          var i = 1;

          $("#generate").click(function(){
              alert('ok');
          });

  })
  </script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .vertic{
      border-right: 2px solid #c7cfb7;
    }
    .center{
      margin-top: 20%;
      margin-left: 10%;
      width: 80%;
      padding: 10px;
    }
  </style>
  <link href="styles.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="Home.php">UGI Student Portal</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="Sign in.html">Log in</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <!--<nav class="nav flex-column">
            <a class="nav-link active" href="#">Active</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </nav>-->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="Profile.html">
                <span data-feather="file"></span>
                <h5>ADMIN <?php echo "<br>".$_SESSION["admin"]; ?></h5>
                <h6><?php  ?></h6>
              </a>
            </li>
            <li class="nav-item sidenav">
              <a class="nav-link" href="Home.php">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Profile.html">
                <span data-feather="file"></span>
                Add student <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add_faculty.php">
                <span data-feather="shopping-cart"></span>
                Add faculty
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Attendance.html">
                <span data-feather="users"></span>
                Add subject
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Credentials.html">
                <span data-feather="layers"></span>
                Add branch
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Credentials.html">
                <span data-feather="layers"></span>
                Add course
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Credentials.html">
                <span data-feather="layers"></span>
                Create class
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="4th Year.html">
                <span data-feather="file-text"></span>
                Enter student database
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="3rd Year.html">
                <span data-feather="file-text"></span>
                Enter faculty database
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="2nd Year.php">
                <span data-feather="file-text"></span>
                See courses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="1st Year.php">
                <span data-feather="file-text"></span>
                See branches
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="1st Year.php">
                <span data-feather="file-text"></span>
                See subjects
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Intermediate.html">
                <span data-feather="file-text"></span>
                See classes
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Student</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">What's new <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags-fill marg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                </svg></button>
              <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell marg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                  <path fill-rule="evenodd"
                    d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg></button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort by
            </button>
          </div>
        </div>
<div class="container">
  <div class="row">
    <div class="col col-8 vertic">
      <div class="row">
        <div class="col">
          <div class="row">
            <h6>Enter student details.</h6>
          </div>

          <div class="row">
            <div class="card" style="margin-right: 10px;">
              <div class="card-body" id="cardele">
        <form class="needs-validation" action="" method="post" novalidate>
          <div class="form-row">
            <div class="form-group col-sm-3">
              <label for="validationCustom01">Student's name</label>
              <input type="text" name="sname" class="form-control" id="validationCustom01" placeholder="Peter" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="form-group col-sm-3">
              <label for="validationCustom02">Roll number</label>
              <input type="number" name="rno" class="form-control" id="validationCustom02" placeholder="1828568014" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="form-group col-sm-3">
              <label for="validationCustom03">Student's ID</label>
              <input type="number" name="sid" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid ID.
              </div>
            </div>
            <div class="form-group col-sm-3">
              <label for="validationCustom04">Email</label>
              <input type="email" name="email" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please select a valid Email.
              </div>
            </div>
          </div>
          <button class="btn btn-dark" type="submit" name="s1" style="float: right;">Insert</button>
        </form>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

        <?php
          function insRecord($sname, $rno, $sid, $email){
                $sql = "INSERT INTO student(std_id,roll_number, std_name, email) VALUES ($sid, $rno, '$sname', '$email')";
                if($connect->query($sql)){
                $result_ins = "RECORD INTRODUCED";
                echo $result_ins;
                }
                else {
                    $result_ins = "ERROR".$sql."<br>".$connect->error;
                 echo $result_ins;
                }
          }

         ?>
                </div>
              </div>
        </div>
        </div>
      </div>
    </div>
    <div class="col col-4">
      <div class="center">
        <div class="row">
        Click to get a row for student details
        </div>
        <br>
        <div class="row">
            <input class="btn btn-outline-success" type="button" style="margin-left: 25%;" name="generate" id="generate" value="Generate">
        </div>
      </div>
    </div>
  </div>

</div>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
