<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php // $photos = Photo::find_all(); ?>

<?php
$message = "";

if(empty($_GET['id'])){
  redirect("users.php");
} else {
  $user = User::find_by_id($_GET['id']);

  if(isset($_POST['update'])){

    if($user){

    $user->username =  $_POST['username'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $message = "updated!";
    $user->save();

    }
  }
}
?>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

<?php include("includes/top_nav.php");?>
    <!-- Navigation -->

<?php include("includes/side_nav.php"); ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    </nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">
                    <span  style="text-transform:uppercase;">edit user</span>
                    <small><?php echo $user->username ." ".$message ?></small></small>
                </h1>
                <!-- Start update form -->
                <form class="" action="" method="post">
                  <p class="text ">
                    User Id: <span class="data photo_id_box"><?php echo $user->id; ?></span>
                  </p>
                <div class="form-group">
                  <label for="alternate_text">Image</label>
                  <a href="#"><img src="<?php echo $user->image_user_placeholder(); ?>" alt="<?php ?>" class="img-rounded center-block img-thumbnail"></a>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" class="form-control" type="text" name="username" value="<?php echo $user->username; ?>">
                </div>
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input id="first_name" class="form-control" type="text" name="first_name" value="<?php echo $user->first_name; ?>">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input id="last_name" class="form-control" type="text" name="last_name" value="<?php echo $user->last_name; ?>">
                </div>
                  <!-- End update form -->
                </div>
                <!-- Start side info -->
                <div class="col-md-4" >
                    <div  class="photo-info-box">
                        <div class="info-box-header">
                           <h4>Save <span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                        </div>
                    <div class="inside">
                      <div class="box-inner">
                         <p class="text">
                           <span class="glyphicon glyphicon-calendar"></span> Uploaded on: April 22, 2030 @ 5:26
                          </p>
                          <p class="text ">
                            User Id: <span class="data photo_id_box"><?php echo $user->id; ?></span>
                          </p>
                          </div>
                      <div class="info-box-footer clearfix">
                        <div class="info-box-delete pull-left">
                            <a  href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger btn-lg ">Delete</a>
                        </div>
                        <div class="info-box-update pull-right ">
                            <input type="submit" name="update" value="Update" class="btn btn-primary btn-lg ">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Stop side info -->


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>
