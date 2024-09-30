<?php 
// function

// function date
    echo date("l, d-M-Y <br>");
    // echo die();
    // time
    // time dan date dapat digabungkan dalam suatu tampilan
    echo date("d M Y", time()+60*60*24*100); 
?> 

<?php 

// echo date("l", mktime(0,0,0,7,26,2002)); inputan dalam bentuk angka

echo date("l", strtotime("26 july 2002")) //inputan dalam bentuk teks/string

?>