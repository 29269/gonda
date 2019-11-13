<html>
<head>
  <title id ="title">inlog</title>
  <meta charset="UTF-8">
  <meta name="description" content="Portfolio">
  <meta name="keywords" content="Portfolio">
  <meta name="author" content=" Gonda">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<header>
  <a href="home.html"><img src="final.png", width="10%", text-align= "center"></a>
</header>
<body>
<div class="about-text">

  <img src="de.png", width="50%">
<p>Welcome :<?php if($_POST["user"] == "gonda1986"){echo $_POST["user"];} else{echo(" Invalid");} ?></p>

<p>
<?php

 ?>
</p>
  ___________________________________
<p>Your email address is: <?php if($_POST["email"] == "hansklokswaifu1986@gmail.com") {echo $_POST["email"];} else{echo(" Invalid");} ?></p>
<p>You password is:<?php if($_post["password"] == "Hermann603"){echo $_post["password"];} else {echo (" Invalid");} ?></p>
</div>
</body>
</html>
