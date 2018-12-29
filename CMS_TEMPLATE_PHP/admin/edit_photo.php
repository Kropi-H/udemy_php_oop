<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php // $photos = Photo::find_all(); ?>

<?php

if(empty($_GET['id'])){
  redirect("../photos.php");
} else {
  $photo = Photo::find_by_id($_GET['id']);

  if(isset($_POST['update'])){

    if($photo){

    $photo->title = $_POST['title'];
    $photo->caption =  $_POST['caption'];
    $photo->alternate_text = $_POST['alternate_text'];
    $photo->description = $_POST['description'];

    $photo->save();

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
                    <span  style="text-transform:uppercase;">edit photo</span>
                    <small>page</small>
                </h1>
                <!-- Start update form -->
                <form class="" action="" method="post">

                <div class="form-group">
                  <label for="title">File name</label>
                  <input id="title" class="form-control" type="text" name="title" value="<?php echo $photo->title; ?>">
                </div>
                <div class="form-group">
                  <label for="alternate_text">Image</label>
                  <a href="#"><img src="<?php echo $photo->picture_path(); ?>" alt="<?php echo $photo->alternate_text; ?>" class="img-rounded center-block img-thumbnail"></a>
                </div>
                <div class="form-group">
                  <label for="alternate_text">Alternate text</label>
                  <input id="alternate_text" class="form-control" type="text" name="alternate_text" value="<?php echo $photo->alternate_text; ?>">
                </div>
                <div class="form-group">
                  <label for="caption">Caption</label>
                  <input id="caption" class="form-control" type="text" name="caption" value="<?php echo $photo->caption; ?>">
                </div>
                <div class="form-group">
                  <label for="editor">Description</label>
                  <textarea id="editor" class="form-control" name="description" rows="8" cols="80"><?php echo $photo->description; ?></textarea>
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
                            Photo Id: <span class="data photo_id_box"><?php echo $photo->id; ?></span>
                          </p>
                          <p class="text">
                            Filename: <span class="data"><?php echo $photo->filename; ?></span>
                          </p>
                         <p class="text">
                          File Type: <span class="data"><?php echo $photo->type; ?></span>
                         </p>
                         <p class="text">
                           File Size: <span class="data"><?php echo $photo->size; ?> kB</span>
                         </p>
                      </div>
                      <div class="info-box-footer clearfix">
                        <div class="info-box-delete pull-left">
                            <a  href="delete_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger btn-lg ">Delete</a>
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
