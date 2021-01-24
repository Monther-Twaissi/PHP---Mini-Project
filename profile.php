<?php
require_once("./array.php");


$id = $_GET["id"];
if (!$id) die("ID is invalid");

$info = null;
foreach($data as $k => $v) {
    if ($v["id"] == $id) 
        $info = $v;
    
}

if (!$info) die("can't find id $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img src="<?php echo $info['image'] ?>"  alt="hi"> 
                </div>
                <div class="info">
                    <div class="title" style="font-size: 4rem">
                        <a target="_blank" href="https://scripteden.com/"><?php echo $info['name'] ?></a>
                    </div>
                    <div class="desc" style="font-size: 2.5rem"><?php echo $info['birthday'] ?></div>
                    <h2 >Projects</h2>
                    <br>
                    <div class="desc" style="font-size: 2rem"><?php echo $info['projects'][0]['project_name'] ?></div>
                    <br>
                    <div class="desc" style="font-size: 2rem"><?php echo $info['projects'][1]['project_name'] ?></div>
                    <br>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" style="width: 6rem; height: 6rem" href="https://twitter.com/webmaniac">
                        <i class="fa fa-github" style="font-size: 4.5rem" ></i>
                    </a>
                    <a class="btn btn-primary btn-sm" style="width: 6rem; height: 6rem" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook" style="font-size: 4.5rem"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" style="width: 6rem; height: 6rem" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-linkedin" style="font-size: 4.5rem"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" style="width: 6rem; height: 6rem" rel="publisher"
                       href="index.php">
                        <i class="fa fa-arrow-left" style="font-size: 4.5rem"></i>
                    </a>
                </div>
            </div>

        </div>

	</div>
</div>
</body>
</html>


