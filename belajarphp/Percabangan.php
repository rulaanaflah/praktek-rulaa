<?php
// Percabangan If
    $total_belanja = 150000;

if($total_belanja > 100000){
    echo "<p>Anda dapat hadiah!</p>";
}

// Percabangan If/Else
    $umur = 13;

    if ($umur < 18 ){
        echo "<p>Kamu tidak boleh membuka situs ini!</p>";
    } else {
        echo "<p>Selamat datang di website kami!</p>";
    }
    $umur = 19;

    if ($umur < 18 ){
        echo "<p>Kamu tidak boleh membuka situs ini!</p>";
    } else {
        echo "<p>Selamat datang di website kami!</P>";
    }

 // Percabangan If/Elseif/Else
    $nilai = 88;

    if ($nilai > 90) {
        $grade = "A+";
    } elseif($nilai > 80){
        $grade = "A";
    } elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai > 60){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";

// Percabangan Switch/Case
    $level = 3;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
}
?>