<?php include("includes/header.php"); ?>
<?php
if($session->is_signed_in()){
    redirect("index.php");
}

if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


// Method to check database user

$user_found = User::verify_user($username, $password);


if($user_found){
    $session->login($user_found);
    redirect("index.php");

    } else {

    $the_message = "your password or username are incorrect";

    }

} else {

    $username = "";
    $password = "";
    $the_message = "you have to login first";
}


?>

<div class="col-md-4 col-md-offset-3">

<h3 class="bg-danger text-center "><?php echo strtoupper($the_message); ?></h3>

<form id="login-id" action="" method="post">

<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >

</div>

<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">

</div>


<div class="form-group">
<input type="submit" name="submit" value="submit" class="btn btn-primary">

</div>
<div class="form-group">
    <a href="../index.php" type="submit" name="home" value="home" class="btn btn-info">home</a>

</div>

</form>
