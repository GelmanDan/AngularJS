<?php
// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'root', '')
    or die('No connection: ' . mysql_error());
echo 'connection succes';
mysql_select_db('angular_artical') or die('choose database failed');

// Выполняем SQL-запрос
$query = 'SELECT description, image, text, time, author FROM artical';
$result = mysql_query($query) or die('query failed: ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);
?>