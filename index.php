<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Log in</title>
  <link rel="stylesheet" href="styles.css">
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
      margin-top: 4px;
      margin-bottom: 4px;
      font-family: 'Pangolin';
      font-size: 210%;
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
    .eror{
      color: white;
      font-weight: bolder;
      margin-left: 60%;
      animation-name: errr;
      animation-duration: 2s;
      color: red;
    }
@keyframes errr{
          from {color: white;}
          to {color: red;}
        }

    body, html {
      height: 100%;
      }
    .bg {
      background-image: url('Snips/bground.png');
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    #sticky-navigation{
    background: rgba(255,255,255,0);
  }
  .anime{
    width: 20%;
    animation-name: animae;
    animation-duration: 1.5s;
    width: 100%;
  }
  @keyframes animae{
            from {
              width: 20%;
            }
            to {
              width: 100%;
            }
          }
  .fader{
    opacity: 0.9;
  }
  .fadein{
    opacity: 0.9;
    animation-name: fad;
    animation-duration: 500ms;
    opacity: 1;
  }
  @keyframes fad{
            from {opacity: 0.9;}
            to {opacity: 1;}
          }

  </style>
  <link href="styles.css" rel="stylesheet">
  </head>

  <body>
  <div class = "bg">
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowra p-0" id = "sticky-navigation">
    <a class="title col-md-3 col-lg-2 mr-0 px-3">scholarz</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#" style="font-size: 110%;">The ERP for all !</a>
      </li>
    </ul>
  </nav>
  <div class="row">
    <div class="col">
      <div class="mx-auto fader" style="width: 500px; margin: 150px;" id ="click" onclick="visi('click')">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <form action="testuser.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "user" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "password" required>
              </div>
              <br>
              <button input type="Submit" value="Login" name="login" class="btn btn-primary">Submit</button>

                <p class = "eror">
                  <?php
                  if (isset($_SESSION["error"])) {
                  echo $_SESSION["error"];
                      unset($_SESSION["error"]);
                  }
                  ?>
                </p>
            </form>
          </div>
      </div>
    </div>

      <div class="col">
        <div class="container fader" style="margin-top: 10%; margin-right: 20%;">
          <div class="jumbotron shadow anime">
          <h1 class="display-4">Welcome to Scholarz !</h1>
          <p class="lead">The ERP for all.</p>
          <hr class="my-4">
          <p><h6>Scholarz is an Enterprise Resource Planning system which can be used by any Institution.
            It can manage and synchronise all the data of a School, College, Company or an Enterprise.<br>
            
            </h6></p>
          <br>
          <a class="btn btn-primary btn-lg" href="#" role="button">Know more</a>
        </div>
        </div>
      </div>
  </div>
<script>
  function visi(i) {
    document.getElementById(i).style.opacity=1;
  }
</script>
</div>
<div class="container">
  <!--<iframe src="https://trinket.io/embed/python/edd948bf08" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>-->

</div>


<p>Click the button to get your coordinates.</p>

<button style="float: left; margin-right: 5vh;" onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
