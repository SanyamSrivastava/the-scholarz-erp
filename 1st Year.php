<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Student Section</title>
  <link rel="stylesheet" href="ERP%20Portal/styles.css">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
    .title{
      font-family: 'Pangolin';
      font-size: 180%;
      color: #364547;
      animation-name: displayer;
      animation-duration: 2s;
      color: white;

    }
    .title:hover{
      color: white;
      text-decoration: none;
    }
@keyframes displayer{
      from {color: #364547;}
      to {color: white;}
    }
  </style>
<link href="styles.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="title col-md-3 col-lg-2 mr-0 px-3">scholarz</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="index.php">Log in</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item sidenav">
            <a class="nav-link" href="Home.php">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.php">
              <span data-feather="file"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_Sessionals.php">
              <span data-feather="shopping-cart"></span>
              Sessionals
            </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="Attendance.html">
              <span data-feather="users"></span>
              Attendance
            </a>
          </li>-->

          <li class="nav-item">
            <a class="nav-link" href="Credentials.php">
              <span data-feather="layers"></span>
              Credentials
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="4th Year.php">
              <span data-feather="file-text"></span>
              4th Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3rd Year.php">
              <span data-feather="file-text"></span>
              3rd Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="2nd Year.php">
              <span data-feather="file-text"></span>
              2nd Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="1st Year.php">
              <span data-feather="file-text"></span>
              1st Year <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Intermediate.php">
              <span data-feather="file-text"></span>
              Intermediate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="High School.php">
              <span data-feather="file-text"></span>
              High School
            </a>
          </li>
        </ul>
      </div>
    </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">1st year</h1>
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
<div class="frm">
  <h4>SEM 1</h4>
  <h6>The fields here are to be filled in accordance of your AKTU One View result.</h6>
  <div class="container">
    <div class="row">
      <div class="col">
          <!--<form class="needs-validation" novalidate>
            <div class="form-row bottomspace">
              <div class="col-sm-10">
                <label for="validationCustom01">Enter total number of Subjects</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom02">Enter total number of theory Subjects</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

            <div class="form-row bottomspace">
              <div class="col-sm-10">
                <label for="validationCustom03">Enter total number of practical Subjects</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row bottomspace">
              <div class="col-sm-10">
                <label for="validationCustom04">Total marks obtained</label>
                <input type="text" class="form-control" id="validationCustom04" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row bottomspace">
              <div class="col-sm-10">
                <label for="validationCustom05">Result status</label>
                <select class="custom-select" id="validationCustom05" required>
                  <option selected disabled value="">choose..</option>
                  <option value="1">CP (0)</option>
                  <option value="2">CP (1)</option>
                  <option value="3">CP (2)</option>
                  <option value="4">CP (3)</option>
                </select>
                <div class="invalid-feedback">
                  Please select a status option.
                </div>
              </div>
            </div>
            <div class="form-row bottomspace">
              <div class="col-sm-10">
                <label for="validationCustom06">SGPA</label>
                <input type="text" class="form-control" id="validationCustom06" required>
                <div class="invalid-feedback">
                  Please provide a valid SGPA.
                </div>
              </div>
            </div>

            <button class="btn btn-dark" type="submit">Update</button>
          </form>-->

          <script>
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

            function textChanger(checkBox) {
              if (checkBox.checked) {
                document.getElementById("place").placeholder = "Enter CGPA";
              } else {
                document.getElementById("place").placeholder = "Enter percentage";
              }
            }

          </script>
        <br>

        <div class="row">
          <h6 class="bottomspace">Tally the columns and fill this row. Each time you fill the row you can see it on the pane.</h6>
          <form action="insert_semesters.php" class="needs-validation" method="POST" novalidate>
            <input type="hidden" name="semester" value="sem1">
            <div class="form-row" style="font-size: 90%;">
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom07">Subject code</label>
                  <input type="text" name="subcode" class="form-control" id="validationCustom07" placeholder="KCS102" required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom08">Subject name</label>
                  <input type="text" name="subname" class="form-control" id="validationCustom08" required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                <label for="validationCustom19">Type</label>
                <select class="form-control form-control" id="inputGroupSelect19" style="font-size: 97%;" name="subtype" required>
                  <option selected disabled value="">choose..</option>
                  <option value="1">Theory</option>
                  <option value="2">Practical</option>
                </select>
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom10">Internal marks</label>
                  <input type="text" class="form-control" id="validationCustom10" name="marks_int"required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom11">External marks</label>
                  <input type="text" class="form-control" id="validationCustom11" name="marks_ext" required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                <label for="validationCustom12">Back paper</label>
                <select class="form-control form-control" id="inputGroupSelect12" name="back"style="font-size: 97%;" required>
                  <option selected disabled value="">choose..</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                </select>
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom13">Grade</label>
                  <input type="text" class="form-control" id="validationCustom13" name="grade" placeholder="A+" required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom13">Total marks</label>
                  <input type="text" class="form-control" id="validationCustom13" name="marks_tot" placeholder="obtained" required style="font-size: 97%;">
              </div>
              <div class="form-group col-sm-1 rightspace">
                  <label for="validationCustom13">SGPA</label>
                  <input type="text" class="form-control" id="validationCustom13" name="sgpa" placeholder="" required style="font-size: 97%;">
              </div>
              <div class="form-group col-auto" style="margin-top: 26px;">
              <button type="submit" class="btn btn-outline-primary">Add</button>
          </div>
          </div>
        </form>

            <button type="button" class="btn btn-outline-dark" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Make changes</button>
            <div class="collapse" id="collapseExample">
              <div class="card card-body bottomspace">
                <h6>To make changes in an existing row you need to enter the correct subject code and the columns to update.</h6>
                <form action="update_semesters.php" method="POST">
                  <input type="hidden" name="semester" value="sem1">
                  <div class="form-row" style="font-size: 85%;">
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom14">Subject code</label>
                        <input type="text" class="form-control" id="validationCustom14" name="subcode" placeholder="KCS102" required style="font-size: 95%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom15">Subject name</label>
                        <input type="text" class="form-control" id="validationCustom15" name="subname" placeholder="" style="font-size: 95%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                      <label for="validationCustom19">Type</label>
                      <select class="form-control form-control" id="inputGroupSelect19" name="subtype" style="font-size: 95%;">
                        <option selected disabled value="">choose..</option>
                        <option value="Theory">Theory</option>
                        <option value="Practical">Practical</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom17">Internal marks</label>
                        <input type="text" class="form-control" id="validationCustom17" name="marks_int" style="font-size: 95%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom18">External marks</label>
                        <input type="text" class="form-control" id="validationCustom18" name="marks_ext" style="font-size: 95%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                      <label for="validationCustom19">Back paper</label>
                      <select class="form-control form-control" id="inputGroupSelect19" name="back"style="font-size: 95%;">
                        <option selected disabled value="">choose..</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom20">Grade</label>
                        <input type="text" class="form-control" id="validationCustom20" name="grade" placeholder="A+" style="font-size: 95%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom13">Total marks</label>
                        <input type="text" class="form-control" id="validationCustom13" name="marks_tot" placeholder="obtained" style="font-size: 97%;">
                    </div>
                    <div class="form-group col-sm-1 rightspace">
                        <label for="validationCustom13">SGPA</label>
                        <input type="text" class="form-control" id="validationCustom13" name="sgpa"placeholder="" style="font-size: 97%;">
                    </div>
                    <div class="form-group col-auto" style="margin-top: 26px;">
                    <button type="submit" class="btn btn-outline-primary" style="font-size: 100%;">Update</button>
                </div>
                <div class="form-group col-auto" style="margin-top: 26px;">
                <button type="submit" class="btn btn-outline-danger" style="font-size: 100%;">Delete row</button>
            </div>
                </div>
                </form>
              </div>
          </div>
        </div>
        <br>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      SEMESTER 1 PANE
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Subject code</th>
                            <th scope="col">Subject name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Internal marks</th>
                            <th scope="col">External marks</th>
                            <th scope="col">Back paper</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Total marks obtained</th>
                            <th scope="col">SGPA</th>
                          </tr>
                        </thead>

                        <?php
                          $DB_HOST = 'localhost';
                          $DB_USER = 'root';
                          $DB_PSWD = '';
                          $DB_NAME = 'std_sem';

                            $conn = new mysqli($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME );
                            if(mysqli_connect_error()){
                              die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
                            }
                            else{
                                  $sql = mysqli_query($conn,"SELECT * FROM sem1");

                                      while($row = mysqli_fetch_array($sql))
                                      {
                                      echo "<tr>";
                                      echo "<td>" . $row['subcode'] . "</td>";
                                      echo "<td>" . $row['subname'] . "</td>";
                                      echo "<td>" . $row['subtype'] . "</td>";
                                      echo "<td>" . $row['marks_int'] . "</td>";
                                      echo "<td>" . $row['marks_ext'] . "</td>";
                                      echo "<td>" . $row['back'] . "</td>";
                                      echo "<td>" . $row['grade'] . "</td>";
                                      echo "<td>" . $row['marks_tot'] ."</td>";
                                      echo "<td>" . $row['sgpa'] ."</td>";
                                      echo "</tr>";
                                      }
                                  $conn->close();
                                }
                         ?>

                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      </div>
      <br>
      <br>
      <br>
      <br>
    </div>
    <h4>SEM 2</h4>
    <h6>The fields here are to be filled in accordance of your AKTU One View result.</h6>
    <div class="container">
      <div class="row">
        <div class="col">
            <!--<form class="needs-validation" novalidate>
              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom01">Enter total number of Subjects</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
                <div class="form-row bottomspace">
                  <div class="col-sm-10">
                    <label for="validationCustom02">Enter total number of theory Subjects</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>

              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom03">Enter total number of practical Subjects</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom04">Total marks obtained</label>
                  <input type="text" class="form-control" id="validationCustom04" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom05">Result status</label>
                  <select class="custom-select" id="validationCustom05" required>
                    <option selected disabled value="">choose..</option>
                    <option value="1">CP (0)</option>
                    <option value="2">CP (1)</option>
                    <option value="3">CP (2)</option>
                    <option value="4">CP (3)</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a status option.
                  </div>
                </div>
              </div>
              <div class="form-row bottomspace">
                <div class="col-sm-10">
                  <label for="validationCustom06">SGPA</label>
                  <input type="text" class="form-control" id="validationCustom06" required>
                  <div class="invalid-feedback">
                    Please provide a valid SGPA.
                  </div>
                </div>
              </div>

              <button class="btn btn-dark" type="submit">Update</button>
            </form>-->

          <br>

          <div class="row">
            <h6 class="bottomspace">Tally the columns and fill this row. Each time you fill the row you can see it on the pane.</h6>
            <form class="insert_semesters.php" novalidate>
              <input type="hidden" name="semester" value="sem2">
              <div class="form-row" style="font-size: 90%;">
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom07">Subject code</label>
                    <input type="text" class="form-control" id="validationCustom07" name="subcode" placeholder="KCS102" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom08">Subject name</label>
                    <input type="text" class="form-control" id="validationCustom08" name="subname" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                  <label for="validationCustom19">Type</label>
                  <select class="form-control form-control" id="inputGroupSelect19" name="subtype" style="font-size: 97%;" required>
                    <option selected disabled value="">choose..</option>
                    <option value="Theory">Theory</option>
                    <option value="Practical">Practical</option>
                  </select>
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom10">Internal marks</label>
                    <input type="text" class="form-control" id="validationCustom10" name="marks_int" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom11">External marks</label>
                    <input type="text" class="form-control" id="validationCustom11" name="marks_ext" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                  <label for="validationCustom12">Back paper</label>
                  <select class="form-control form-control" id="inputGroupSelect19" name="back" style="font-size: 97%;" required>
                    <option selected disabled value="">choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom13">Grade</label>
                    <input type="text" class="form-control" id="validationCustom13" name="grade" placeholder="A+" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom13">Total marks</label>
                    <input type="text" class="form-control" id="validationCustom13" name="marks_tot" placeholder="obtained" required style="font-size: 97%;">
                </div>
                <div class="form-group col-sm-1 rightspace">
                    <label for="validationCustom13">SGPA</label>
                    <input type="text" class="form-control" id="validationCustom13" name="sgpa" placeholder="" required style="font-size: 97%;">
                </div>
                <div class="form-group col-auto" style="margin-top: 26px;">
                <button type="submit" class="btn btn-outline-primary">Add</button>
            </div>
            </div>
          </form>
              <button type="button" class="btn btn-outline-dark" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Make changes</button>
              <div class="collapse" id="collapseExample1">
                <div class="card card-body bottomspace">
                  <h6>To make changes in an existing row you need to enter the correct subject code and the columns to update.</h6>
                  <form action="update_semesters.php">
                    <input type="hidden" name="semester" value="sem2">
                    <div class="form-row" style="font-size: 85%;">
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom14">Subject code</label>
                          <input type="text" class="form-control" id="validationCustom14" name="subcode" placeholder="KCS102" required style="font-size: 95%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom15">Subject name</label>
                          <input type="text" class="form-control" id="validationCustom15" name="subname" placeholder="" style="font-size: 95%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                        <label for="validationCustom19">Type</label>
                        <select class="form-control form-control" id="inputGroupSelect19" name="subtype" style="font-size: 95%;">
                          <option selected disabled value="">choose..</option>
                          <option value="Theory">Theory</option>
                          <option value="Practical">Practical</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom17">Internal marks</label>
                          <input type="text" class="form-control" id="validationCustom17" name="marks_int" style="font-size: 95%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom18">External marks</label>
                          <input type="text" class="form-control" id="validationCustom18" name="marks_ext" style="font-size: 95%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace" style="font-size: 95%;">
                        <label for="validationCustom19">Back paper</label>
                        <select class="form-control" id="inputGroupSelect19" name="back" style="font-size: 95%;">
                          <option selected disabled value="">choose..</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom20">Grade</label>
                          <input type="text" class="form-control" id="validationCustom20" name="grade" placeholder="A+" style="font-size: 95%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom13">Total marks</label>
                          <input type="text" class="form-control" id="validationCustom13" name="marks_tot" placeholder="obtained" style="font-size: 97%;">
                      </div>
                      <div class="form-group col-sm-1 rightspace">
                          <label for="validationCustom13">SGPA</label>
                          <input type="text" class="form-control" id="validationCustom13" name="sgpa" placeholder="" style="font-size: 97%;">
                      </div>
                      <div class="form-group col-auto" style="margin-top: 26px;">
                      <button type="submit"  class="btn btn-outline-primary" style="font-size: 100%;">Update</button>
                  </div>
                  <div class="form-group col-auto" style="margin-top: 26px;">
                  <button type="submit" class="btn btn-outline-danger" style="font-size: 100%;">Delete row</button>
              </div>
                  </div>
                  </form>
                </div>
            </div>
          </div>
          <br>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        SEMESTER 2 PANE
                      </button>
                    </h2>
                  </div>

                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Subject code</th>
                              <th scope="col">Subject name</th>
                              <th scope="col">Type</th>
                              <th scope="col">Internal marks</th>
                              <th scope="col">External marks</th>
                              <th scope="col">Back paper</th>
                              <th scope="col">Grade</th>
                              <th scope="col">Total marks obtained</th>
                              <th scope="col">SGPA</th>
                            </tr>
                          </thead>

                          <?php
                              $conn = new mysqli($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME );
                              if(mysqli_connect_error()){
                                die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
                              }
                              else{
                                    $sql = mysqli_query($conn,"SELECT * FROM sem2");

                                        while($row = mysqli_fetch_array($sql))
                                        {
                                        echo "<tr>";
                                        echo "<td>" . $row['subcode'] . "</td>";
                                        echo "<td>" . $row['subname'] . "</td>";
                                        echo "<td>" . $row['subtype'] . "</td>";
                                        echo "<td>" . $row['marks_int'] . "</td>";
                                        echo "<td>" . $row['marks_ext'] . "</td>";
                                        echo "<td>" . $row['back'] . "</td>";
                                        echo "<td>" . $row['grade'] . "</td>";
                                        echo "<td>" . $row['marks_tot'] ."</td>";
                                        echo "<td>" . $row['sgpa'] ."</td>";
                                        echo "</tr>";
                                        }
                                    $conn->close();
                                  }
                           ?>

                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
