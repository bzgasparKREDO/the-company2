<?php
session_start();
include "../classes/User.php";
// instantiate 
$user_obj = new User;
//  all_users will hold the record from the db
$all_users = $user_obj->getAllUsers();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>

<?php include "user-menu.php" ?>
    
<main class="row justify-content-center gx-0">
    <div class="col-6">
        <h2 class="text-center text-uppercase">user list</h2>
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>USERNAME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($all_users as $user){ ?>
                    <tr>
                        <td> <!-- check if user have a photo  -->
                        <?php if($user['photo']){ ?> 
                            <img src="../assets/images/<?= $user['photo'] ?>" 
                            alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo">
                        <?php }else{ ?> 
                            <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>
                        <?php } ?> 
                        </td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><!-- check if user is the one currently logged in  -->
                            <?php if($user['id'] == $_SESSION['id']){?>
                                <a href="edit-user.php" class="btn btn-outline-warning btn-sm">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="delete-user.php" class="btn btn-outline-danger btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </div>
</main>

</body>
</html>