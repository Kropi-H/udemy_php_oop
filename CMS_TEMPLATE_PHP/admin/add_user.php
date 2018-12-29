<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>


<?php

$user = new User;

  if(isset($_POST['update'])){

    if($user){

    // $user->id = $_POST['id'];
    $user->username =  $_POST['username'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->password = $_POST['password'];
    $user->alternate_text = $_POST['alternate_text'];
    // $user->user_image = $_POST['user_image'];
    $user->set_file($_FILES['user_image']);

    $user->save_user_and_image();

    }

  }

// }




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
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header">
                    <span  style="text-transform:uppercase;">add user</span>
                    <small>page</small>
                </h1>
                <!-- Start update form -->
                <form class="" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" class="form-control" type="text" name="username" value="">
                </div>
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input id="first_name" class="form-control" type="text" name="first_name" value="">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input id="last_name" class="form-control" type="text" name="last_name" value="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" class="form-control" type="password" name="password" value="">
                </div>
                <div class="form-group">
                  <label for="file">Upload Profile Foto</label>
                  <input id="file" type="file" name="user_image" value="">
                </div>
                <div class="form-group">
                  <label for="alternate_text">Alternate Text</label>
                  <input id="alternate_text" class="form-control" type="text" name="alternate_text" value="">
                </div>
                <div class="info-box-update pull-right ">
                    <input type="submit" name="update" value="Create" class="btn btn-primary btn-lg ">
                </div>
                  <!-- End update form -->
                </div>
                <!-- Start side info -->
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
