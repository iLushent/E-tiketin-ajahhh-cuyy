<?php
session_start();
require 'function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id' ")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/login.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data user berhasil diedit');
                window.location = 'user.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data user gagal diedit');
            // window.location = 'edituser.php?id=$id'
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50">
    <div class="p-6">
        <h1 class="text-2xl font-semibold text-gray-800">User</h1>
        <form action="" method="post" enctype="multipart/form-data">
            
        <div class="mt-6">

            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">
            
            <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
            <input type="text" id="username" name="username" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500 " value="<?= $user["username"]; ?>">

            <label for="nama_lengkap" class="block text-sm font-medium text-gray-600">Nama lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500 " value="<?= $user["nama_lengkap"]; ?>">

            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500" value="<?= $user["password"]; ?>">

            <label for="roles" class="block text-sm font-medium text-gray-600">Role</label>
            <select id="roles" name="roles" class="mt-1 p-2 mb-4 border rounded-md w-full focus:outline-none focus:border-blue-500">
                <option value="Admin" <?= $user["roles"]  == 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="Petugas" <?= $user["roles"]  == 'Petugas' ? 'selected' : '' ?>>Petugas</option>
                <option value="Penumpang" <?= $user["roles"]  == 'Penumpang' ? 'selected' : '' ?>>Penumpang</option>
            </select>

            <button type="submit" name="kirim" class="mt-4 mb-2 rounded-lg inline-block text-white text-base py-2 px-4 bg-blue-600">Edit User</button>

        </div>
        </form>
    </div>

</body>
</html>