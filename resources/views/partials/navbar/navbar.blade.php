<div style="background-color: #1d232a">
    <div class="navbar nav w-full xl:px-32 shadow-lg shadow-inherit" style="background-color: #1d232af0">
        <div class="navbar-start w-full flex justify-between items-center">
            <!-- Hamburger Menu -->
            <div class="dropdown z-50 xl:hidden">
                <div tabindex="0" role="button" class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-80">
                    <li class="font-semibold">
                        <a class="hover:bg-transparent hover:text-[#FF9A3F]" href="/">Home</a>
                    </li>
                    <li class="font-semibold">
                        <a class="hover:bg-transparent hover:text-[#FF9A3F]" href="/service">Services</a>
                    </li>
                    <li class="font-semibold">
                        <a class="hover:bg-transparent hover:text-[#FF9A3F]" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Logo -->
            <a href="/" class="text-4xl font-bold gap-2 nav-logo">
                <img src="{{ asset('storage/' . $client->id . '/' . $client->logo) }}" alt="Client Logo"
                class="img-fluid w-60 pe-2 mt-1" />
           
            </a>
        </div>


        <!-- Navbar Center (Hidden on smaller screens) -->
        <div class="navbar-center hidden 2xl:flex w-full justify-between items-center">
            <a class="text-4xl font-bold flex" href="/index.html">
                <img class="w-80 pe-2" src="img/logo.png" alt="" />
            </a>
            <ul class="menu menu-horizontal px-1 items-center">
                <li class="font-semibold">
                    <a class="hover:bg-transparent hover:text-[#FF9A3F]" href="index.html"
                        style="font-size: 16px">Home</a>
                </li>

                <li class="font-semibold">
                    <a class="hover:bg-transparent hover:text-[#FF9A3F]" style="font-size: 16px"
                        href="service.html">Services</a>
                </li>

                <li class="font-semibold">
                    <a class="font-semibold" href="contact.html">
                        <button class="btn-one" style="font-size: 14px; padding: 10px 24px">
                            Connect With Us
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
