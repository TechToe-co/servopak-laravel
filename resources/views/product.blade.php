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
          <p class="text-6xl font-bold fira">Product</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold"
              href="#"
              >Home</a
            >

            <p class="font-semibold">
              <i class="fa-solid fa-angle-right px-2"></i>Product
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->
    <!-- product area start -->
    <div class="container py-10 my-10 mx-auto xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-4 md:grid-cols-2 gap-10">
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt1.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                <a class="text-2xl font-bold hover:text-yellow fira" href="#">
                  Adventure Backpack</a
                >
                <p class="pt-2 pb-5 fira font-bold text-gray">50$.00-60$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt2.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                <a class="text-2xl font-bold hover:text-yellow fira" href="#">
                  Leather Strap Watch</a
                >
                <p class="pt-2 pb-5 fira font-bold text-gray">70$.00-80$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt3.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                <a class="text-2xl font-bold hover:text-yellow fira" href="#">
                  Over-Ear Headphones</a
                >
                <p class="pt-2 pb-5 fira font-bold text-gray">30$.00-40$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt4.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                  >Cosmetics</a
                >
                <p class="pt-2 pb-5 fira text-gray font-bold">60$.00-70$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt5.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                  >Body Massage Oil</a
                >
                <p class="pt-2 pb-5 fira text-gray font-bold">80$.00-90$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt1.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                <a class="text-2xl font-bold hover:text-yellow fira" href="#">
                  Adventure Backpack</a
                >
                <p class="pt-2 pb-5 fira font-bold text-gray">50$.00-60$.00</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt6.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                  >Massage Cream</a
                >
                <p class="pt-2 pb-5 fira">Director</p>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div>
            <div class="overflow-hidden relative group">
              <a class="" href="#">
                <img
                  class="hover:scale-[1.1] transition-all duration-500 bg-sky-400"
                  src="img/product/pdt2.png"
                  alt=""
                />
              </a>
              <div
                class="absolute bottom-[-40px] left-20 group-hover:bottom-10 transition-all duration-500 text-yellow flex"
              >
                <div
                  class="bg-white w-8 h-8 leading-8 text-center rounded-full mr-3"
                >
                  <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
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
                <a class="text-2xl font-bold hover:text-yellow fira" href="#">
                  Leather Strap Watch</a
                >
                <p class="pt-2 pb-5 fira font-bold text-gray">70$.00-80$.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- product area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
