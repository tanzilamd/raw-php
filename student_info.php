<?php 
    $students = [
        [
            'name' => 'karim',
            'id' => uniqid(10)
        ],
        [
            'name' => 'rahim',
            'id' => uniqid(10)
        ],
        [
            'name' => 'khalid',
            'id' => uniqid(10)
        ],
        [
            'name' => 'sajid',
            'id' => uniqid(10)
        ]
    ];

    foreach ($students as $key => $student_info) {
        // echo json_encode($student_info)."<br>";
        ['name' => $name, 'id' => $id] = $student_info;
        echo "Name: ".$name."<br>";
        echo "Id: ".$id."<br> <br>";
        // echo "Name :".$student_info['name'];
        // echo '<br>';
        // echo "Id :".$student_info['id'];
        // echo '<br>';
    }
?>