<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ServoPak | Freight Solutions HTML Template</title>
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
            ServoPak
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
    @include('partials.navbar')
    <!-- navbar end -->
    
    <!-- banner area start -->
    <div
      class="bg-[#00000082] bg-blend-overlay bg-[url('../img/about1.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white"
    >
      <div class="container mx-auto">
        <div class="text-center py-32">
          <p class="text-6xl font-bold fira">About Us</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold"
              href="#"
              >Home</a
            >

            <p class="font-semibold">
              <i class="fa-solid fa-angle-right px-2"></i>About Us
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->

    <!-- about area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="grid xl:grid-cols-2 grid-cols-1 gap-20">
        <div class="relative z-0">
          <img class="" src="img/about-img.jpg" alt="" />

          <div class="absolute animate xl:bottom-28 bottom-14 xl:left-[-70px]">
            <p
              class="font-bold bg-yellow w-40 h-40 text-center justify-center pt-10"
            >
              <span class="text-4xl">25+</span> Years Experience
            </p>
          </div>
        </div>
        <div>
          <p class="font-bold text-yellow">ABOUT US</p>
          <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
            Dependable Transit Solutions Save You Time!
          </h2>
          <p class="pt-5 font-semibold kumbh">
            Streamlined, Efficient, and Reliable Transport for Your Daily
            Commute
          </p>
          <p class="pt-3 kumbh">
            Dependable transit solutions save you time by optimizing routes,
            minimizing delays, and ensuring reliable transportation for your
            daily needs.With our trusted transit services, you can count on
            punctual arrivals, seamless connections, and efficient journeys,
            giving you more time to focus on what matters most to you. Say
            goodbye to waiting and hello to a smoother commute!
          </p>
          <div class="pt-10">
            <button class="btn-one">Get a Quote</button>
          </div>
        </div>
      </div>
    </div>
    <!-- about area end -->
    <!-- Service area start -->
    <div class="bg-black text-white">
      <div class="container mx-auto py-20 xl:px-40 px-10">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-20">
          <div class="my-auto">
            <p class="font-bold text-yellow uppercase">Our Services</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-5 fira !leading-[1.3]"
            >
              Meet the Team Behind Our Success
            </h2>
            <p class="text-gray">
              At ServoPak, we pride ourselves on delivering top-notch services
              that you can rely on. Our team of experienced professionals is
              dedicated to providing innovative and efficient solutions tailored
              to meet your unique needs.
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
    <!-- Service area end -->
    <!-- team area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="grid text-center">
        <p class="font-bold text-yellow uppercase">Our Experts</p>
        <h2
          class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
        >
          Professional Services You Can Trust
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

    <!-- newsletter area start-->
    <div class="container mx-auto">
      <div class="grid xl:grid-cols-2 grid-cols-1">
        <div class="bg-black py-10 px-10 grid grid-cols-2">
          <div class="xl:ml-32">
            <h6 class="text-xl font-bold text-white fira">
              <i class="fa-solid fa-headphones me-3 text-xl"></i>Help Center
            </h6>
            <p class="text-gray pt-5 ps-8">
              24/7 Support <br />
              +(258) 629-32-238
            </p>
          </div>
          <div class="">
            <h6 class="text-xl font-bold text-white fira">
              <i class="fa-solid fa-location-dot me-3 text-xl"></i>Our Location
            </h6>
            <p class="text-gray pt-5 ps-8">125 Main City,USA</p>
          </div>
        </div>
        <div class="bg-yellow py-10 xl:px-20 md:px-24 px-5">
          <p class="text-3xl font-bold">Subscribe for News</p>
          <div class="join pt-5">
            <div>
              <div>
                <input
                  class="input input-bordered join-item py-7 xl:pe-28 md:pe-40 focus:border-none me-3 rounded-none"
                  placeholder="Search"
                />
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
