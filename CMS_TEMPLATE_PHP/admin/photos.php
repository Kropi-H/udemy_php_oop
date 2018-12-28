<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php $photos = Photo::find_all(); ?>

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
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span  style="text-transform:uppercase;">photos</span>
                    <small></small>
                </h1>
                <!-- Start of table -->
                <div class="col-md-12">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>THUMBNAIL</th>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DESCTIPTION</th>
                        <th>FILENAME</th>
                        <th>TYPE</th>
                        <th>SIZE</th>
                      </tr>
                    </thead>
                    <tbody>
          <?php foreach ($photos as $photo) : ?>
                      <tr>
                        <td><img src="<?php echo $photo->picture_path(); ?>" class="img-fluid img-thumbnail" /></td>
                        <td><?php echo $photo->id; ?></td>
                        <td><?php echo $photo->title; ?></td>
                        <td><?php echo substr($photo->description,0,20)." ..."; ?></td>
                        <td><?php echo $photo->filename; ?></td>
                        <td><?php echo $photo->type; ?></td>
                        <td><?php echo $photo->size; ?></td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                  <!-- End of table -->
                </div>


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>
