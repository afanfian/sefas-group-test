<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        /* CSS untuk dropdown */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 100px;
            z-index: 1;
        }

        .dropdown-menu a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="/profile" class="text-white text-lg font-bold">
                    <img src="/logo.png" alt="Logo" width="80" height="80">
                </a>
            </div>
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Activites</a></li>
                    <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Relationships</a></li>
                    <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Transaction</a></li>
                    <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Inventory</a></li>
                    <li class="dropdown">
                        <a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Settings</a>
                        <div class="dropdown-menu">
                            <a href="#">Users</a>
                            <a href="#">Roles</a>
                            <a href="#">Employee</a>
                        </div>
                    </li>
                    <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Report</a></li>
                </ul>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-500 p-4">
        <ul class="flex flex-col space-y-4">
            <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Activites</a></li>
            <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Relationships</a></li>
            <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Transaction</a></li>
            <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Inventory</a></li>
            <li class="dropdown">
                <a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Settings</a>
                <div class="dropdown-menu">
                    <a href="#" class="hover:bg-orange-500">Users</a>
                    <a href="#">Roles</a>
                    <a href="#">Employee</a>
                </div>
            </li>
            <li><a href="#" class="hover:font-bold hover:bg-orange-500 px-2 py-2 rounded-lg text-white">Report</a></li>
        </ul>
    </div>

    @yield('content')

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
