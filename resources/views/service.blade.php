<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')


</head>

<body>
    <!-- top head start -->
    <div class="container mx-auto xl:px-32 py-8 bg-hasan hidden 2xl:block">
        <div class="grid grid-cols-12">
            <div class="col-span-4">
                <a class="text-4xl font-bold flex gap-2" href="#">
                    <img class="w-12 h-10 pe-2" src="img/faveicon.png" alt="" />
                    ServoPak
                </a>
            </div>
            <div class="col-span-8 ml-auto">
                <div class="flex gap-20">
                    <div class="flex border p-2">
                        <div>
                            <i
                                class="fa-solid fa-phone bg-yellow px-2 py-2 me-2 hover:text-white transition-all duration-300"></i>
                        </div>
                        <a class="hover:text-yellow" href="#">125-3654-7895</a>
                    </div>
                    <div class="flex border p-2">
                        <div>
                            <i
                                class="fa-solid fa-envelope bg-yellow px-2 py-2 me-2 hover:text-white transition-all duration-300"></i>
                        </div>
                        <a class="hover:text-yellow" href="#">yourmail@gmail.com</a>
                    </div>
                    <div class="flex border p-2">
                        <div>
                            <i
                                class="fa-solid fa-location-dot bg-[#ffc107] px-2 py-2 me-2 hover:text-white transition-all duration-300"></i>
                        </div>
                        <a class="hover:text-[#ffc107]" href="#">125 Main City,USA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top head end -->

    <!-- navbar start -->
    @include('partials.navbar.navbar')

    <!-- navbar end -->
    <!-- banner area start -->
    <div
        class="bg-[#00000082] bg-blend-overlay bg-[url('../img/truck2.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white">
        <div class="container mx-auto">
            <div class="text-center py-32">
                <p class="text-6xl font-bold fira">Service</p>
                <div class="flex justify-center pt-3">
                    <a class="text-yellow hover:text-white transition-all duration-300 font-semibold"
                        href="#">Home</a>

                    <p class="font-semibold">
                        <i class="fa-solid fa-angle-right px-2"></i>Service
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- service area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
        <div class="grid">
            <p class="font-bold text-yellow uppercase">Our Offered Services</p>
            <h2 class="text-3xl xl:text-5xl font-bold pt-5 xl:pb-32 pb-10 fira !leading-[1.3]">
                Comprehensive Solutions for <br />
                Your Needs
            </h2>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-10">
            <div class="">
                <div class="xl:flex md:flex block">
                    <div class="bg-[#fbf9f9] px-5 py-5">
                        <p class="text-2xl font-bold fira">Power Only</p>
                        <p class="kumbh pt-3">
                            Flexibility and cost savings with power only trucking.
                        </p>
                        <ul class="pt-5">
                            <li class="text-[16px] kumbh">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Flexibility
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Lower
                                Maintenance Costs
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Improved
                                Cash Flow
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Reduced
                                Liability
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <img class="w-full hover:scale-[1.1] transition-all duration-300" style="min-height: 310px"
                            src="img/trucks/power-only.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="">
                <div class="xl:flex md:flex block">
                    <div class="bg-[#fbf9f9] px-5 py-5">
                        <p class="text-2xl font-bold fira">Dry Van</p>
                        <p class="kumbh pt-3">
                            Secure and versatile transportation for a wide range of goods.
                        </p>
                        <ul class="pt-5">
                            <li class="text-[16px] kumbh">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Security
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>
                                Versatility
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Protection
                                from Elements
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Wide
                                Availability
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <img class="w-full hover:scale-[1.1] transition-all duration-300" style="min-height: 310px"
                            src="img/trucks/dry-van.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="">
                <div class="xl:flex md:flex block">
                    <div class="bg-[#fbf9f9] px-5 py-5">
                        <p class="text-2xl font-bold fira">Reefer</p>
                        <p class="kumbh pt-3">
                            Temperature-controlled transportation for perishable goods.
                        </p>
                        <ul class="pt-5">
                            <li class="text-[16px] kumbh">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Long-Distance
                                Suitability
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Regulatory
                                Compliance
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Reduced
                                Risk of Damage
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Good
                                Inventory Management
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <img class="w-full hover:scale-[1.1] transition-all duration-300" style="min-height: 310px"
                            src="img/trucks/reefers.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="">
                <div class="xl:flex md:flex block">
                    <div class="bg-[#fbf9f9] px-5 py-5">
                        <p class="text-2xl font-bold fira">Flat Bed</p>
                        <p class="kumbh pt-3">
                            Versatile and efficient transportation for oversized and
                            irregularly shaped cargo.
                        </p>
                        <ul class="pt-5">
                            <li class="text-[16px] kumbh">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Easy
                                Loading and Unloading
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Adaptability
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Accessibility
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Customizable
                                Securing
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <img class="w-full hover:scale-[1.1] transition-all duration-300" style="min-height: 310px"
                            src="img/trucks/flat-bed.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="">
                <div class="xl:flex md:flex block">
                    <div class="bg-[#fbf9f9] px-5 py-5">
                        <p class="text-2xl font-bold fira">Step Deck</p>
                        <p class="kumbh pt-3">
                            Efficient transportation for oversized and tall cargo.
                        </p>
                        <ul class="pt-5">
                            <li class="text-[16px] kumbh">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Flexibility
                                for Diverse Cargo
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Low-Profile
                                Loading
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Optimal
                                Cargo Securing
                            </li>
                            <li class="text-[16px] kumbh pt-3">
                                <i
                                    class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Improved
                                Clearance
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <img class="w-full hover:scale-[1.1] transition-all duration-300" style="min-height: 310px"
                            src="img/trucks/step-deck.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_down')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
