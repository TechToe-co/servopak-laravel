<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    <!-- navbar start -->
    @include('partials.navbar.navbar')
    <!-- navbar end -->


    <!-- banner area start -->
    <div class="banner" id="home">
        <!-- Swiper -->
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
            <div class="parallax-bg" data-swiper-parallax="-23%"></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-2 flex justify-center text-left">
                    <div class="subtitle" data-swiper-parallax="-200">
                        <div class="">
                            <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                                Streamlining Your Truck <br />
                                Dispatch Needs
                            </h1>
                            <p class="pt-5 text-[16px] kumbh">
                                Servopak streamlines your truck dispatch needs with advanced
                                <br />
                                technology and expert support for greater efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-3 flex justify-center text-left">
                    <div class="subtitle" data-swiper-parallax="-200">
                        <div class="">
                            <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                                Your Reliable Truck Dispatch <br />
                                Partner
                            </h1>
                            <p class="pt-5 text-[16px] kumbh">
                                Count on Servopak for dependable and efficient truck dispatch
                                services, <br />
                                ensuring your shipments are handled with care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner area end -->
    <!-- working area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
        <div class="text-center">
            <p class="font-bold text-yellow">WORKING PROCESS</p>
            <h2 class="text-3xl xl:text-5xl font-bold pt-5 pb-32 fira">
                Streamlined Steps for Efficient <br />Transit Management
            </h2>
        </div>
        <div class="shadow-sm border-[#cbc9c9]">
            <div class="grid grid-cols-1 xl:grid-cols-4 md:grid-cols-2 gap-10">
                <div class="text-center pb-10 px-5">
                    <i
                        class="fa-regular fa-file-lines text-5xl bg-white mb-5 border px-8 py-6 rounded-full text-center text-yellow mt-[-60px] hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <a href="#">
                        <p class="text-2xl font-bold">Order Management</p>
                    </a>
                    <p class="pt-3">
                        Streamlining order handling for efficiency, accuracy, and customer
                        satisfaction.
                    </p>
                </div>
                <div class="text-center pb-10 px-5">
                    <i
                        class="fa-solid fa-warehouse mb-5 text-5xl bg-white border px-5 py-6 rounded-full text-center text-yellow mt-[-60px] hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <a href="#">
                        <p class="text-2xl font-bold">Distribution Center</p>
                    </a>
                    <p class="pt-3">
                        Central hub for receiving, storing, and distributing products
                        efficiently.
                    </p>
                </div>
                <div class="text-center pb-10 px-5">
                    <i
                        class="fa-solid fa-chalkboard mb-5 text-5xl bg-white border px-6 py-6 rounded-full text-center text-yellow mt-[-60px] hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <a href="#">
                        <p class="text-2xl font-bold">Order Progress</p>
                    </a>
                    <p class="pt-3">
                        Track your order progress in real-time for seamless delivery
                        updates.
                    </p>
                </div>
                <div class="text-center pb-10 px-5">
                    <i
                        class="fa-solid fa-box text-5xl bg-white mb-5 border px-7 py-6 rounded-full text-center text-yellow mt-[-60px] hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <a class="" href="#">
                        <p class="text-2xl font-bold">Product Delivery</p>
                    </a>
                    <p class="pt-3">
                        Ensuring timely, accurate delivery of products to your doorstep.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- working area end -->
    <!-- about area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
        <div class="grid xl:grid-cols-2 grid-cols-1 gap-20">
            <div class="relative z-0">
                <img class="" src="img/about-img.jpg" alt="" />
            </div>
            <div>
                <p class="font-bold text-yellow">ABOUT US</p>
                <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
                    Why choose us!
                </h2>
                <p class="pt-5 font-semibold kumbh">
                    Premier U.S. dispatching company, delivering exceptional service and
                    building lasting, reliable partnerships.
                </p>
                <p class="pt-3 kumbh">
                    Our vision is to become the leading dispatching company in the
                    United States, renowned for delivering exceptional service to
                    clients in the transportation industry. We aspire to be the top
                    choice for trucking companies, owner-operators, and drivers by
                    offering timely and efficient dispatching services, leveraging
                    advanced technology, and providing superior customer support. Our
                    commitment is to cultivate a culture of excellence and innovation,
                    empowering our team members to deliver unparalleled service to our
                    clients. We aim to establish enduring partnerships based on trust,
                    reliability, and professionalism, while driving growth and
                    profitability for our company.
                </p>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- service area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
        <div class="grid">
            <p class="font-bold text-yellow uppercase">Our Offered Services</p>
            <h2 class="text-3xl xl:text-5xl font-bold pt-5 xl:pb-32 pb-10 fira !leading-[1.3]">
                Comprehensive Solutions for <br />
                Your Needs
            </h2>
        </div>
        <div class="swiper swiperservice">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
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
                        <div>
                            <img class="w-full" style="min-height: 310px" src="img/trucks/power-only.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
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
                        <div>
                            <img class="w-full" style="min-height: 310px" src="img/trucks/dry-van.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
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
                        <div>
                            <img class="w-full" style="min-height: 310px" src="img/trucks/reefers.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
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
                        <div>
                            <img class="w-full" style="min-height: 310px" src="img/trucks/flat-bed.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
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
                        <div>
                            <img class="w-full" style="min-height: 310px" src="img/trucks/step-deck.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!--  digital freight area start -->

    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
        <div class="bg-[#000] py-10 text-white">
            <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-4 px-10 gap-5">
                <div class="content-box flex gap-5">
                    <div class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-boxes-packing text-3xl text-yellow"></i>
                    </div>
                    <div class="count-box">
                        <span class="count-text text-4xl" data-speed="3000" data-stop="20869">0</span>
                        <h6 class="text-gray font-medium">Successfully delivery</h6>
                    </div>
                </div>
                <div class="content-box flex gap-5">
                    <div class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-box text-3xl text-yellow"></i>
                    </div>
                    <div class="count-box">
                        <span class="count-text text-4xl" data-speed="3000" data-stop="660">0</span>
                        <h6 class="text-gray font-medium">Supply Engineers</h6>
                    </div>
                </div>
                <div class="content-box flex gap-5">
                    <div class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-truck-fast text-3xl text-yellow"></i>
                    </div>
                    <div class="count-box">
                        <span class="count-text text-4xl" data-speed="3000" data-stop="145">0</span>
                        <h6 class="text-gray font-medium">Countries Covered</h6>
                    </div>
                </div>
                <div class="content-box flex gap-5">
                    <div class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-boxes-stacked text-3xl text-yellow"></i>
                    </div>
                    <div class="count-box">
                        <span class="count-text text-4xl" data-speed="3000" data-stop="1200">0</span>
                        <h6 class="text-gray font-medium">Companies We Help</h6>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-20 px-10 py-10 my-10">
                <div class="">
                    <p class="font-bold text-yellow kumbh">
                        DIGITAL FREIGHT THAT SAVES YOUR TIME!
                    </p>
                    <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
                        Our Key Business Aims
                    </h2>
                    <p class="pt-5 kumbh">
                        Our key business aims focus on delivering exceptional value,
                        driving innovation, ensuring customer satisfaction, and achieving
                        sustainable growth across all our operations.
                    </p>
                    <p class="kumbh text-gray-700 pt-5">
                        We strive to enhance operational efficiency, foster long-term
                        partnerships, and maintain a commitment to quality and excellence
                        in every service we provide. Our dedication to continuous
                        improvement and adaptability
                    </p>
                    <ul class="pt-5">
                        <li class="text-[16px] kumbh">
                            <i
                                class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>100%
                            Customer Satisfaction, Exact Testing Practices.
                        </li>
                        <li class="text-[16px] kumbh pt-3">
                            <i
                                class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"></i>Highly
                            Trained Staff, Professional and Experienced
                        </li>
                    </ul>
                    <div class="pt-10">
                        <button class="btn-two">Connect With Us</button>
                    </div>
                </div>
                <div class="relative">
                    <img src="img/01.jpg" alt="" />
                    <div class="absolute bottom-14 left-10 bg-white text-black px-5 py-5 animate">
                        <p class="text-5xl font-bold text-yellow">3,550</p>
                        <p>Packaged Shipped in 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  digital freight area end -->
    <!-- testimonial area start -->
    <div
        class="bg-[#00000082] bg-blend-overlay bg-[url('../img/truck2.jpg')] h-auto 2xl:h-[120vh] bg-cover text-white relative">
        <div class="container py-10 mx-auto xl:px-40 px-3">
            <div class="grid xl:w-2/4 w-full lg:absolute xl:right-5 xl:top-[35%] md:top-[30%] top-[10%]">
                <div class="bg-[#000000e6] xl:py-20 md:py-20 xl:px-32 md:px-20 p-12">
                    <p class="font-bold text-yellow uppercase">CUSTOMER FEEDBACKS</p>
                    <h2 class="text-3xl xl:text-4xl font-bold pt-5 fira !leading-[1.3]">
                        Preferred by 1,000+ Clients
                    </h2>
                    <p class="pt-8 kumbh text-xl text-gray">
                        Preferred by 1,000+ clients, our services are trusted for their
                        reliability, efficiency, and exceptional quality, ensuring
                        customer satisfaction and lasting partnerships.
                    </p>
                    <div class="pt-8 flex">
                        <h6 class="text-[18px] font-bold">David Lee</h6>
                        <h6 class="text-[18px] font-bold ps-5 text-yellow">David Lee</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial area end -->
    <!-- newsletter area start-->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
        <div class="grid xl:grid-cols-2 grid-cols-1">
            <div class="bg-black py-10 px-5 xl:px-10 grid grid-cols-2 gap-4">
                <div>
                    <h6 class="text-xl font-bold text-white fira">
                        <i class="fa-solid fa-phone me-3 text-xl"></i>Call Us
                    </h6>
                    <p class="text-gray pt-5 xl:ps-8">
                        24/7 Support <br />
                        +(258) 629-32-238
                    </p>
                </div>
                <div class="">
                    <h6 class="text-xl font-bold text-white fira">
                        <i class="fa-solid fa-location-dot me-3 text-xl"></i>Our Location
                    </h6>
                    <p class="text-gray pt-5 xl:ps-8">125 Main City,USA</p>
                </div>
            </div>
            <div class="bg-yellow py-10 xl:px-20 md:px-24 px-5">
                <p class="text-3xl font-bold">Subscribe for News</p>
                <div class="join pt-5">
                    <div class="p-0">
                        <div class="p-0">
                            <input
                                class="input input-bordered join-item py-7 pe-0 md:pe-40 xl:pe-28 focus:border-none me-3 rounded-none"
                                placeholder="Email" />
                        </div>
                    </div>
                    <div class="indicator">
                        <button class="btn-three join-item border-none">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area end-->
    <!-- footer area start -->
    @include('partials.footer.footer_down')

    <!-- footer area end -->    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
