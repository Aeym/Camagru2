<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" /> 
        <link href="bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        
    <body>
        <div class="topnav" id="myTopnav">
            <a href="?page=home" class="active">Home</a>
            <a href="?page=photo">Photo editing</a>
            <a href="?page=gallery">Gallery</a>
            <a href="?page=signin">Sign in</a>
            <a href="?page=signup">Sign up</a>
            <a href="?page=account">My account</a>
            <a href="javascript:void(0);" class="icon" onclick="dropDown()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <?= $content ?>
    </body>
</html>

<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function dropDown() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>