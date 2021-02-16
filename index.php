<?php
    include __DIR__ . "/classes/users.php";
    include __DIR__ . "/classes/person.php";

    $users = [
        new User ('Spiderman','spider@gmail.com','abc123'),
        new User ('Ironman','iron@gmail.com','abc123'),
        new User ('Capitan America','america@gmail.com','abc123')
    ];
    // var_dump($users);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php oop 2</title>
    </head>
    <body>
        <?php foreach ($users as $user) { ?>
            <h3><?php echo $user->user_name; ?></h3>
            <div><span><?php echo $user->email; ?></span></div>
            <div><span><?php echo $user->password; ?></span></div>
        <?php } ?>
    </body>
</html>