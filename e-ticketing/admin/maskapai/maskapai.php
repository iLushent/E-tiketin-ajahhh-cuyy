<?php

session_start();
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!')
        window.location = '../auth/login/'
    </script>
";
}

$pengguna = query("SELECT * FROM maskapai");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex font-['Poppins']">
        <div class="w-64 bg-indigo-700 h-screen flex flex-col p-1">
            <div class="flex items-center justify-center mt-6">
            </div>
            <nav class="mt-6  h-full flex flex-col">
                <div class="h-full">
                    <a href="../index.php"
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-700 rounded-md">Dashboard</a>
                    <a href="./maskapai.php"
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-600 rounded-md">Maskapai</a>
                    <a href="../user/user.php"
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-700 rounded-md">User</a>
                </div>
                <div class="">
                    <a href="/logout"
                        class="block m-1 py-2 px-2 mb-4 text-red-500 hover:bg-red-600 hover:text-white rounded-md">Log
                        out</a>
                </div>
            </nav>
        </div>

        <div class="flex-auto overflow-x-hidden bg-blue-100">
            <div class="p-6">
                <div class="">
                    <h1 class="text-2xl font-semibold text-blue-950 mb-4">Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
                </div>
                <div>
                    <a href="/produk/create" class="bg-indigo-500 px-4 py-2 rounded-lg">Tambah Maskapai</a>
                </div>

                <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg mt-6">
                    <thead>
                        <tr>
                            <th class="border py-2 px-4 border-b">NO.</th>
                            <th class="border py-2 px-4 border-b">Logo</th>
                            <th class="border py-2 px-4 border-b">Nama Maskapai</th>
                            <th class="border py-2 px-4 border-b">Kapasitas</th> 
                            <th class="border py-2 px-4 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $no = 1; ?> 
                    <?php foreach($pengguna as $data) : ?>

                            <tr>
                                <td class="border py-2 px-4 border-b"><?= $no; ?></td>
                                <td class="border py-2 px-4 border-b flex items-center justify-center"><img src="../../aset /<?= $data["logo_maskapai"]; ?>" class="w-20" alt="" ></td>
                                <td class="border py-2 px-4 border-b"><?= $data["nama_maskapai"]; ?></td>
                                <td class="border py-2 px-4 border-b"><?= $data["kapasitas"]; ?></td> 
                        
                                <td class="flex  py-2px-2 border-b justify-around items-center">
                                    <a href="./edituser.php"
                                        class="fa-solid fa-pen-to-square text-md bg-indigo-500 text-white py-2 px-4 hover:text-black rounded-md"></i>Edit</a>
                                    <form action="/produk/{{ $p->id }}" class=" inline-block" method="post">
                                        <button type="submit"
                                            class="fa-solid fa-trash text-md bg-red-600 py-2 px-4 text-black hover:text-white rounded-md"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>  
                    </tbody>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>
</body>

</html>