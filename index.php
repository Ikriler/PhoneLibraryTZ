<?php
    require_once("scripts/contacts_service.php");

    $contacts = get_contacts() ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Главная</title>
</head>
<body>
    <table>
        <tr>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Удаление</th>
        </tr>
        <?php foreach($contacts as $contact):?>
        <tr>
            <td><?=$contact["name"]?></td>
            <td><?=$contact["phone"]?></td>
            <td>
                <form action="actions/remove_contact.php" method="post">
                    <input type="hidden" name="name" value="<?=$contact["name"]?>">
                    <input type="hidden" name="phone" value="<?=$contact["phone"]?>">
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <a type="button" href="add_contact_form.php">Добавить контакт</a>
</body>
</html>