<?php
    include __DIR__ . "/classes/users.php";

    $users = [
        new User ('Peter','Parker', 28, 'spider@gmail.com'),
        new User ('Tony','Stark', 42, 'iron@gmail.com'),
        new User ('Steve','Rodgers', 63, 'america@gmail.com')
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
            <h3><?php echo $user->name; ?></h3>
            <h3><?php echo $user->surname; ?></h3>
            <div><span><?php echo $user->age; ?></span></div>
            <div><span><?php echo $user->email; ?></span></div>
        <?php } ?>
    </body>
</html>