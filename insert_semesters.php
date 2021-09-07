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

<?php
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PSWD = '';
  $DB_NAME = 'std_sem';

  $semester = isset($_POST['semester']) ? $_POST['semester'] : '';
  $subcode = isset($_POST['subcode']) ? $_POST['subcode'] : '';
  $subname = isset($_POST['subname']) ? $_POST['subname'] : '';
  $subtype = isset($_POST['subtype']) ? $_POST['subtype'] : '';
  $marks_int = isset($_POST['marks_int']) ? $_POST['marks_int'] : '';
  $marks_ext = isset($_POST['marks_ext']) ? $_POST['marks_ext'] : '';
  $back = isset($_POST['back']) ? $_POST['back'] : '';
  $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
  $marks_tot = isset($_POST['marks_tot']) ? $_POST['marks_tot'] : '';
  $sgpa = isset($_POST['sgpa']) ? $_POST['sgpa'] : '';
  $subcode = strtoupper($subcode);
  $subname = strtoupper($subname);

    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME );
    if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
      $subjectpresent = false;
      $result = mysqli_query($conn,"SELECT * FROM $semester");
      while($row = mysqli_fetch_array($result)){
          if($row['subcode'] == $subcode)
          $subjectpresent = true;
      }
        if($subjectpresent == false){
          $sql = "INSERT INTO $semester(subcode, subname, subtype, marks_int, marks_ext, back, grade, marks_tot, sgpa)
          VALUES ('$subcode', '$subname', '$subtype', $marks_int, $marks_ext, '$back', '$grade', $marks_tot, $sgpa)";
        if($conn->query($sql)){
        $result_ins = "RECORD INTRODUCED";
      }
      else {
        $result_ins = "ERROR".$sql."<br>".$conn->error;
          }
      }
        $conn->close();
    }

?>

<div class="container" style="margin-top: 170px;">
  <div class="card text-center">
    <div class="card-header">
      Notifier
    </div>
    <div class="card-body">
      <h5 class="card-title">
        <?php
        if($subjectpresent == true)
          echo 'SUBJECT EXISTS ALREADY';
        else
        echo $result_ins;
        ?></h5>
  <script>
      document.write('<a href="' + document.referrer + '"class="btn btn-dark btn-sm">Go Back</a>');
  </script>
    </div>
    <div class="card-footer text-muted">
      <?php
            if($subjectpresent == true)
              echo 'The records with this subject are already present.';
            elseif($result_ins == "RECORD INTRODUCED"){ echo 'You are good to go.';} else { echo 'Please try again';} ?>
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
</html>
