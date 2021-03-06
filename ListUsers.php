<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users List - CRUDLearn</title>
    </head>
    <body>
        <?php
        require __DIR__ . '/vendor/autoload.php';
        use App\UserDao;

        include "topbar.php"; ?>
        
        
        <center>
            <div class="height-100 bg-light" style="width: 80%;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Options</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                            $DAO = new UserDao();
                            $list = $DAO->list();
                            for($i=0;$i<count($list);$i++) {
                                $user = $list[$i];
                        ?>
                        <!--Users Table-->
                        <tr>
                            <td><?php echo($user->GetId()); ?></td>
                            <td><?php echo($user->GetUsername()); ?></td>
                            <td><?php echo($user->GetName()); ?></td>
                            <td><?php echo($user->GetEmail()); ?></td>
                            <td><?php echo($user->GetPhone()); ?></td>
                            <!-- Edit and Delete buttons by id -->
                            <td><a href='./EditUser.php?id=<?php echo($user->GetId()); ?>'><i class='bx bx-pencil nav_icon'></i> Edit</a> </td>
                            <td><a href='./DelUser.php?id=<?php echo($user->GetId()); ?>'><i class='bx bx-pencil nav_icon'></i> Delete</a> </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </center>
    </body>
</html>