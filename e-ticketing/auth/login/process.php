<?php

require '../../koneksi.php';

$username = $_POST["username"];
$password =$_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "Admin"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["roles"] = $data["roles"];

        header('Location: ../../admin/');
    }else if($data["roles"] == "Petugas"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["roles"] = $data["roles"];

        header('Location: ../../petugas/');
    }else if($data["roles"] == "Penumpang"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["roles"] = $data["roles"];

        header('Location: ../../index.php/');
    }
}else{
    echo "
    <script type='text/javascript'>
        alert('Username atau password tidak terdaftar!')
        window.location = 'index.php'
    </script>
    ";
}

?>