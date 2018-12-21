    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span style="text-transform:uppercase;">Admin</span>
                    <small></small>
                </h1>
                <?php
                  $user = new User();
                  $user->username = "student";
                  $user->password = "654321";
                  $user->first_name = "Lazy";
                  $user->last_name = "Boban";

                  $user->create();

                  // $user = User::find_user_by_id(14);
                  // $user->delete();

                  // $user = User::find_user_by_id(9);
                  // $user->username = "bloodsuck";
                  // $user->update();

                  // $user =new User();
                  // $user->username = "Karl";
                  // $user->save();

                  // $user = User::find_user_by_id(16);
                  // $user->last_name = "Bug";
                  // $user->save();

                 ?>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
