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
      class="bg-[#00000082] bg-blend-overlay bg-[url('../img/truck2.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white"
    >
      <div class="container mx-auto">
        <div class="text-center py-32">
          <p class="text-6xl font-bold fira">Contact</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
              href="#"
              >Home</a
            >

            <p class="font-semibold kumbh">
              <i class="fa-solid fa-angle-right px-2"></i>Contact
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->

    <!-- contact area start -->

    <div class="container mx-auto py-20 xl:px-40 px-5">
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-20">
        <div class="xl:col-span-7">
          <div class="">
            <p class="font-bold text-yellow uppercase">SEND US EMAIL</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-10 fira !leading-[1.3]"
            >
              Connect with Our Support Team
            </h2>
          </div>

          <div class="">
            <form id="reused_form" action="POST">
              <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text font-bold">Name</span>
                </div>
                <input
                  id="name"
                  name="name"
                  type="text"
                  placeholder="Your name"
                  class="input input-bordered w-full max-w-xs"
                />
              </label>
              <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text font-bold">Telephone</span>
                </div>
                <input
                  id="telephone"
                  name="telephone"
                  type="text"
                  placeholder="+49 xxxxxxxx"
                  class="input input-bordered w-full max-w-xs"
                />
              </label>
              <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text font-bold">Message</span>
                </div>
                <textarea
                  id="comments"
                  name="comments"
                  class="textarea textarea-bordered"
                  placeholder="Your Message"
                ></textarea>
              </label>

              <div class="mt-5 text-right">
                <button type="submit" class="btn-one">
                  <i class="fa-solid fa-envelope"></i> SUBMIT
                </button>
              </div>
            </form>

            <div class="pt-5 mt-5" id="success_message" style="display: none">
              <h3 class="text-success">Your message submit successfully!</h3>
            </div>
            <div id="error_message" style="display: none">
              <h3 class="text-danger">Error</h3>
              Sorry there was an error sending your form.
            </div>
          </div>
        </div>
        <div class="xl:col-span-5">
          <div class="">
            <p class="font-bold text-yellow uppercase">NEED ANY HELP?</p>
            <h2
              class="text-3xl xl:text-5xl font-bold pt-5 pb-8 fira !leading-[1.3]"
            >
              Get in touch with us
            </h2>
            <p>
              This section will provide details on how to reach the company.
              Here are some common elements you might find If the company offers
              phone support, the number will be listed here with hours of
              operation if applicable.
            </p>
          </div>
          <div class="flex pt-10">
            <i
              class="fa-solid fa-phone text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"
            ></i>
            <div class="ps-5">
              <p class="text-xl font-bold pb-3">Have any question?</p>
              <a class="text-gray text-xl" href="#">Free 125-4589-9632</a>
            </div>
          </div>
          <div class="flex pt-10">
            <i
              class="fa-solid fa-envelope text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"
            ></i>
            <div class="ps-5">
              <p class="text-xl font-bold pb-3">Write email</p>
              <a class="text-gray text-xl" href="#">yourmail@.com</a>
            </div>
          </div>
          <div class="flex pt-10">
            <i
              class="fa-solid fa-location-arrow text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"
            ></i>
            <div class="ps-5">
              <p class="text-xl font-bold pb-3">Visit anytime</p>
              <a class="text-gray text-xl" href="#">125 Main City,USA</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- contact area end -->
    <div class="container mx-auto pt-10">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38523723.739169486!2d99.84146521222483!3d29.672575258934316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5844f0bb6903%3A0x57ad3fed1bbae325!2sBihar%2C%20India!5e0!3m2!1sen!2sbd!4v1717515903235!5m2!1sen!2sbd"
        width="100%"
        height="550"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
      <div class="grid"></div>
    </div>
    <!-- footer area start -->
    @include('partials.footer.footer_up')
    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/form.js"></script>
  </body>
</html>
