<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>
<!--http://ru.php.net/manual/ru/function.array-count-values.php-->

<form action="10.php" method="post">
    <input type="text" name="a">
    <input type="submit" value="отправить">
</form>

<?php
$arr = $_POST['a'];

function count_unik($arr){
    $slova = explode(" ", $arr);
    $count = array_count_values($slova);
    echo "<pre>";
    print_r($count);
    echo "</pre>";
};

count_unik($arr);

?>

