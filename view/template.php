<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" /> 
        <link href="bootstrap.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="#news">Gallery</a>
            <a href="#contact">Sign in</a>
            <a href="#about">Sign up</a>
            <a href="#about">My account</a>
            <a href="javascript:void(0);" class="icon" onclick="dropDown()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <?= $content ?>
    </body>
</html>