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
          <p class="text-6xl font-bold fira">News Details</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
              href="#"
              >Home</a
            >

            <p class="font-semibold kumbh">
              <i class="fa-solid fa-angle-right px-2"></i>News-Details
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->
    <!-- news details area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-10">
        <div class="xl:col-span-8">
          <img class="w-full rounded-2xl" src="img/0011.jpg" alt="" />
          <div class="pt-3">
            <a class="text-gray hover:text-black font-semibold mr-5" href="#">
              <i class="fa-solid fa-circle-user text-black"></i>
              Admin
            </a>
            <a class="text-gray hover:text-black font-semibold" href="#">
              <i class="fa-solid fa-comments text-black"></i>
              02 Comments
            </a>
          </div>
          <p class="text-3xl fira pt-10">
            Premier Provider of Web Design Services
          </p>
          <p class="text-gray pt-3 kumbh">
            At TransitFlow, we specialize in creating visually stunning and
            highly functional websites that elevate your online presence. As the
            premier provider of web design services, our team of expert
            designers and developers work closely with you to understand your
            vision and bring it to life.
          </p>
          <p class="text-gray pt-3 kumbh">
            We blend creativity with cutting-edge technology to deliver websites
            that not only look impressive but also drive results. Trust us to
            transform your digital footprint and help your business thrive in
            the competitive online landscape.
          </p>

          <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 py-20">
            <div class="flex">
              <p class="mr-8">Tags</p>
              <a
                aria-current="page"
                href="/news-details"
                class="mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300 hover:underline"
                >Business</a
              >
              <a
                aria-current="page"
                href="/news-details"
                class="router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300 hover:underline"
                >Agency</a
              >
            </div>

            <div class="flex pt-10 md:pt-0 xl:pt-0">
              <div
                class="bg-black text-white hover:bg-yellow hover:text-black transition-all duration-300 w-8 h-8 leading-8 text-center rounded-full mr-3"
              >
                <a class="" href="#"><i class="fa-brands fa-facebook"></i></a>
              </div>
              <div
                class="bg-black text-white hover:bg-yellow hover:text-black transition-all duration-300 w-8 h-8 leading-8 text-center rounded-full mr-3"
              >
                <a class="" href="#"><i class="fa-brands fa-x-twitter"></i></a>
              </div>

              <div
                class="bg-black mr-3 text-white hover:bg-yellow hover:text-black transition-all duration-300 w-8 h-8 leading-8 text-center rounded-full"
              >
                <a class="" href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>

              <div
                class="bg-black text-white hover:bg-yellow hover:text-black transition-all duration-300 w-8 h-8 leading-8 text-center rounded-full"
              >
                <a class="" href="#">
                  <i class="fa-brands fa-pinterest-p"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="flex pb-10">
            <div>
              <img class="w-60 rounded-full" src="img/cus-01.jpg" alt="" />
            </div>
            <div class="ps-10">
              <p class="text-xl font-bold">Lisa Jones</p>
              <div class="text-end mt-[-20px]">
                <a
                  class="bg-yellow hover:bg-black hover:text-white px-6 py-2 transition-all duration-300 font-semibold"
                  href="#"
                  >Reply</a
                >
              </div>
              <p class="text-gray font-semibold py-6">
                This new fitness tracker is amazing! The data it collects is
                incredibly detailed, and the battery life is fantastic.
              </p>
            </div>
          </div>
          <hr class="text-gray" />
          <div class="flex pt-10">
            <div>
              <img class="w-60 rounded-full" src="img/cus-02.jpg" alt="" />
            </div>
            <div class="ps-10">
              <p class="text-xl font-bold">David Brown</p>
              <div class="text-end mt-[-20px]">
                <a
                  class="bg-yellow hover:bg-black hover:text-white px-6 py-2 transition-all duration-300 font-semibold"
                  href="#"
                  >Reply</a
                >
              </div>
              <p class="text-gray font-semibold py-6">
                We've been using your restaurant management software for a few
                months now, and it's been a game-changer.
              </p>
            </div>
          </div>
          <p class="text-3xl font-bold pb-8 pt-10">Leave a Comment</p>
          <div class="grid xl:grid-cols-2 grid-cols-1 gap-x-10 gap-y-5">
            <div>
              <input
                class="py-4 px-10 xl:w-96 w-full bg-[#f2f2f2]"
                type="text"
                placeholder="Enter Name"
              />
            </div>
            <div>
              <input
                class="py-4 px-10 xl:w-96 w-full bg-[#f2f2f2]"
                type="text"
                placeholder="Enter Email"
              />
            </div>
          </div>
          <div class="pt-10">
            <textarea
              class="py-10 px-10 w-full bg-[#f2f2f2]"
              name="form message"
              placeholder="Message"
              id=""
            ></textarea>
          </div>
          <div class="pt-10">
            <button class="btn-one">Submit Comment</button>
          </div>
        </div>
        <div class="xl:col-span-4">
          <div class="join w-100">
            <input
              class="bg-yellow py-7 px-10"
              type="text"
              placeholder="Search Here"
            />
            <button class="px-10 bg-yellow">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
          <div class="bg-[#F6F6F6] rounded-2xl my-10 px-5 xl:px-10">
            <p class="text-2xl font-bold fira py-10">Latest Posts</p>
            <ul class="pb-10">
              <li class="flex mb-5 hover:bg-white p-1 xl:p-5 hover:rounded-xl">
                <img class="w-24 rounded-xl" src="img/blog2.jpg" alt="#" />
                <div class="ps-5">
                  <p class="text-gray pb-2 font-semibold mr-5" href="#">
                    <i class="fa-solid fa-circle-user text-yellow"></i>
                    Admin
                  </p>
                  <a class="font-bold" href="#"
                    >Leading Crypto Exchange Experts</a
                  >
                </div>
              </li>
              <li
                class="flex mb-5 hover:bg-white p-1 xl:p-5 xl:px-5 hover:rounded-xl"
              >
                <img class="w-24 rounded-xl" src="img/truck2.jpg" alt="" />
                <div class="ps-5">
                  <p class="text-gray pb-2 font-semibold mr-5" href="#">
                    <i class="fa-solid fa-circle-user text-yellow"></i>
                    Admin
                  </p>
                  <a class="font-bold" href="#"
                    >Popular Crypto Exchange Gurus
                  </a>
                </div>
              </li>
              <li class="flex mb-5 hover:bg-white p-1 xl:p-5 hover:rounded-xl">
                <img class="w-24 rounded-xl" src="img/train1.jpg" alt="" />
                <div class="ps-5">
                  <p class="text-gray pb-2 font-semibold mr-5" href="#">
                    <i class="fa-solid fa-circle-user text-yellow"></i>
                    Admin
                  </p>
                  <a class="font-bold" href="#">Major Crypto Trading </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="bg-[#F6F6F6] py-10 px-10 rounded-2xl">
            <p class="text-xl font-bold pb-6">Categories</p>
            <ul>
              <li class="bg-white p-4 rounded-xl mb-3">
                <a class="text-gray font-semibold" href="#">Business</a>
              </li>
              <li class="hover:bg-white hover:p-4 p-4 hover:rounded-xl">
                <a class="text-gray font-semibold" href="#">Introductions</a>
              </li>
              <li class="hover:bg-white hover:p-4 p-4 hover:rounded-xl">
                <a class="text-gray font-semibold" href="#">Digital Agensy</a>
              </li>
              <li class="hover:bg-white hover:p-4 p-4 hover:rounded-xl">
                <a class="text-gray font-semibold" href="#">New Technologies</a>
              </li>
              <li class="hover:bg-white hover:p-4 p-4 hover:rounded-xl">
                <a class="text-gray font-semibold" href="#">Web Development</a>
              </li>
            </ul>
          </div>
          <div class="bg-[#F6F6F6] py-10 px-10 rounded-2xl my-10">
            <p class="text-xl font-bold pb-6">Tags</p>
            <div class="inline-block">
              <a
                aria-current="page"
                href="/news-details"
                class="inline-block mb-5 mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300"
                >Business</a
              >
              <a
                aria-current="page"
                href="/news-details"
                class="inline-block mb-5 mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300"
                >Agency</a
              >
              <div class="my-5 xl:my-10">
                <a
                  aria-current="page"
                  href="/news-details"
                  class="inline-block mb-5 mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300"
                  >Digital</a
                >
                <a
                  aria-current="page"
                  href="/news-details"
                  class="inline-block mb-5 mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300"
                  >Technology</a
                >
              </div>
              <a
                aria-current="page"
                href="/news-details"
                class="inline-block mb-5 mr-5 router-link-active router-link-exact-active bg-yellow px-7 py-2 rounded-full hover:bg-black hover:text-white transition-all duration-300"
                >Consulting</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- news details area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
