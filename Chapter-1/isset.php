<?php
    $name = '';
    $name2 = null;
    echo 'checking $name1 :  ';
    var_dump(isset($name1));
    echo '<br>';
    echo 'checking $name2 : ';
    var_dump(isset($name2));
    echo '<br>';
    echo 'checking undeclared variable $name: ';
    var_dump(isset($name3));
?>
