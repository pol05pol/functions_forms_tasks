<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

<?php

$dir = '/xampp/htdocs/';

function in_my_dir ($dir){
    $arr = scandir($dir);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
};

in_my_dir($dir);