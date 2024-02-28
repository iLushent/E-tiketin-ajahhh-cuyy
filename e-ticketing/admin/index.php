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
                    <a href=""
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-600 rounded-md">Dashboard</a>
                    <a href="./maskapai/maskapai.php"
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-700 rounded-md">Maskapai</a>
                    <a href="./user/user.php"
                        class="block m-1 py-2 px-2 text-white hover:text-gray-50 hover:bg-indigo-800 bg-indigo-700 rounded-md">User</a>
                </div>
                <div class="">
                    <a href="./logout.php"
                        class="block m-1 py-2 px-2 mb-4 text-red-500 hover:bg-red-600 hover:text-white rounded-md">Log
                        out</a>
                </div>
            </nav>
        </div>
        <div class="flex-auto overflow-x-hidden bg-blue-100">
            <div class="p-6 ">
            </div>
        </div>
    </div>

</body>

</html>

</body>
</html>