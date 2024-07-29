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
          <p class="text-6xl font-bold fira">Team Details</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
              href="#"
              >Home</a
            >

            <p class="font-semibold kumbh">
              <i class="fa-solid fa-angle-right px-2"></i>Team-Details
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->
    <!-- team details area start -->
    <div class="container mx-auto py-10 my-10 xl:px-40 px-5 overflow-x-hidden">
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-10 pb-20">
        <div>
          <img class="rounded-3xl w-full" src="img/team/team2.jpg" alt="" />
        </div>
        <div class="ps-10">
          <h4 class="text-4xl font-bold fira">Samanth Brown</h4>
          <h6 class="text-gray pt-3 kumbh">Managing Director & CEO</h6>
          <p class="pt-5 text-3xl kumbh">
            I empower my clients to excel, and they support my expansion.
          </p>
          <h5 class="text-xl font-bold fira pt-8">Email Address</h5>
          <p class="text-gray">yourmail@.com</p>
          <h5 class="text-xl font-bold fira pt-8">Phone Number</h5>
          <p class="text-gray">125-4586-4589</p>
          <h5 class="text-xl font-bold fira pt-8">Phone Number</h5>
          <p class="text-gray">125-4586-4589</p>
          <h5 class="text-xl font-bold fira pt-8">Web Address</h5>
          <p class="text-gray">www.yourdomain.com</p>
          <div class="flex pt-5">
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
              <a class="" href="#"> <i class="fa-brands fa-pinterest-p"></i></a>
            </div>
          </div>
        </div>
        <hr class="text-gray" />
      </div>
      <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-10">
        <div>
          <h4 class="text-3xl font-bold pb-5 fira">Personal Experience</h4>
          <p class="kumbh">
            With over a decade of experience in the transportation industry, I
            have honed my skills in delivering exceptional service and
            innovative solutions. My journey has been driven by a passion for
            enhancing efficiency and reliability in logistics.
          </p>
        </div>
        <div class="xl:ps-10">
          <p class="font-bold">Tecnology</p>
          <progress class="progress w-96 h-3" value="90" max="100"></progress>
          <p class="font-bold pt-3">Marketing</p>
          <progress class="progress w-80 h-3" value="80" max="100"></progress>
          <p class="font-bold pt-3">Business</p>
          <progress class="progress w-56 h-3" value="70" max="100"></progress>
        </div>
      </div>
    </div>
    <!-- team details area end -->
    <!-- contact area start -->
    <div class="bg-[#F6F5F6]">
      <div class="container mx-auto py-20 xl:px-40 px-5">
        <div class="grid">
          <div class="text-center">
            <p class="font-bold text-yellow uppercase">CONTACT WITH US</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-10 fira !leading-[1.3]"
            >
              Connect with Our Support Team
            </h2>
          </div>

          <div class="xl:w-2/3 w-full xl:mx-auto">
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-x-10 gap-y-5">
              <div>
                <input
                  class="py-4 px-10 xl:w-96 w-full"
                  type="text"
                  placeholder="Enter Name"
                />
              </div>
              <div>
                <input
                  class="py-4 px-10 xl:w-96 w-full"
                  type="text"
                  placeholder="Enter Email"
                />
              </div>
              <div>
                <input
                  class="py-4 px-10 xl:w-96 w-full"
                  type="text"
                  placeholder="Enter Subject"
                />
              </div>
              <div>
                <input
                  class="py-4 px-10 xl:w-96 w-full"
                  type="text"
                  placeholder="Enter Phone"
                />
              </div>
            </div>
            <div class="pt-10">
              <textarea
                class="py-10 px-10 w-full"
                name="form message"
                placeholder="Message"
                id=""
              ></textarea>
            </div>
            <div class="pt-10 text-center">
              <button class="btn-one mr-5">Send Message</button>
              <button class="btn-one">Reset</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
