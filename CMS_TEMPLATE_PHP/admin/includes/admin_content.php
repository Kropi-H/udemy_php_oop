    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span style="text-transform:uppercase;">Admin</span>
                    <small></small>
                </h1>
                
                <?php

//                // because we used static property for find_all_users function, so we can call find_all_users function like that
//                $result_set = User::find_all_users();
//                // and loop trought the result
//                while($row = mysqli_fetch_array($result_set)) {
//                
//                    echo $row['username'] . "<br>";
//                    
//                }
                
//                $found_user = User::find_user_by_id(3);
//                
//                $user = User::instantiation($found_user);
//                
//                echo $user->last_name;

//                $users = User::find_all_users();
//                foreach($users as $user){
//                    echo $user->username . "<br>";
//                }
                
                
                $found_user = User::find_user_by_id(1);
                echo $found_user->username;

                $auto = new Car;
                $auto->run();
//                echo var_dump($users);
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