<?php

require '../../koneksi.php';

$username =  htmlspecialchars($_POST["username"]);
$nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
$password = htmlspecialchars($_POST["password"]);
$roles = "Penumpang";

$query = mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$nama_lengkap', '$password', '$roles')");

if($query){
    echo "
        <script type ='text/javascript'>
            alert('Yay! register berhasil. Silahkan Login, ya!')
            window.location = '../login/'
        </script>
        ";
}else{
    echo "
    <script type ='text/javascript'>
        alert('Yah! register gagal. Silahkan cek kembali ya!')
        window.location = 'index.php'
    </script>
        ";
}

?>