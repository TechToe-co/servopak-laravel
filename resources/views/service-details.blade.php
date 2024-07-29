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
          <p class="text-6xl font-bold fira">Service Details</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
              href="#"
              >Home</a
            >

            <p class="font-semibold kumbh">
              <i class="fa-solid fa-angle-right px-2"></i>Service-Details
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->
    <!-- service area start -->
    <div class="container mx-0 py-10 my-10 xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-10">
        <div class="xl:col-span-4">
          <div>
            <ul class="bg-light py-10 px-10">
              <li
                class="text-[18px] py-5 px-5 font-bold bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>Digital Agency </span>
                </a>
              </li>
              <li
                class="bg-white text-[18px] mt-4 py-5 px-5 font-bold hover:bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>Web Desigining </span>
                </a>
              </li>
              <li
                class="bg-white text-[18px] mt-4 py-5 px-5 font-bold hover:bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>Web Development </span>
                </a>
              </li>
              <li
                class="bg-white text-[18px] mt-4 py-5 px-5 font-bold hover:bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>Digital Marketing </span>
                </a>
              </li>
              <li
                class="bg-white text-[18px] mt-4 py-5 px-5 font-bold hover:bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>Web Application</span>
                </a>
              </li>
              <li
                class="bg-white text-[18px] mt-4 py-5 px-5 font-bold hover:bg-yellow transition-all duration-300 fira"
              >
                <a href="#"
                  ><i class="fa-solid fa-angle-right pr-5"></i>
                  <span>App Development </span>
                </a>
              </li>
            </ul>
          </div>
          <div class="bg-yellow mt-8 px-10 py-10 rounded-2xl">
            <p class="text-4xl font-bold text-center fira">
              Contact with <br />
              us for any <br />
              advice
            </p>
            <div class="pt-8 text-center">
              <i
                class="fa-solid fa-phone text-3xl text-white bg-black w-14 h-14 rounded-full leading-[2]"
              ></i>
              <h6 class="pt-5 pb-4 text-gray">Need help? Talk to an expert</h6>
              <a
                class="text-4xl hover:text-white fira transition-all duration-300"
                href="#"
                >458-7391-9761</a
              >
            </div>
          </div>
          <div class="pt-5 text-center">
            <button class="btn-one w-full">download pdf file</button>
          </div>
        </div>
        <div class="xl:col-span-8">
          <img class="w-full" src="img/banner1.jpg" alt="" />
          <h4 class="text-3xl font-bold pt-5 fira">Service Description</h4>
          <p class="pt-3 kumbh text-gray">
            At TransitFlow, we offer a comprehensive range of transportation and
            logistics services tailored to meet the diverse needs of our
            clients. From ocean and air freight to road and rail transport, we
            ensure efficient and reliable delivery solutions worldwide. Our
            expert team leverages advanced technology and industry best
            practices to provide seamless, cost-effective services.
          </p>
          <p class="pt-3 kumbh text-gray">
            Whether it's local deliveries or international shipments,
            TransitFlow is committed to excellence, ensuring your cargo reaches
            its destination safely and on time.
          </p>
          <h4 class="text-3xl font-bold pt-5 fira">Service Center</h4>
          <p class="pt-3 kumbh text-gray">
            Our Service Center is dedicated to providing exceptional support and
            maintenance for all your transportation needs. From routine
            inspections to emergency repairs, our team of skilled technicians
            ensures your vehicles and equipment are always in top condition.
          </p>
          <p class="pt-3 kumbh text-gray">
            We offer a comprehensive range of services, including diagnostics,
            parts replacement, and performance enhancements. At TransitFlow,
            customer satisfaction is our priority, and we strive to deliver
            efficient, reliable, and cost-effective solutions to keep your
            operations running smoothly.
          </p>
          <div class="grid grid-cols-2 gap-10 pt-5">
            <div>
              <img src="img/project4.jpg" alt="" />
            </div>
            <div>
              <img src="img/project7.jpg" alt="" />
            </div>
          </div>
          <div class="pt-10">
            <p class="text-3xl lg:text-5xl font-bold play pb-10 fira">
              Frequently Asked Question
            </p>
            <div class="collapse collapse-plus bg-white mb-8">
              <input type="radio" name="my-accordion-3" checked="checked" />
              <div class="collapse-title text-xl font-bold noto py-8 fira">
                What types of transportation services do you offer?
              </div>
              <div class="collapse-content">
                <p class="noto text-[18px] font-medium kumbh">
                  We provide a comprehensive range of services including ocean
                  freight, air freight, road transport, and rail transport to
                  meet all your logistics needs.
                </p>
              </div>
            </div>
            <div class="collapse collapse-plus bg-white mb-8">
              <input type="radio" name="my-accordion-3" />
              <div class="collapse-title text-xl font-bold noto py-8 fira">
                How do you ensure the safety of my cargo?
              </div>
              <div class="collapse-content">
                <p class="noto text-[18px] font-medium kumbh">
                  We utilize advanced tracking systems, secure packaging, and
                  experienced handling to ensure your cargo is transported
                  safely and securely.
                </p>
              </div>
            </div>
            <div class="collapse collapse-plus bg-white mb-8">
              <input type="radio" name="my-accordion-3" />
              <div class="collapse-title text-xl font-bold noto py-8 fira">
                Can I track my shipment in real-time?
              </div>
              <div class="collapse-content">
                <p class="noto text-[18px] font-medium kumbh">
                  Yes, our state-of-the-art tracking technology allows you to
                  monitor your shipment's status and location in real-time.
                </p>
              </div>
            </div>
            <div class="collapse collapse-plus bg-white mb-8">
              <input type="radio" name="my-accordion-3" />
              <div class="collapse-title text-xl font-bold noto py-8 fira">
                How do I get a quote for my shipping needs?
              </div>
              <div class="collapse-content">
                <p class="noto text-[18px] font-medium fira">
                  You can easily request a quote through our website by
                  providing details about your shipment, or contact our customer
                  service team for assistance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- service area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
