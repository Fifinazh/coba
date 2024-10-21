<?php
// echo
// print
// print_r
// var_dump
// echo ()

$nama = "Fitria Nur Azizah";
$phone = "08589384638";
$gender = ["L", "P"];
$age = 21;
$weight = 69.50;
$job_seeker = FALSE;
$student = TRUE;

// var_dump($umur);
// var_dump($weight);
// echo $nama . "<br>";
// echo $phone . "<br>";
// var_dump($gender);
// // echo "<br>";

$manusia = [
    [
        'name'=> 'Fitria Nur Azizah',
        'phone' => '085893864638',
        'gender' => ['L', 'P'],
        'age' => 21,
        'weight' => 69.50,
        'job_seeker' => FALSE,
        'student' => TRUE,
    ],
    [
        'name'=> 'Naura Fatimah',
        'phone' => '085893864638',
        'gender' => ['L', 'P'],
        'age' => 21,
        'weight' => 69.50,
        'job_seeker' => FALSE,
        'student' => TRUE,
    ],
];

function convertGender($gender) {
    if ($gender == 'P') {
        $gender_text = "Perempuan";
    } else {
        $gender_text = "Laki-Laki";
    }
    return $gender_text;
}

foreach ($manusia as $key => $value) {
    $kalimat = " Nama saya adalah " . $value['name']. " Jenis Kelamin ". convertGender($value['gender'][1]). "<br>";
    echo $kalimat;
}

function convertGender2()
{
    $gender = 'P';
    switch ($gender) {
        case 'L':
            $gender_text = "Laki-Laki";
            break;
        default:
            $gender_text = "Perempuan";
            break;
    }
    return $gender_text;
}
