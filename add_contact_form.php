<?php
    require_once("scripts/flash_message.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Добавление контакта</title>
</head>
<body>
    <a href="index.php">Назад</a>
    <br/>
    <p>
        <?php show_message();?>
    </p>
    <form action="actions/add_contact.php" method="post">
        <label>Имя</label>
        <input type="text" name="name"/>
        <br/>
        <label>Телефон</label>
        <input type="tel" name="phone" placeholder="88005553535" pattern="[0-9]{11}"/>
        <br/>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>