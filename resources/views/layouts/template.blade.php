<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>BookEr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/images/book_icon.png') }}" type="image/png">
    <style>
        /* Navbar styling */
        .navbar {
            background: linear-gradient(45deg, #5908ae, #0457e8, #00cffd, #00ff73);
            color: black;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #03fec8 !important;
            font-size: 1.2rem;
            font-weight: bold;
            background-color: rgba(237, 49, 93, 0.522);
            transition: color 0.5s, font-size 0.4s;
            height: 48px;
        }

        /* Dropdown menu styling and initial state for animation */
        .dropdown-menu {
            background-color: #6a11cb;
            opacity: 0;
            transform: translateY(10px);
            visibility: hidden;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .dropdown-item:hover {
            background-color: #2575fc;
            color: #fff;
        }

        /* Toggler button hover effect */
        .navbar-toggler:hover {
            background-color: #6a11cb;
        }

        /* Container styling */
        .container {
            transition: background-color 0.5s ease;
            background-color: #13304d;
            border-radius: 8px;
            padding: 20px;
        }

        /* Body background */
        body {
            background: linear-gradient(135deg, #c1dfc4, #deecdd);
            min-height: 100vh;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-size: 1.8rem; font-weight: bold;">
            <span style="color: #ff0000;"><img src="{{ asset('assets/images/buku_icon.png')}}" alt="">Book</span><span style="color: #76ffc1;">Er</span>
        </a>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('return')}}">Main Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar Buku
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('buku.index')}}">Daftar Buku</a></li>
                        <li><a class="dropdown-item" href="{{ route('buku.create')}}">Tambah</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index')}}" class="nav-link active">Kelola Akun</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // Animation for dropdown menu
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownToggle = document.querySelectorAll('.dropdown');

        dropdownToggle.forEach(dropdown => {
            dropdown.addEventListener('mouseover', function () {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                dropdownMenu.style.opacity = "1";
                dropdownMenu.style.visibility = "visible";
                dropdownMenu.style.transform = "translateY(0)";
            });
            dropdown.addEventListener('mouseleave', function () {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                dropdownMenu.style.opacity = "0";
                dropdownMenu.style.visibility = "hidden";
                dropdownMenu.style.transform = "translateY(10px)";
            });
        });
    });
</script>

@stack('script')
</body>
</html>