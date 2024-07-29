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
    <div
      class="bg-[#00000082] bg-blend-overlay bg-[url('../img/about1.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white"
    >
      <div class="container mx-auto">
        <div class="text-center py-32">
          <p class="text-6xl font-bold fira">Project Grid</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold"
              href="#"
              >Home</a
            >

            <p class="font-semibold">
              <i class="fa-solid fa-angle-right px-2"></i>Project Grid
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->

    <!-- project area start -->
    <div class="bg-light py-10">
      <div class="container mx-auto py-10 my-10">
        <div class="grid w-full xl:w-2/3 xl:px-40 px-5 text-center mx-auto">
          <p class="font-bold text-yellow">RECENT PROJECTS</p>
          <h2
            class="text-3xl xl:text-5xl font-bold pt-5 pb-20 fira !leading-[1.3]"
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

    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
