<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        /* .table{
            border: 3px;
        } */
    </style>
</head>
<body>
<?php include "array.php"?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home
          
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="attendence.php">Attendence</a>
        <span class="sr-only">(current)</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<table class="table-primary table">
<tr class="table-primary">
<th class="table-primary">ID</th>
<th class="table-primary">Name</th>
<th class="table-primary">Day</th>
<th class="table-primary">Check-In</th>
<th class="table-primary">Check-Out</th>
<?php 
foreach($data as $key => $value ){

    $checkIn = $value['attendance'][0]['check_in'];
    $checkOut = $value['attendance'][0]['check_out'];

    $checkIn = strtotime($checkIn) / 3600;
    $checkOut = strtotime($checkOut) / 3600;

    $class = $checkOut - $checkIn  >= 7 ? "success" : "danger";
    echo "<tr class='table-$class'>";
    echo "<td class='table-primary'>". $value['id']."</td>";
    echo "<td class='table-primary'>". $value['name']."</td>";
    echo "<td class='table-primary'>" . $value['attendance'][0]['day'] . "</td>";
    echo "<td class='table-primary'>" . $value['attendance'][0]['check_in'] . "</td>";
    echo "<td class='table-primary'>" . $value['attendance'][0]['check_out'] . "</td>";
    echo "<td class='table-primary'></td>";
    echo "</tr>";
    
}

?>




</body>
</html>