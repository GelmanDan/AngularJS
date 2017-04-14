<?php
// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'root', '')
    or die('No connection: ' . mysql_error());
//echo 'connection succes';
mysql_select_db('angular_artical') or die('choose database failed');

?>