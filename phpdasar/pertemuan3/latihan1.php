<?php

    // Strukutr Kendali (Pengulangan dan Pengkondisian)

    // Perulangan (For, While, do while, Foreach)

    // pengulangan for
    for( $i = 0; $i < 5; $i++ ){
        echo "Hello World! <br>";
    }

    //Pengulangan while (dia akan mengecek kondisi terlebih dahulu, jika true maka dicetak jika false tidak bisa)
    $i = 0;
    while($i < 5){
        echo "<br>Muhammad Leonza";
    $i++;
    }

    //Pengulangan do while (dia akan mencetak nilai sebelum mengecek kondisi perulangan, jika dia flase maka akan mencetak sekali)
    $i = 0;
    do{
        echo "<br>Salsabila Ramadhan";
        $i++;
    } while($i < 5);
?>