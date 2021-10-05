<?php 
    $names = [
        'name1'=> 'rofiq',
        'name2'=> 'sofiq',
        'name3'=> 'rahim',
        'name4'=> 'karim',
        'name5'=> 'bojlu'
    ];

    foreach ($names as $key => $value) {
        $$key = $value;
    }
    echo $name1."<br>";
    echo $name2."<br>";
    echo $name3."<br>";
    echo $name4."<br>";
    echo $name5."<br>";
?>