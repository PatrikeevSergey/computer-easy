<?php


// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом из 4 обычных файлов)
$res = mysql_query($connection, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysql_fetch_assoc($res);

echo '<p>Уникальных посетителей: ' . $row['hosts'] . '<br />';
echo 'Просмотров: ' . $row['views'] . '</p>';