<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с
    помощью формы.</p>
<!--https://secure.php.net/manual/ru/function.strrev.php-->

<form action="9.php" method="post">
    <input type="text" name="a">
    <input type="submit" value="перевернуть">
</form>

<?php

$stroka = $_POST['a'];
function revers($stroka){
    $revers = strrev($stroka);
    echo $revers;
};

revers($stroka);