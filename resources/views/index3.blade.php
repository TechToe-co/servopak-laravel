<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TransitFlow | Freight Solutions HTML Template</title>
    <link rel="shortcut icon" href="img/faveicon.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Italianno&family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Italianno&family=Jost:ital,wght@0,100..900;1,100..900&family=Kumbh+Sans:wght@100..900&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="src/output.css" />
    <link rel="stylesheet" href="src/style.css" />
  </head>
  <body>
    <!-- top head start -->
    <div class="container mx-auto xl:px-32 py-8 bg-hasan hidden 2xl:block">
      <div class="grid grid-cols-12">
        <div class="col-span-4">
          <a class="text-4xl font-bold flex gap-2" href="#">
            <img class="w-12 h-10 pe-2" src="img/faveicon.png" alt="" />
            TransitFlow
          </a>
        </div>
        <div class="col-span-8 ml-auto">
          <div class="flex gap-20">
            <div class="flex border p-2">
              <div>
                <i
                  class="fa-solid fa-phone bg-yellow px-2 py-2 me-2 hover:text-white transition-all duration-300"
                ></i>
              </div>
              <a class="hover:text-yellow" href="#">125-3654-7895</a>
            </div>
            <div class="flex border p-2">
              <div>
                <i
                  class="fa-solid fa-envelope bg-yellow px-2 py-2 me-2 hover:text-white transition-all duration-300"
                ></i>
              </div>
              <a class="hover:text-yellow" href="#">yourmail@gmail.com</a>
            </div>
            <div class="flex border p-2">
              <div>
                <i
                  class="fa-solid fa-location-dot bg-[#ffc107] px-2 py-2 me-2 hover:text-white transition-all duration-300"
                ></i>
              </div>
              <a class="hover:text-[#ffc107]" href="#">125 Main City,USA</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- top head end -->

    <!-- navbar start -->
    @include('partials.transit_nav')
    <!-- navbar end -->
    
    <!-- banner area start -->
    <div class="banner3" id="home">
      <!-- Swiper -->
      <div
        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
        class="swiper mySwiper"
      >
        <div class="parallax-bg" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide slider-4 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Efficient Transit Solutions <br />
                  for Urban Mobility
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  Discover how TransitFlow transforms urban mobility with
                  cutting-edge transit solutions, <br />enhancing efficiency,
                  reducing congestion, and improving commuter experiences.
                </p>
                <div class="pt-10">
                  <button class="btn-one">Get a Quote</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide slider-5 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Innovative Transit Solutions <br />
                  for Modern Cities
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  Explore TransitFlow's innovative solutions, revolutionizing
                  urban transit with smart technologies, <br />
                  reducing delays, and enhancing commuter satisfaction in modern
                  cities.
                </p>
                <div class="pt-10">
                  <button class="btn-one">Get a Quote</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide slider-6 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Empowering Cities with <br />
                  Smart Transit Solutions
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  TransitFlow empowers cities with smart transit solutions,
                  optimizing routes, <br />reducing congestion, and enhancing
                  the overall commuter experience for urban residents.
                </p>
                <div class="pt-10">
                  <button class="btn-one">Get a Quote</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- banner area end -->

    <!-- about area start -->
    <div class="container mx-auto py-20 my-10 xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-20">
        <div class="xl:col-span-5 relative z-0">
          <img class="" src="img/home3/010.jpg" alt="" />

          <div
            class="absolute animate xl:bottom-[-50px] bottom-14 xl:left-[-70px]"
          >
            <img class="w-2/3 xl:w-52 xl:h-72" src="img/home3/012.jpg" alt="" />
          </div>
        </div>
        <div class="xl:col-span-7">
          <p class="font-bold text-yellow">About Our Company</p>
          <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
            Who We Are and What We Do
          </h2>
          <p class="pt-5 font-bold kumbh">
            Committed to Excellence in Every Service
          </p>
          <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-10">
            <div>
              <div class="flex xl:border border-[#ebebeb] px-5 py-5">
                <i
                  class="fa-solid fa-cubes w-20 h-20 text-center leading-[2.2] rounded-full bg-[#F9F5EF] text-yellow text-4xl hover:bg-yellow hover:text-black transition-all duration-300"
                ></i>
                <div class="ps-5 pt-3">
                  <p class="text-[16px] font-bold fira">Logistics Storage</p>
                  <p class="text-gray">Features 01</p>
                </div>
              </div>
              <div class="flex xl:border border-[#ebebeb] px-5 py-5">
                <i
                  class="fa-solid fa-phone w-20 h-20 text-center leading-[2.2] rounded-full bg-[#F9F5EF] text-yellow text-4xl hover:bg-yellow hover:text-black transition-all duration-300"
                ></i>

                <div class="ps-5 pt-3">
                  <p class="text-[16px] font-bold fira">24/7 Hours Support</p>
                  <p class="text-gray">Features 02</p>
                </div>
              </div>
            </div>
            <div>
              <div class="flex xl:border border-[#ebebeb] px-5 py-5">
                <i
                  class="fa-solid fa-file-invoice-dollar w-20 h-20 text-center leading-[2.2] rounded-full bg-[#F9F5EF] text-yellow text-4xl hover:bg-yellow hover:text-black transition-all duration-300"
                ></i>

                <div class="ps-5 pt-3">
                  <p class="text-[16px] font-bold fira">
                    Simple Payment Options
                  </p>
                  <p class="text-gray">Features 03</p>
                </div>
              </div>
              <div class="flex xl:border border-[#ebebeb] px-5 py-5">
                <i
                  class="fa-solid fa-boxes-packing w-20 h-20 text-center leading-[2.2] rounded-full bg-[#F9F5EF] text-yellow text-4xl hover:bg-yellow hover:text-black transition-all duration-300"
                ></i>

                <div class="ps-5 pt-3">
                  <p class="text-[16px] font-bold fira">Timely Delivery</p>
                  <p class="text-gray">Features 04</p>
                </div>
              </div>
            </div>
          </div>
          <div class="pt-10">
            <button class="btn-one mr-5">More About US</button>
            <button class="btn-one">Our Services</button>
          </div>
        </div>
      </div>
    </div>
    <!-- about area end -->
    <!-- company speciality area start-->
    <div class="bg-black py-10 text-white">
      <div class="container mx-auto py-10 xl:px-40 px-5">
        <div class="grid">
          <p class="font-bold text-yellow">Company Speciality</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3] pb-20"
          >
            Excellence in Every <br />
            Service We Offer
          </h2>
        </div>

        <div class="grid xl:grid-cols-3 grid-cols-1gap-10">
          <div class="group flex">
            <div
              class="bg-[#e2b32892] border-2 border-yellow w-20 h-20 rounded-full group-hover:bg-yellow transition-all duration-300"
            >
              <div class="mt-2 ml-3">
                <i
                  class="fa-solid fa-money-check-dollar text-3xl border border-y text-yellow bg-white w-24 h-24 rounded-full text-center leading-[3]"
                ></i>
              </div>
            </div>
            <div class="ps-10 pt-3">
              <p class="text-xl font-bold">Perfet Track Record</p>
              <p class="text-gray pt-2 font-medium">
                Our perfect track record ensures consistent and reliable
                results.
              </p>
            </div>
          </div>
          <div class="group flex pt-20 xl:pt-0">
            <div
              class="bg-[#e2b32892] border-2 border-yellow w-20 h-20 rounded-full group-hover:bg-yellow transition-all duration-300"
            >
              <div class="mt-2 ml-3">
                <i
                  class="fa-solid fa-globe text-3xl border border-y text-yellow bg-white w-24 h-24 rounded-full text-center leading-[3]"
                ></i>
              </div>
            </div>
            <div class="ps-10 pt-3">
              <p class="text-xl font-bold">Universal Green Practices</p>
              <p class="text-gray pt-2 font-medium">
                Implementing universal green practices for a healthier.
              </p>
            </div>
          </div>
          <div class="group flex pt-20 xl:pt-0">
            <div
              class="bg-[#e2b32892] border-2 border-yellow w-20 h-20 rounded-full group-hover:bg-yellow transition-all duration-300"
            >
              <div class="mt-2 ml-3">
                <i
                  class="fa-regular fa-handshake text-3xl border border-y text-yellow bg-white w-24 h-24 rounded-full text-center leading-[3]"
                ></i>
              </div>
            </div>
            <div class="ps-10 pt-3">
              <p class="text-xl font-bold">Grows bigger</p>
              <p class="text-gray pt-2 font-medium">
                Expands and Flourishes with Continuous Growth.
              </p>
            </div>
          </div>
        </div>
        <div class="grid pt-32">
          <div class="group">
            <div
              class="border-[30px] border-yellow w-[50%] group-hover:w-full transition-all duration-500"
            ></div>
            <div class="relative">
              <img class="h-[70%] w-full" src="img/truck2.jpg" alt="" />
              <div class="absolute top-0 right-0 left-0 text-center pt-72">
                <!-- Open the modal using ID.showModal() method -->
                <button class="" onclick="my_modal_5.showModal()">
                  <i
                    class="fa-brands fa-youtube text-black bg-yellow border-2 border-yellow w-40 h-40 rounded-full leading-[3] pt-2 text-5xl"
                  ></i>
                </button>
              </div>
              <dialog
                id="my_modal_5"
                class="modal modal-bottom sm:modal-middle"
              >
                <div class="modal-box">
                  <iframe
                    style="width: 100%; height: 100%"
                    src="https://www.youtube.com/embed/xNavVIe0ZN4?si=w0IbfgWVYty9Z174"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                  ></iframe>
                  <div class="modal-action">
                    <form method="dialog">
                      <!-- if there is a button in form, it will close the modal -->
                      <button class="btn">Close</button>
                    </form>
                  </div>
                </div>
              </dialog>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-20 pt-32">
          <div class="my-auto">
            <p class="font-bold text-yellow uppercase">Our Services</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-5 fira !leading-[1.3]"
            >
              Comprehensive Solutions Tailored to Your Needs
            </h2>
            <p class="text-gray">
              At TransitFlow, we pride ourselves on delivering top-notch
              services that you can rely on. Our team of experienced
              professionals is dedicated to providing innovative and efficient
              solutions tailored to meet your unique needs.
            </p>
            <div class="grid xl:grid-cols-2 md:grid-cols-2 pt-10">
              <div>
                <ul>
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Quality Supervision System
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Satisfaction Gurantee
                  </li>
                </ul>
              </div>
              <div>
                <ul>
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Proficient Employees
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Profesional and Qualified
                  </li>
                </ul>
              </div>
            </div>
            <div class="pt-14">
              <button class="btn-two">Get a Quote</button>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-5">
            <div class="relative group">
              <img src="img/blog1.jpg" alt="" />
              <div class="text-center pt-3 bg-[#1d1d1d] py-10">
                <p class="text-gray pb-3 pt-3">Service-1</p>
                <a class="font-bold text-xl" href="#">Ocean Freight </a>
              </div>
              <div
                class="px-5 bg-yellow py-5 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
              >
                <a class="font-bold text-xl" href="#">Ocean Freight </a>
                <p class="pt-3">
                  Reliable ocean freight services ensuring timely...
                </p>
                <ul class="pt-3">
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Quality Supervision System
                  </li>
                  <li class="pt-3">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Satisfaction Gurantee
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Profesional and Qualified
                  </li>
                </ul>
                <div class="pt-5">
                  <button class="btn-three">Read Details</button>
                </div>
              </div>
            </div>
            <div class="relative group mt-14">
              <img src="img/truck1.jpg" alt="" />
              <div class="text-center pt-3 bg-[#1d1d1d] py-10">
                <p class="text-gray pb-3 pt-3">Service-2</p>
                <a class="font-bold text-xl" href="#">Road Freight </a>
              </div>
              <div
                class="px-5 bg-yellow py-5 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
              >
                <a class="font-bold text-xl" href="#">Road Freight </a>
                <p class="pt-3">
                  Reliable ocean freight services ensuring timely...
                </p>
                <ul class="pt-3">
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Quality Supervision System
                  </li>
                  <li class="pt-3">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Satisfaction Gurantee
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Profesional and Qualified
                  </li>
                </ul>
                <div class="pt-5">
                  <button class="btn-three">Read Details</button>
                </div>
              </div>
            </div>
            <div class="relative group mt-[-50px]">
              <img src="img/blog2.jpg" alt="" />
              <div class="text-center pt-3 bg-[#1d1d1d] py-10">
                <p class="text-gray pb-3 pt-3">Service-3</p>
                <a class="font-bold text-xl" href="#">Air Freight </a>
              </div>
              <div
                class="px-5 bg-yellow py-5 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
              >
                <a class="font-bold text-xl" href="#">Air Freight </a>
                <p class="pt-3">
                  Reliable ocean freight services ensuring timely...
                </p>
                <ul class="pt-3">
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Quality Supervision System
                  </li>
                  <li class="pt-3">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Satisfaction Gurantee
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Profesional and Qualified
                  </li>
                </ul>
                <div class="pt-5">
                  <button class="btn-three">Read Details</button>
                </div>
              </div>
            </div>
            <div class="relative group">
              <img src="img/train1.jpg" alt="" />
              <div class="text-center pt-3 bg-[#1d1d1d] py-10">
                <p class="text-gray pb-3 pt-3">Service-4</p>
                <a class="font-bold text-xl" href="#">Train Freight </a>
              </div>
              <div
                class="px-5 bg-yellow py-5 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
              >
                <a class="font-bold text-xl" href="#">Train Freight </a>
                <p class="pt-3">
                  Reliable ocean freight services ensuring timely...
                </p>
                <ul class="pt-3">
                  <li>
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Quality Supervision System
                  </li>
                  <li class="pt-3">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Satisfaction Gurantee
                  </li>
                  <li class="pt-2">
                    <i class="fa-solid fa-circle-check pr-2"></i>
                    Profesional and Qualified
                  </li>
                </ul>
                <div class="pt-5">
                  <button class="btn-three">Read Details</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- company speciality area end-->
    <!-- team area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="grid text-center">
        <p class="font-bold text-yellow uppercase">Our Experts</p>
        <h2
          class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
        >
          Meet the Team Behind Our Success
        </h2>
      </div>
      <div class="swiper swiperteam">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team1.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Emily Johnson</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team2.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Samantha Brown</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team3.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Michael Smith</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team5.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Sophia Taylor</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team4.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >James Anderson</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team6.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Daniel Wilson</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
                <hr />
                <div class="px-3 py-5">
                  <a
                    class="pb-5 pe-5 border-r hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-phone text-yellow pe-2"></i>+254 2354
                    2569</a
                  >
                  <a
                    class="ps-5 hover:text-yellow font-semibold transition-all duration-300"
                    href="#"
                    ><i class="fa-solid fa-envelope text-yellow pe-2"></i
                    >yourmail@.com</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team area end -->
    <!-- choose area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="bg-light py-10 relative">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-20 px-5 py-10 my-10">
          <div class="">
            <p class="font-bold text-yellow kumbh">Why Prefer Us?</p>
            <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
              The Benefits of Choosing Our Services
            </h2>
            <p class="pt-5 kumbh">
              Choosing our services offers numerous benefits that set us apart
              from the competition. Our commitment to excellence ensures you
              receive top-quality service tailored to your unique needs. With a
              team of experienced professionals, we deliver innovative solutions
              that drive efficiency and success.
            </p>

            <ul class="pt-5">
              <li class="text-[16px] kumbh">
                <i
                  class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"
                ></i
                >100% Customer Satisfaction, Exact Testing Practices.
              </li>
              <li class="text-[16px] kumbh xl:pt-3 pt-8">
                <i
                  class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"
                ></i
                >Highly Trained Staff, Professional and Experienced
              </li>
              <li class="text-[16px] kumbh xl:pt-3 pt-8">
                <i
                  class="fa-solid fa-check me-3 bg-yellow w-5 h-5 rounded-full text-white text-center leading-5"
                ></i
                >Exceptional Craftsmanship, Skilled and Certified
              </li>
            </ul>
            <div class="pt-10">
              <button class="btn-two">More About Us</button>
            </div>
          </div>
          <div class="relative">
            <img src="img/home2.jpg" alt="" />
            <div
              class="absolute bottom-5 right-0 bg-white text-black px-5 py-5 animate flex"
            >
              <img class="w-28" src="img/project5.jpg" alt="" />
              <div class="ps-5 pt-2">
                <p class="text-4xl font-bold text-yellow">2.5M</p>
                <p class="text-xl font-semibold">Happy Client</p>
              </div>
            </div>
          </div>
        </div>
        <div class="absolute top-0 left-0">
          <img src="img/shape2.png" alt="" />
        </div>
        <div class="absolute bottom-0 right-0">
          <img src="img/shape.png" alt="" />
        </div>
      </div>
    </div>
    <!-- choose area end -->
    <!-- project area start -->
    <div class="bg-black py-10">
      <div class="container mx-auto py-10 my-10">
        <div class="grid w-2/3 xl:px-40 px-5">
          <p class="font-bold text-yellow">RECENT PROJECTS</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3] text-white"
          >
            Showcasing Our Latest Achievements and Innovations
          </h2>
        </div>
        <div class="swiper swiperproject">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project5.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >Stocked Warehouse Inventory Reduces Your Costs!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project1.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >On-Hand Supplies to Lower Expenses!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project4.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >Available Inventory to Cut Your Spending!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project2.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >Ready Inventory to Decrease Your Spend!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project3.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >On-Site Inventory to Save <br />
                  You Money!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project7.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >Warehouse Stock Lowers Your Budget!
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <a href="">
                <div class="overflow-hidden relative group">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/project6.jpg"
                    alt=""
                  />
                  <div
                    class="absolute left-0 right-0 top-40 text-center opacity-0 group-hover:opacity-100 z-50 duration-500 delay-100"
                  >
                    <i
                      class="fa-solid fa-right-long bg-yellow px-8 py-8 rounded-full"
                    ></i>
                  </div>
                </div>
              </a>
              <div class="bg-white px-7 py-4">
                <a
                  class="fira text-xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >Stored Goods Minimize Your Expenditure!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- project area end -->
    <!-- testimonial area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="grid">
        <div class="text-center">
          <p class="font-bold text-yellow">Customers Feedbacks</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
          >
            Hear What Our Clients Say
          </h2>
        </div>
      </div>
      <div class="swiper swiperservice">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bg-light relative px-8">
              <div class="absolute top-0 left-0 bottom-0">
                <img class="w-[50%]" src="img/shape2.png" alt="" />
              </div>
              <div class="absolute bottom-0 right-[-95px]">
                <img class="w-[50%]" src="img/shape.png" alt="" />
              </div>
              <div class="py-10 xl:flex md:flex block">
                <img
                  class="w-40 h-40 rounded-full"
                  src="img/cus-02.jpg"
                  alt=""
                />
                <div class="xl:ps-5 md:ps-5 ps-0 pt-3 xl:pt-0 md:pt-0">
                  <h4 class="text-2xl font-bold fira">Michael Brown</h4>
                  <p class="text-yellow fira">Operator</p>
                  <p class="kumbh pt-3">
                    Outstanding service and support! They went above and beyond
                    to ensure everything was perfect.
                  </p>
                  <div class="pt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-light relative px-8">
              <div class="absolute top-0 left-0 bottom-0">
                <img class="w-[50%]" src="img/shape2.png" alt="" />
              </div>
              <div class="absolute bottom-0 right-[-95px]">
                <img class="w-[50%]" src="img/shape.png" alt="" />
              </div>
              <div class="py-10 xl:flex md:flex block">
                <img
                  class="w-40 h-40 rounded-full"
                  src="img/cus03.jpg"
                  alt=""
                />
                <div class="xl:ps-5 md:ps-5 ps-0 pt-3 xl:pt-0 md:pt-0">
                  <h4 class="text-2xl font-bold fira">Emily Watson</h4>
                  <p class="text-yellow fira">Operator</p>
                  <p class="kumbh pt-3">
                    The team exceeded my expectations with their professionalism
                    and efficiency. The entire process was seamless.
                  </p>
                  <div class="pt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="bg-light relative px-8">
              <div class="absolute top-0 left-0 bottom-0">
                <img class="w-[50%]" src="img/shape2.png" alt="" />
              </div>
              <div class="absolute bottom-0 right-[-95px]">
                <img class="w-[50%]" src="img/shape.png" alt="" />
              </div>
              <div class="py-10 xl:flex md:flex block">
                <img
                  class="w-40 h-40 rounded-full"
                  src="img/cus-01.jpg"
                  alt=""
                />
                <div class="xl:ps-5 md:ps-5 ps-0 pt-3 xl:pt-0 md:pt-0">
                  <h4 class="text-2xl font-bold fira">Sophia Martinez</h4>
                  <p class="text-yellow fira">Operator</p>
                  <p class="kumbh pt-3">
                    I was impressed with their attention to detail and
                    dedication to customer satisfaction.Their
                    expertisedifference.
                  </p>
                  <div class="pt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-light relative px-8">
              <div class="absolute top-0 left-0 bottom-0">
                <img class="w-[50%]" src="img/shape2.png" alt="" />
              </div>
              <div class="absolute bottom-0 right-[-95px]">
                <img class="w-[50%]" src="img/shape.png" alt="" />
              </div>
              <div class="py-10 xl:flex md:flex block">
                <img
                  class="w-40 h-40 rounded-full"
                  src="img/cus03.jpg"
                  alt=""
                />
                <div class="xl:ps-5 md:ps-5 ps-0 pt-3 xl:pt-0 md:pt-0">
                  <h4 class="text-2xl font-bold fira">Emily Watson</h4>
                  <p class="text-yellow fira">Operator</p>
                  <p class="kumbh pt-3">
                    The team exceeded my expectations with their professionalism
                    and efficiency. The entire process was seamless.
                  </p>
                  <div class="pt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial area end -->
    <!-- blog area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="grid">
        <p class="font-bold text-yellow">Insights and Updates</p>
        <h2
          class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
        >
          Insights and Updates <br />
          from Our Experts
        </h2>
      </div>
      <div class="grid grid-cols-1 gap-10">
        <div class="group">
          <div class="xl:flex md:flex block">
            <div class="overflow-hidden">
              <img
                class="xl:w-[420px] w-full group-hover:scale-[1.1] transition-all duration-500"
                src="img/project5.jpg"
                alt=""
              />
            </div>
            <div class="border-t border-b border-r border-[#ebebeb] w-full">
              <div class="py-5 px-10 flex border-b border-[#ebebeb] w-full">
                <h6 class="font-medium text-gray">March 20, 2024 /</h6>
                <h6 class="font-medium text-gray">Modern Place</h6>
              </div>
              <div class="px-10 pt-3">
                <a
                  class="xl:text-4xl text-3xl font-bold fira group-hover:text-yellow transition-all duration-300"
                  href="#"
                  >Innovative Solutions and Ideas
                </a>
                <p class="text-gray font-medium kumbh pt-2">
                  Discover innovative solutions and fresh ideas to enhance your
                  business operations, streamline processes, and achieve greater
                  success.
                </p>
                <div class="pt-3">
                  <button class="btn-one">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group">
          <div class="xl:flex md:flex block">
            <div class="overflow-hidden">
              <img
                class="xl:w-[420px] w-full group-hover:scale-[1.1] transition-all duration-500"
                src="img/project6.jpg"
                alt=""
              />
            </div>
            <div class="border-t border-b border-r border-[#ebebeb] w-full">
              <div class="py-5 px-10 flex border-b border-[#ebebeb] w-full">
                <h6 class="font-medium text-gray">March 20, 2024 /</h6>
                <h6 class="font-medium text-gray">Modern Place</h6>
              </div>
              <div class="px-10 pt-3">
                <a
                  class="xl:text-4xl text-3xl font-bold fira group-hover:text-yellow transition-all duration-300"
                  href="#"
                  >Behind the Scenes at Our Company
                </a>
                <p class="text-gray font-medium kumbh pt-2">
                  Discover the inner workings of our company, meet the team, and
                  learn about our processes and daily operations.
                </p>
                <div class="pt-3">
                  <button class="btn-one">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="group">
          <div class="xl:flex md:flex block">
            <div class="overflow-hidden">
              <img
                class="xl:w-[420px] w-full group-hover:scale-[1.1] transition-all duration-500"
                src="img/project5.jpg"
                alt=""
              />
            </div>
            <div class="border-t border-b border-r border-[#ebebeb] w-full">
              <div class="py-5 px-10 flex border-b border-[#ebebeb] w-full">
                <h6 class="font-medium text-gray">March 20, 2024 /</h6>
                <h6 class="font-medium text-gray">Modern Place</h6>
              </div>
              <div class="px-10 pt-3">
                <a
                  class="xl:text-4xl text-3xl font-bold fira group-hover:text-yellow transition-all duration-300"
                  href="#"
                  >Updates on Our Projects and Initiatives
                </a>
                <p class="text-gray font-medium kumbh pt-2">
                  Stay informed with the latest updates on our projects and
                  initiatives, showcasing our innovative solutions and
                  successful implementations.
                </p>
                <div class="pt-3">
                  <button class="btn-one">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blog area end -->
    <!-- footer area start -->

    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
