<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
    <title>Project</title>
    <style>
 
    .button{
      width: 90%;
    }
    </style>
</head >
<body>
<?php include "array.php"?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendence.php">Attendence</a>
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
<div class=" container-fluid m-card">
    <?php
    foreach($data as $key => $value) {
      $complete1 = $value['projects'][0]['is_compleated'];
      $complete2 = $value['projects'][1]['is_compleated'];
      $class = $complete2 == "Completed" ? "success" : "danger";
      $class2 = $complete1 == "Completed" ? "success" : "danger";
    echo "<div class='card' style='width: 25rem; border-radius: 15px'>";
    echo "<img src='" . $value['image'] . "' class='card-img-top'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title title'>" . $value['name'] . "</h5>";
    echo "<h6 > Projects </h6>";
    echo "<div class='projects-container'>";
    echo "<div class='project-item'>";
    echo "<p class='card-text'>" . $value['projects'][0]['project_name'] . "</p>";
    echo "<p class='text-$class2'>" . $value['projects'][0]['is_compleated'] . "</p>";
    echo "</div>";
    echo "<div class='project-item'>";
    echo "<p class='card-text'>" . $value['projects'][1]['project_name'] . "</p>";
    echo "<p class='text-$class'>" . $value['projects'][1]['is_compleated'] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "<br/>";
    echo "<a class='btn btn-primary button' href='/test/profile.php?id=".$value['id']."'>Go To " . $value['name'] ."'s". " Profile </a>";
    echo "</div>";

    echo "</div>";
    
    }
    ?>
</div>
<footer class="bg-light text-center text-lg-start footer">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>