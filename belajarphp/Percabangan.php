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
?>