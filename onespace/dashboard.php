<?php
//login.php
include("admin/inc/connect.php");
if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

//$name=$_COOKIE["type"];
//echo "Welcome "."$name";
//echo "$name";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="css/style.css">

<script>
$(document).ready( function() {
    $("#load").on("click", function() {
      $("form").hide();
        $("#browse").load("browser.html");
    });
    });
     </script>

</head>
<body>
<div class="navbar">
  <?php?>
  <a href="login.php" name="logout">logout</a>
      <?php setcookie("type",'',time()-700);
?>
  
  <a href="#news">Account</a>
  <a href="#contact">Any Issue</a>
  <a href="#contact">Refer Friend</a>
  <a href="#contact">Catalog</a>
  <a href="#catalog" id="load">Browser Catalog</a>
  <a href="#contact">Project Info</a>
</div>
<div class="wel">
<?php
        $name=$_COOKIE["type"];
  echo "Welcome "."$name";
        ?>
</div>

<div class="form" id="form">
<form >
<fieldset>
    Name:<br><input type="text" name="name" class="text form-control input-sm"><br>
    Email:<br><input type="text" name="email" class="text form-control input-sm"><br>
    Mobile:<br><input type="text" name="mobile" class="text form-control input-sm"><br>
    City:<br><select name="city" class="text form-control input-sm" style="width:200px;"><br>
    <option value="ahmedabad">Ahmedabad</option>
    <option value="ahmednagar">Ahmednagar</option>
    <option value="banglore">Bangalore</option>
    <option value="gujrat">Gujrat</option>
    </select><br>
    Pincode:<br><input type="text" name="pin" class="text form-control input-sm"></br>
    Scope:<br><select name="scope" class="form-control" style="width:200px;">
    <option value="home design">Full Home Design</option>
    <option value="kitchen">Kitchen Design</option>
    </select></br>
        <button type="submit" class="btn btn-block btn-main">Submit</button>
</fieldset>
</form>
</div>
<div class="content" id="browse"></div>
</body>
</html>
