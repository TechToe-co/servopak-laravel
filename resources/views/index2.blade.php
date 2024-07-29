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
    <div class="banner" id="home">
      <!-- Swiper -->
      <div
        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
        class="swiper mySwiper"
      >
        <div class="parallax-bg" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide slider-1 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Efficient and Reliable Transport <br />
                  Solutions for Modern Cities
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  Our transport solutions provide efficient and reliable
                  services tailored for<br />
                  modern cities. Experience reduced travel times, enhanced
                  connectivity, <br />
                  and improved commuter satisfaction with our innovative urban
                  mobility strategies.
                </p>
                <div class="pt-10">
                  <button class="btn-one">Get a Quote</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide slider-2 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Innovative Transport for a <br />
                  Connected World
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  Discover cutting-edge transport solutions that connect
                  communities, <br />enhance mobility, and drive efficiency.
                  Join us in shaping the future of<br />
                  transportation with innovative technologies and sustainable
                  practices.
                </p>
                <div class="pt-10">
                  <button class="btn-one">Get a Quote</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide slider-3 flex justify-center text-left">
            <div class="subtitle" data-swiper-parallax="-200">
              <div class="">
                <h1 class="text-3xl xl:text-5xl font-bold !leading-[1.3] fira">
                  Efficient Urban Mobility Solutions
                </h1>
                <p class="pt-5 text-[16px] kumbh">
                  Experience the future of urban travel with our efficient
                  mobility solutions.<br />
                  We optimize routes, reduce congestion, and enhance
                  connectivity, ensuring smooth <br />and sustainable
                  transportation for modern cities.
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
    <!-- call to action area start -->
    <div class="container mx-auto xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-5 gap-20">
        <div
          class="bg-[#F9F5EF] py-7 px-10 call-action xl:flex md:flex block mt-[-70px] relative z-10"
        >
          <div class="text-center">
            <i
              class="fa-solid fa-phone-volume bg-white w-20 h-20 text-center leading-[4] rounded-full text-yellow text-xl hover:bg-yellow hover:text-black"
            ></i>
          </div>
          <div class="xl:ps-10 md:ps-10 ps-0 xl:pt-2 md:pt-2 pt-5 text-center">
            <h6 class="text-gray pb-2 text-sm fira">Call Us Now</h6>
            <a
              class="text-2xl font-semibold hover:text-yellow transition-all duration-300 kumbh"
              href="#"
              >123-4586-7896</a
            >
          </div>
          <div class="xl:text-end md:text-end text-center">
            <button class="xl:ml-14 md:ml-40 mt-5 btn-one">Call Now</button>
          </div>
        </div>
        <div
          class="bg-[#F9F5EF] py-7 px-10 call-action xl:flex md:flex block mt-[-70px] relative z-10"
        >
          <div class="text-center">
            <i
              class="fa-solid fa-envelope-open-text bg-white w-20 h-20 text-center leading-[4] rounded-full text-yellow text-xl hover:bg-yellow hover:text-black"
            ></i>
          </div>
          <div class="xl:ps-10 md:ps-10 ps-0 xl:pt-2 md:pt-2 pt-5 text-center">
            <h6 class="text-gray pb-2 text-sm fira">Mail Anytime</h6>
            <a
              class="text-2xl font-semibold hover:text-yellow transition-all duration-300 kumbh"
              href="#"
              >yourmail@.com</a
            >
          </div>
          <div class="xl:text-end md:text-end text-center">
            <button class="xl:ml-14 md:ml-40 mt-5 btn-one">Mail Now</button>
          </div>
        </div>
      </div>
    </div>
    <!-- call to action area end -->
    <!-- about area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="grid xl:grid-cols-2 grid-cols-1 gap-20">
        <div class="relative z-0">
          <img class="w-full" src="img/ship0.jpg" alt="" />

          <div
            class="absolute animate xl:bottom-28 bottom-14 xl:left-[-70px] text-white bg-black py-10 px-5 border-[5px] border-white"
          >
            <p class="font-bold text-2xl text-center justify-center">
              Available Service 24/7
            </p>
            <p>Our Skilled Drivers, Trust Score 6.2</p>
            <div>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <div class="my-auto">
          <p class="font-bold text-yellow">ABOUT US</p>
          <h2 class="text-3xl xl:text-5xl font-bold pt-5 fira !leading-[1.3]">
            Delivering Excellence in Urban Mobility and Transport Solutions
          </h2>
          <div class="pt-10 flex">
            <div>
              <i
                class="fa-solid fa-cubes w-24 h-24 text-center leading-[2] rounded-full bg-[#F9F5EF] text-yellow text-5xl hover:bg-yellow hover:text-black transition-all duration-300"
              ></i>
            </div>
            <div class="ps-10 pt-5">
              <p class="font-bold text-2xl fira">Monitoring Movement</p>
              <p>
                Our advanced system ensures precise monitoring of movement,
                providing real-time updates and detailed insights to enhance
                efficiency and reliability in transit operations.
              </p>
            </div>
          </div>
          <div class="pt-10 flex">
            <div>
              <i
                class="fa-solid fa-phone-volume w-24 h-24 text-center leading-[2] rounded-full bg-[#F9F5EF] text-yellow text-5xl hover:bg-yellow hover:text-black transition-all duration-300"
              ></i>
            </div>
            <div class="ps-10 pt-5">
              <p class="font-bold text-2xl fira">24/7 Support</p>
              <p>
                Our dedicated team provides 24/7 support to ensure your needs
                are met anytime, day or night, for seamless service and
                assistance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about area end -->
    <!-- service  area start -->
    <div class="bg-black py-10 text-white">
      <div class="container mx-auto xl:px-40 px-5 py-10">
        <div class="grid">
          <div class="text-center">
            <p class="font-bold text-yellow">Who We Are</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
            >
              Our Mission, Vision, and<br />
              Values Explained
            </h2>
          </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-4 gap-5">
          <div class="content-box flex gap-5">
            <div
              class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center"
            >
              <i class="fa-solid fa-boxes-packing text-3xl text-yellow"></i>
            </div>
            <div class="count-box">
              <span
                class="count-text text-4xl"
                data-speed="3000"
                data-stop="20869"
                >0</span
              >
              <h6 class="text-gray font-medium">Successfully delivery</h6>
            </div>
          </div>
          <div class="content-box flex gap-5">
            <div
              class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center"
            >
              <i class="fa-solid fa-box text-3xl text-yellow"></i>
            </div>
            <div class="count-box">
              <span
                class="count-text text-4xl"
                data-speed="3000"
                data-stop="660"
                >0</span
              >
              <h6 class="text-gray font-medium">Supply Engineers</h6>
            </div>
          </div>
          <div class="content-box flex gap-5">
            <div
              class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center"
            >
              <i class="fa-solid fa-truck-fast text-3xl text-yellow"></i>
            </div>
            <div class="count-box">
              <span
                class="count-text text-4xl"
                data-speed="3000"
                data-stop="145"
                >0</span
              >
              <h6 class="text-gray font-medium">Countries Covered</h6>
            </div>
          </div>
          <div class="content-box flex gap-5">
            <div
              class="icon-box bg-gray2 w-20 h-20 rounded-full flex justify-center items-center"
            >
              <i class="fa-solid fa-boxes-stacked text-3xl text-yellow"></i>
            </div>
            <div class="count-box">
              <span
                class="count-text text-4xl"
                data-speed="3000"
                data-stop="1200"
                >0</span
              >
              <h6 class="text-gray font-medium">Companies We Help</h6>
            </div>
          </div>
        </div>
        <div class="grid pt-32">
          <div class="">
            <p class="font-bold text-yellow">Our Services</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
            >
              Expertise and Excellence
            </h2>
          </div>
        </div>
        <div class="swiper swiperservice2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/truck2.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Road Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Road Freight </a>
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
            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/train1.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Train Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Train Freight </a>
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
            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/blog1.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Ocean Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Ocean Freight </a>
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
            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/blog2.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Air Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Air Freight </a>
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

            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/truck1.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Road Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Road Freight </a>
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
            <div class="swiper-slide">
              <div class="relative group">
                <img src="img/train1.jpg" alt="" />
                <div class="absolute top-10 left-10">
                  <a class="text-3xl font-bold" href="#">Train Freight</a>
                </div>

                <div
                  class="px-5 bg-yellow py-10 absolute top-0 left-0 right-0 text-black opacity-0 group-hover:opacity-100 z-5 duration-500 delay-100"
                >
                  <a class="font-bold text-3xl" href="#">Train Freight </a>
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
        <div class="grid pt-32 `B">
          <div class="text-center">
            <p class="font-bold text-yellow">Who We Are</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
            >
              Follow 4 Easy Steps
            </h2>
          </div>
        </div>
        <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5 pb-10">
          <div
            class="text-center bg-[#232323] w-[288px] h-[288px] rounded-full relative group mr-5"
          >
            <img
              class="w-16 mx-auto mt-16 mb-4 group-hover:-hue-rotate-180 transition-all duration-700"
              src="img/icon1.png"
              alt=""
            />
            <a class="text-2xl font-bold mt-2 fira" href="#"
              >Order Operations
            </a>

            <p
              class="text-sm text-gray kumbh pt-2 px-5 group-hover:text-white transition-all duration-300"
            >
              Streamlining order operations for faster, accurate, and efficient
              deliveries.
            </p>
            <div class="absolute top-10 left-[12px]">
              <p
                class="bg-yellow font-bold leading-[3] text-black w-14 h-14 rounded-full border-[4px] border-black"
              >
                01
              </p>
            </div>
          </div>
          <div
            class="text-center bg-[#232323] w-[288px] h-[288px] rounded-full relative group"
          >
            <img
              class="w-16 mx-auto mt-16 mb-4 group-hover:-hue-rotate-180 transition-all duration-700"
              src="img/icon2.png"
              alt=""
            />
            <a class="text-2xl font-bold fira" href="#">Warehousing </a>

            <p
              class="text-sm text-gray kumbh pt-2 px-5 group-hover:text-white transition-all duration-300"
            >
              Efficient warehousing solutions ensuring secure, organized, and
              accessible.
            </p>
            <div class="absolute top-10 left-[14px]">
              <p
                class="bg-yellow font-bold leading-[3] text-black w-14 h-14 rounded-full border-[4px] border-black"
              >
                02
              </p>
            </div>
          </div>
          <div
            class="text-center bg-[#232323] w-[288px] h-[288px] rounded-full relative group"
          >
            <img
              class="w-16 mx-auto mt-16 mb-4 group-hover:-hue-rotate-180 transition-all duration-700"
              src="img/icon3.png"
              alt=""
            />
            <a class="text-2xl font-bold mt-2 fira" href="#"
              >Order Monitoring
            </a>

            <p
              class="text-sm text-gray kumbh pt-2 px-5 group-hover:text-white transition-all duration-300"
            >
              Track and oversee ensuring orders for seamless operations for
              faster fulfillment.
            </p>
            <div class="absolute top-10 left-[14px]">
              <p
                class="bg-yellow font-bold leading-[3] text-black w-14 h-14 rounded-full border-[4px] border-black"
              >
                03
              </p>
            </div>
          </div>
          <div
            class="text-center bg-[#232323] w-[288px] h-[288px] rounded-full relative group"
          >
            <img
              class="w-16 mx-auto mt-16 mb-4 group-hover:-hue-rotate-180 transition-all duration-700"
              src="img/icon4.png"
              alt=""
            />
            <a class="text-2xl font-bold mt-2 fira" href="#"
              >Product Delivery
            </a>
            <p
              class="text-sm text-gray kumbh pt-2 px-5 group-hover:text-white transition-all duration-300"
            >
              Efficient product delivery, ensuring timely arrivals and customer
              satisfaction.
            </p>
            <div class="absolute top-10 left-[14px]">
              <p
                class="bg-yellow font-bold leading-[3] text-black w-14 h-14 rounded-full border-[4px] border-black"
              >
                04
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- service  area end -->
    <!-- work progress area start -->
    <div class="container mx-auto py-20 my-20 xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-20">
        <div>
          <div class="grid grid-cols-12 xl:gap-2 md:gap-2">
            <div class="col-span-6 xl:col-span-3">
              <div
                class="bg-yellow py-10 px-5 md:px-5 xl:pt-40 md:pb-40 xl:pb-9 pb-9 pt-28"
              >
                <div>
                  <h4 class="text-5xl font-bold">25+</h4>
                  <p class="pt-5 font-bold">Years of experience</p>
                </div>
              </div>
            </div>
            <div class="col-span-6 xl:col-span-9">
              <div class="relative">
                <img src="img/home2.jpg" alt="" />
                <div
                  class="absolute md:bottom-[-22px] xl:bottom-[-100px] md:left-[-184px] xl:left-[-142px]"
                >
                  <img
                    class="xl:w-60 w-96 border-t-[8px] border-r-[8px] border-white"
                    src="img/project6.jpg"
                    alt=""
                  />
                </div>
                <div
                  class="absolute right-0 md:bottom-[-22px] xl:bottom-[-100px] hidden md:block"
                >
                  <img
                    class="w-[345px] h-52 xl:w-80 xl:h-40 border-t-[8px] border-white"
                    src="img/project7.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <p class="font-bold text-yellow">OUR WORK PROGRESS</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-5 pb-5 fira !leading-[1.3]"
          >
            Tracking Our Journey to Success
          </h2>
          <p>
            Follow our milestones and achievements as we continuously strive for
            excellence, delivering innovative solutions and exceptional results.
          </p>
          <div class="pt-5">
            <p class="font-bold">ROAD TRANSPORT</p>
            <progress
              class="progress w-100 h-3"
              value="95"
              max="100"
            ></progress>
            <p class="font-bold pt-3">AIR TRANSPORT</p>
            <progress class="progress w-90 h-3" value="90" max="100"></progress>
            <p class="font-bold pt-3">OCEAN TRANSPORT</p>
            <progress class="progress w-85 h-3" value="85" max="100"></progress>
            <p class="font-bold pt-3">TRAIN TRANSPORT</p>
            <progress class="progress w-70 h-3" value="75" max="100"></progress>
          </div>
        </div>
      </div>
    </div>
    <!-- work progress area end -->
    <!-- team area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="grid">
        <p class="font-bold text-yellow uppercase">Our Experts</p>
        <h2
          class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
        >
          Meet the Experts Driving <br />
          Our Success
        </h2>
      </div>
      <div class="swiper swiperteam2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team1.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Emily Johnson</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team2.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Samantha Brown</a
                  >
                  <p class="pt-2 pb-5 fira">Branch Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team3.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Michael Smith</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team5.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Sophia Taylor</a
                  >
                  <p class="pt-2 pb-5 fira">Branch Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team4.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >James Anderson</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team6.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Daniel Wilson</a
                  >
                  <p class="pt-2 pb-5 fira">Branch Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <div class="overflow-hidden relative group">
                <a class="" href="#">
                  <img
                    class="hover:scale-[1.1] transition-all duration-500"
                    src="img/team/team3.jpg"
                    alt=""
                  />
                </a>
                <div
                  class="absolute bottom-[-40px] left-16 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
                >
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-facebook"></i
                    ></a>
                  </div>
                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-x-twitter"></i
                    ></a>
                  </div>

                  <div
                    class="bg-white w-8 h-8 leading-8 text-center rounded-full"
                  >
                    <a class="" href="#"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="py-5 bg-light">
                <div class="text-center">
                  <a class="text-2xl font-bold hover:text-yellow fira" href="#"
                    >Michael Smith</a
                  >
                  <p class="pt-2 pb-5 fira">Director</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team area end -->
    <!-- appointment area start-->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="bg-yellow py-20 px-10">
        <div class="grid grid-cols-1 xl:grid-cols-2">
          <div>
            <p class="font-bold kumbh">GET A QUOTE</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-3 pb-10 fira !leading-[1.3]"
            >
              Make an Appointment
            </h2>
            <div class="xl:flex md:flex block pt-10">
              <div>
                <a class="bg-black text-white font-bold py-4 px-10" href="#"
                  >Request A Quote</a
                >
              </div>
              <div class="pt-10 xl:pt-0 md:pt-0">
                <a
                  class="bg-[#F4f5F880] text-black font-bold py-4 px-10"
                  href="#"
                  >Track & Trace</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-[#fff8ee] py-10 px-10">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-20">
          <div>
            <p>
              We’re here to address your questions and assist in identifying the
              services that best suit your needs.
            </p>
            <div class="pt-5 flex">
              <i
                class="fa-solid fa-phone-volume bg-white w-20 h-20 text-center leading-[4] rounded-full text-yellow text-xl hover:bg-yellow hover:text-black"
              ></i>
              <div class="ps-10 pt-3">
                <p>Call Us Now</p>
                <a
                  class="text-2xl font-bold hover:text-yellow transition-all duration-300"
                  href="#"
                  >125-1458-4785</a
                >
              </div>
            </div>
            <div class="pt-10">
              <p class="text-2xl font-bold">Our Service Benifits</p>
              <p class="pt-3">
                Our service benefits include cost savings, enhanced efficiency,
                superior support, and tailored solutions to meet your specific
                needs.
              </p>
              <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-7">
                <div>
                  <ul>
                    <li class="font-medium">
                      <i class="fa-solid fa-circle-check text-yellow me-3"></i
                      >Quality Control System
                    </li>
                    <li class="font-medium pt-3">
                      <i class="fa-solid fa-circle-check text-yellow me-3"></i
                      >100% Satisfaction Gurantee
                    </li>
                  </ul>
                </div>
                <div>
                  <ul>
                    <li class="font-medium pt-2 xl:pt-0 md:pt-0">
                      <i class="fa-solid fa-circle-check text-yellow me-3"></i
                      >Certified Specialists
                    </li>
                    <li class="font-medium pt-3">
                      <i class="fa-solid fa-circle-check text-yellow me-3"></i
                      >Experienced and Certified
                    </li>
                  </ul>
                </div>
              </div>
              <div class="pt-10 pb-14">
                <p class="text-2xl font-bold pb-5">Our Working Method</p>
                <div class="flex">
                  <p
                    class="text-yellow border border-yellow w-10 h-10 rounded-full text-center leading-9"
                  >
                    01
                  </p>
                  <p class="ps-3 pt-2">Plan a call regarding your shipment</p>
                </div>
                <div class="flex pt-5">
                  <p
                    class="text-yellow border border-yellow w-10 h-10 rounded-full text-center leading-9"
                  >
                    02
                  </p>
                  <p class="ps-3 pt-2">
                    We execute an initial review of the cargo
                  </p>
                </div>
                <div class="flex pt-5">
                  <p
                    class="text-yellow border border-yellow w-10 h-10 rounded-full text-center leading-9"
                  >
                    03
                  </p>
                  <p class="ps-3 pt-2">
                    We carry out a first assessment of the cargo
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="bg-white py-5 xl:py-10 px-5 xl:px-10 xl:mt-[-210px] mb-20"
          >
            <p class="text-2xl font-semibold text-center pb-5">
              Set Up a Free Assessment
            </p>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Your Name</label
                >
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder="Your Name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Email address</label
                >
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder="Email address"
                />
              </div>
              <div class="pt-5">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Company
                </label>
                <select
                  class="border border-gray py-3 px-2 w-full"
                  aria-label="Default select example"
                >
                  <option value="1">Select Option</option>
                  <option value="2">Ocean Freight</option>
                  <option value="3">Air Freight</option>
                  <option value="3">Road Freight</option>
                  <option value="3">Train Freight</option>
                </select>
              </div>
              <div class="pt-5">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Freight type</label
                >
                <select
                  class="border border-gray py-3 px-2 w-full"
                  aria-label="Default select example"
                >
                  <option value="1">Select Option</option>
                  <option value="2">Ocean Freight</option>
                  <option value="3">Air Freight</option>
                  <option value="3">Road Freight</option>
                  <option value="3">Train Freight</option>
                </select>
              </div>
              <div class="mb-3 pt-5">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Departure City</label
                >
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder="Name"
                />
              </div>
              <div class="mb-3 pt-5">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Delivery City</label
                >
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder="Name"
                />
              </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-4 pt-5 gap-5">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Weight
                </label>
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder=""
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Height
                </label>
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder=""
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Width
                </label>
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder=""
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="text-sm"
                  >Length
                </label>
                <input
                  type="email"
                  class="border border-gray py-3 px-5 w-full"
                  id="exampleFormControlInput1"
                  placeholder=""
                />
              </div>
            </div>
            <div class="pt-5">
              <label for="exampleFormControlTextarea1" class=""
                >Example textarea</label
              >
              <textarea
                class="border w-full border-gray"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 pt-5">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="exampleRadios"
                  id="exampleRadios1"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="exampleRadios1">
                  Fragile
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="exampleRadios"
                  id="exampleRadios1"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="exampleRadios1">
                  Delivery
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="exampleRadios"
                  id="exampleRadios1"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="exampleRadios1">
                  Insurance
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="exampleRadios"
                  id="exampleRadios1"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="exampleRadios1">
                  Packaging
                </label>
              </div>
            </div>
            <div class="pt-10">
              <button class="btn-one">Cost Calculation</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- appointment area end-->
    <!-- testimonial area start -->
    <div class="container mx-auto py-20 my-10 xl:px-40 px-5">
      <div class="swiper swipertestimonial">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="xl:flex md:flex block">
              <img src="img/team/team1.jpg" alt="" />
              <div class="px-10 my-auto">
                <i class="fa-solid fa-quote-right text-7xl text-yellow"></i>
                <p class="text-2xl font-semibold kumbh">
                  TransitFlow has transformed our logistics operations. Their
                  reliable service and expert team ensure our shipments always
                  arrive on time.
                </p>
                <div class="border border-[#eeeaea] mt-8"></div>
                <h4 class="text-2xl font-bold pt-10 fira">Emily Johnson</h4>
                <p class="text-yellow kumbha">Director</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="xl:flex md:flex block">
              <img src="img/team/team2.jpg" alt="" />
              <div class="px-10 my-auto">
                <i class="fa-solid fa-quote-right text-7xl text-yellow"></i>
                <p class="text-2xl font-semibold kumbh">
                  Exceptional service and support. TransitFlow's innovative
                  solutions have streamlined our transportation needs
                  efficiently.
                </p>
                <div class="border border-[#eeeaea] mt-8"></div>
                <h4 class="text-2xl font-bold pt-10 fira">John Smith</h4>
                <p class="text-yellow kumbha">Director</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="xl:flex md:flex block">
              <img src="img/team/team3.jpg" alt="" />
              <div class="px-10 my-auto">
                <i class="fa-solid fa-quote-right text-7xl text-yellow"></i>
                <p class="text-2xl font-semibold kumbh">
                  Outstanding experience with TransitFlow. Their professionalism
                  and dedication have made them our trusted logistics partner.
                </p>
                <div class="border border-[#eeeaea] mt-8"></div>
                <h4 class="text-2xl font-bold pt-10 fira">Emily Johnson</h4>
                <p class="text-yellow kumbha">Director</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="xl:flex md:flex block">
              <img src="img/team/team4.jpg" alt="" />
              <div class="px-10 my-auto">
                <i class="fa-solid fa-quote-right text-7xl text-yellow"></i>
                <p class="text-2xl font-semibold kumbh">
                  Highly recommend TransitFlow! Their consistent reliability and
                  excellent customer service set them apart in the industry.
                </p>
                <div class="border border-[#eeeaea] mt-8"></div>
                <h4 class="text-2xl font-bold pt-10 fira">Michael Brown</h4>
                <p class="text-yellow kumbha">Director</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial area end -->
    <!-- blog area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="grid grid-cols-12">
        <div class="xl:col-span-4 col-span-12">
          <p class="font-bold kumbh text-yellow">Blog posts</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-3 pb-5 fira !leading-[1.3]"
          >
            Latest News and Insights
          </h2>
          <p class="kumbh">
            Stay updated with our latest news and insights. Explore expert
            articles, industry trends, and valuable information to keep you
            informed and engaged.
          </p>
          <div class="pt-10">
            <button class="btn-one">View All Posts</button>
          </div>
        </div>
        <div class="xl:col-span-8 col-span-12 pt-10 xl:pt-0">
          <div class="swiper swiperservice">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div>
                  <a href="#">
                    <div class="overflow-hidden">
                      <img
                        class="hover:scale-[1.1] transition-all duration-500"
                        src="img/blog1.jpg"
                        alt=""
                      />
                    </div>
                  </a>
                  <div
                    class="xl:px-8 pb-10 hover:shadow-xl transition-all duration-300"
                  >
                    <div class="pt-5 flex">
                      <p class="font-semibold">
                        <i class="fa-regular fa-user text-yellow pe-2"></i
                        >TransitFlow
                      </p>

                      <div class="ps-10">
                        <p class="font-semibold">
                          <i class="fa-solid fa-comments text-yellow pe-2"></i
                          >220 Comments
                        </p>
                      </div>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-2xl font-bold hover:text-yellow transition-all duration-300"
                        href="#"
                        >Practical Advice for Maximizing Your Success
                      </a>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-sm font-semibold text-yellow hover:text-black transition-all duration-300"
                        href="#"
                      >
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <a href="#">
                    <div class="overflow-hidden">
                      <img
                        class="hover:scale-[1.1] transition-all duration-500"
                        src="img/truck2.jpg"
                        alt=""
                      />
                    </div>
                  </a>
                  <div
                    class="xl:px-8 pb-10 hover:shadow-xl transition-all duration-300"
                  >
                    <div class="pt-5 flex">
                      <p class="font-semibold">
                        <i class="fa-regular fa-user text-yellow pe-2"></i
                        >TransitFlow
                      </p>

                      <div class="ps-10">
                        <p class="font-semibold">
                          <i class="fa-solid fa-comments text-yellow pe-2"></i
                          >220 Comments
                        </p>
                      </div>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-2xl font-bold hover:text-yellow transition-all duration-300"
                        href="#"
                        >Expert Tips and Insights from Our Team
                      </a>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-sm font-semibold text-yellow hover:text-black transition-all duration-300"
                        href="#"
                      >
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <a href="#">
                    <div class="overflow-hidden">
                      <img
                        class="hover:scale-[1.1] transition-all duration-500"
                        src="img/blog2.jpg"
                        alt=""
                      />
                    </div>
                  </a>
                  <div
                    class="xl:px-8 pb-10 hover:shadow-xl transition-all duration-300"
                  >
                    <div class="pt-5 flex">
                      <p class="font-semibold">
                        <i class="fa-regular fa-user text-yellow pe-2"></i
                        >TransitFlow
                      </p>

                      <div class="ps-10">
                        <p class="font-semibold">
                          <i class="fa-solid fa-comments text-yellow pe-2"></i
                          >220 Comments
                        </p>
                      </div>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-2xl font-bold hover:text-yellow transition-all duration-300"
                        href="#"
                        >Industry News and Trends You Should Know
                      </a>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-sm font-semibold text-yellow hover:text-black transition-all duration-300"
                        href="#"
                      >
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <a href="#">
                    <div class="overflow-hidden">
                      <img
                        class="hover:scale-[1.1] transition-all duration-500"
                        src="img/train1.jpg"
                        alt=""
                      />
                    </div>
                  </a>
                  <div
                    class="xl:px-8 pb-10 hover:shadow-xl transition-all duration-300"
                  >
                    <div class="pt-5 flex">
                      <p class="font-semibold">
                        <i class="fa-regular fa-user text-yellow pe-2"></i
                        >TransitFlow
                      </p>

                      <div class="ps-10">
                        <p class="font-semibold">
                          <i class="fa-solid fa-comments text-yellow pe-2"></i
                          >220 Comments
                        </p>
                      </div>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-2xl font-bold hover:text-yellow transition-all duration-300"
                        href="#"
                        >Behind the Scenes at TransitFlow
                      </a>
                    </div>
                    <div class="pt-5">
                      <a
                        class="text-sm font-semibold text-yellow hover:text-black transition-all duration-300"
                        href="#"
                      >
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blog area end -->
    <!-- map area start -->
    <div class="container mx-auto">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38523723.739169486!2d99.84146521222483!3d29.672575258934316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5844f0bb6903%3A0x57ad3fed1bbae325!2sBihar%2C%20India!5e0!3m2!1sen!2sbd!4v1717515903235!5m2!1sen!2sbd"
        width="100%"
        height="550"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <!-- map area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
