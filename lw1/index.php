<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p {
            margin: 10px;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <?php

    require 'user.php';
    require 'userservise.php';

    $users = [
        new User('name', '454', '1855-01-15'),
        new User('andrey', '555', '1999-12-21'),
        new User('danil', '569', '2005-12-31')
    ];



    if ($_POST["sort"]) {

        $sort = $_POST["sort"];
        $flag = $_POST["flag"] === "true";

        if ($sort === "username") {
            $users = UserService::sortByUsername($users, $flag);
        } elseif ($sort === "birthday") {
            $users = UserService::sortByBirthday($users, $flag);
        }
    }
    ?>


    <form method="post" action="">
        <label for="sort">Сортировать по:</label>
        <select name="sort" id="sort">
            <option value="username">Имени</option>
            <option value="birthday">Дате рождения</option>
        </select>
        <input type="radio" name="flag" value="true"> По возрастанию
        <input type="radio" name="flag" value="false"> По убыванию
        <input type="submit" value="Сортировать">
    </form>


    <?php foreach ($users as $user) : ?>
        <div style="display: flex; justify-content: center;">
            <p><?php echo $user->username; ?></p>
            <p><?php echo $user->password; ?></p>
            <p><?php echo $user->birthday->format('Y-m-d'); ?></p>
        </div>
        <hr>
    <?php endforeach ?>

</body>

</html>