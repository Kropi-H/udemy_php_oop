    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span style="text-transform:uppercase;">Admin</span>
                    <small></small>
                </h1>
                <?php
                  // $user = new User();
                  // $user->username = "bloody";
                  // $user->password = "666";
                  // $user->first_name = "Johny";
                  // $user->last_name = "Dracula";
                  //
                  // $user->create();

                  $user = User::find_user_by_id(10);

                  $user->delete();

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
