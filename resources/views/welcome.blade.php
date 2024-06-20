<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Slider</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-bullet {
            background: #4F46E5;
        }

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }

        .hero-img {
            border-radius: 32%;
        }
        .light{
            --tw-bg-opacity: 1;
            --tw-text-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            color: rgba(0, 0, 0, var(--tw-text-opacity));

        }

        #homeSection {
            background: url('https://res.cloudinary.com/dght6acvp/image/upload/v1718799294/gradient_wopt1w.jpg');

        }

        .light .dark\:text-white {
            color: rgba(0, 0, 0, var(--tw-text-opacity)) !important;
        }

        .light .dark\:text-jacarta-200 {
            color: rgba(0, 0, 0, var(--tw-text-opacity)) !important;
        }
    </style>
</head>

<body>

    <div class="navbar light bg-base-100 px-10 shadow-lg fixed top-0 z-10 mb-10">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">
                <img src="https://res.cloudinary.com/dght6acvp/image/upload/v1718788322/1_xvgbwf.webp" class="w-20"
                    alt="Logo">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <div class="flex space-x-4">
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
                    <a href="#"
                        class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="flex gap-x-3 items-center">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item">8</span>
                        </div>
                    </div>
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span class="font-bold text-lg">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-block">View cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="menu light menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="min-h-screen mt-[70px]" id="homeSection">
        <section class="relative pb-10 pt-20 md:pt-16 h-1527 px-32">
            <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 block dark:hidden h-full">
                <img src="https://res.cloudinary.com/dght6acvp/image/upload/v1718799294/gradient_wopt1w.jpg" alt="gradient" class="h-full w-full" />
            </picture>

            <div class="container h-full mx-auto">
                <div class="grid h-full items-center gap-4 md:grid-cols-12">
                    <div class="col-span-6 flex h-full flex-col items-center justify-center py-10 md:items-start md:py-20 xl:col-span-4">
                        <h1 class="text-jacarta-700 font-bold font-display mb-6 text-center text-5xl md:text-left lg:text-6xl xl:text-7xl">
                            Buy, sell and collect NFTs.
                        </h1>
                        <p class="mb-8 text-center text-lg md:text-left">
                            The world's largest digital marketplace for crypto collectibles and non-fungible tokens
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-accent shadow-accent-volume hover:bg-accent-dark w-36 rounded-full py-3 px-8 text-center font-semibold text-white transition-all">
                                Upload
                            </a>
                            <a href="#" class="text-accent shadow-white-volume hover:bg-accent-dark hover:shadow-accent-volume w-36 rounded-full bg-white py-3 px-8 text-center font-semibold transition-all hover:text-white">
                                Explore
                            </a>
                        </div>
                    </div>

                    <!-- Hero image -->
                    <div class="col-span-6 xl:col-span-8">
                        <div class="relative text-center md:pl-8 md:text-right">
                            <img src="https://res.cloudinary.com/dght6acvp/image/upload/v1718800198/710YQnTH4DL._AC_UF1000_1000_QL80__x0odtz.jpg" alt="Hero Image" class="hero-img mt-8 inline-block w-72 rotate-[8deg] sm:w-full lg:w-[24rem] xl:w-[30rem]" />
                            <!-- <img src="https://res.cloudinary.com/dght6acvp/image/upload/v1718799382/3D_elements_rq7oi9.png" alt="3D Elements" class="animate-fly absolute top-0 md:-right-[10%]" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="products">
        <h1 class="text-jacarta-600 font-bold font-display mb-6 text-center text-5xl">
            Products
        </h1>
        <div class="mt-10">
            <div class="mx-auto sm:px-24 flex flex-row justify-around flex-wrap gap-10">
                @foreach ($products as $product)
                <div class="">
                    <div class="card w-96 bg-base-100 shadow-xl light">
                        <figure>
                            <img onclick="showModal({{ $product->id }}, '{{ $product->name }}', '{{ $product->description }}', '{{ asset('storage/' . $product->image) }}', {{ $product->price }})" src="{{ asset('storage/' . $product->image) }}" class="h-44 hover:scale-105 transition-all duration-200" alt="Karuppatty" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                            <b>$ {{ $product->price }}</b>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{-- Modal --}}
                <dialog id="my_modal_2" class="modal">
                    <div class="modal-box light">
                        <form method="dialog">
                            <button class="btn btn-sm btn-ghost absolute right-2 top-4">✕</button>
                            <h3 class="font-bold text-lg" id="modal-title"></h3>
                            <p class="py-4" id="modal-description"></p>
                            <img id="modal-image" class="h-44 mx-auto" alt="Product Image">
                            <b id="modal-price"></b>
                        </form>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                    </form>
                </dialog>
            </div>

            <script>
                function showModal(id, name, description, imageUrl, price) {
                    document.getElementById('modal-title').innerText = name;
                    document.getElementById('modal-description').innerText = description;
                    document.getElementById('modal-image').src = imageUrl;
                    document.getElementById('modal-price').innerText = "$ " + price;
                    document.getElementById('my_modal_2').showModal();
                }
            </script>

        </div>
    </section>

    <footer class="footer light p-10 bg-base-200 text-base-content">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>ACME Industries Ltd.<br>Providing reliable tech since 1992</p>
        </aside>
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
    </footer>

</body>

</html>
