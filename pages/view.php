<?php
$test = new usersModel();
$test->getUsers();
$test->userId;
var_dump($test->getUser());
echo '<hr>';
$arrView = userView($getUserById);
$viewUser = array_combine($keysUserView, $arrView);
//var_dump($viewUser);





?>
<table class="show_users">
    <tbody>
    <tr class="table_row">
        <th>Логин:</th>
        <td><?= $viewUser['login']?></td>
    </tr>
    <tr class="table_row">
        <th>Имя:</th>
        <td><?= $viewUser['name']?></td>
    </tr>
    <tr class="table_row">
        <th>Фамилия:</th>
        <td><?= $viewUser['surname']?></td>
    </tr>
    <tr class="table_row">
        <th>Email:</th>
        <td><?= $viewUser['email']?></td>
    </tr>
    <tr class="table_row">
        <th>Адрес:</th>
        <td><?= $viewUser['address']?></td>
    </tr>
    </tbody>
</table>


