<?php

// koneksi ke mySQL

$conn = mysqli_connect("localhost", "root", "", "db_smartphone");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }

    return $rows;

}

function tambah($tambah){
     // ambil data dari form sesuai name di label
     global $conn;
     $merek = htmlspecialchars($tambah["merek"]);
     $type = htmlspecialchars($tambah["type"]);
     $versi = htmlspecialchars($tambah["versi"]);
     $os = htmlspecialchars($tambah["os"]);
     
    // apakah ada gambar
    $gambar = upload(); 
    if(!$gambar){
        return false;

    }
 
     //tambah kan data ke database menggunakan query
     $query =  "INSERT INTO tb_smarphone VALUES 
               ('', '$merek', '$type', '$versi', '$os', '$gambar')";
 
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    
    $query =  "DELETE FROM tb_smarphone WHERE id = $id";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function ubah($tambah){
    // ambil data dari form sesuai name di label
    global $conn;

    $id = $tambah["id"];
    $merek = htmlspecialchars($tambah["merek"]);
    $type = htmlspecialchars($tambah["type"]);
    $versi = htmlspecialchars($tambah["versi"]);
    $os = htmlspecialchars($tambah["os"]);
    $gambarLama = htmlspecialchars($tambah["gambarLama"]);

    // cek apakah user memilih gambar baru atau lama
    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

    //tambah kan data ke database menggunakan query
    $query =  "UPDATE tb_smarphone SET
                merek = '$merek',
                type = '$type',
                versi = '$versi',
                os = '$os',
                gambar = '$gambar'
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM tb_smarphone 
                WHERE 
                merek LIKE '%$keyword%' OR
                type LIKE '%$keyword%' OR
                versi LIKE '%$keyword%' OR
                os LIKE '%$keyword%'";
    return query($query);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // apakah tidak ada gambar yang diupload
    if($error === 4){
        echo "
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah file yang diupload adalah gambar

    // format gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

    // explode mengubah string menjadi array
    $ekstensiGambar = explode('.', $namaFile);

    // end() mengambil array dari nilai yang paling akhir strtolower() mengambil format nilai dengan huruf kecil
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // in_array() mengecek apakah ada string di dalam array
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
       echo "
            <script>
                alert('file yang anda pilih bukan gambar');
            </script>
        ";
        return false;
    }


    // cek jika ukuran gambar melebihi kapasitas
    if($ukuranFile > 500000){
        echo "
            <script>
                alert('ukuran gambar terlalu besar');
            </script>
        ";
        return false;
    }

    // masukkan gambar yang diupload ke dalam folder gambar
    // membuat random nama gambar agar tidak ketimpa dengan gambar dengan nama file yg sama
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

}

function registrasi($data){
    global $conn;

    // mengambil data dari inputan form
    // strtolower mengubah string menjadi huruf kecil
    // stripslashes agar simbolslashes tidak diinputkan
    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower($data["email"]);
    // agar password di tb_users ada petik dua pemisah password
    $password = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek apakah username sudah ada sebelumnya apa belum 
    $result = mysqli_query($conn, "SELECT username FROM tb_users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
            alert('username sudah ada');

        </script>
        ";

        return false;
    }


    // cek apakah password dan konfirmasi password sesuai 
    if($password !== $password2){
        echo "
        <script>
            alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database

    mysqli_query($conn, "INSERT INTO tb_users VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);

}




?>