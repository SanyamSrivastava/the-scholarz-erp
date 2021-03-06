<?php session_start(); ?>
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

  </style>
  <link href="styles.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="Home.php">scholarz</a>
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
          <!--<nav class="nav flex-column">
          <a class="nav-link active" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>-->
          <ul class="nav flex-column">
            <li class="nav-item sidenav">
              <a class="nav-link" href="">
                <span data-feather=""></span>
                <h5>WELCOME <?php echo '<br>'.$_SESSION["faculty"]; ?></h5></b>
              </a>
            </li>
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
              <a class="nav-link active" href="Admin_Sessionals.php">
                <span data-feather="shopping-cart"></span>
                Sessionals <span class="sr-only">(current)</span>
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
              <a class="nav-link" href="1st Year.php">
                <span data-feather="file-text"></span>
                1st Year
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
          <h1 class="h2">Sessionals - display</h1>
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
          <form action="show_sessionals.php" method="POST">
          <div class="form-group">
          <div class="alert alert-info" role="alert">
            Select semester
              <select class="form-control form-control-sm" id="inputGroupSelect01" name="semester" required>
                <option selected disabled value="">Choose...</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
              </select>
            </div>
          </div>
          <div class="form-group">
          <div class="alert alert-secondary" role="alert">
            Select sessional
              <select class="form-control form-control-sm" id="inputGroupSelect01" name="sessional" required>
                <option selected disabled value="">Choose...</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
              </select>
            </div>
          </div>
          <button type="submit" value="Submit" class="btn btn-primary">Show records</button>
          </form>
        </div>
        <br>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
