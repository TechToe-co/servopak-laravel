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
          <p class="text-6xl font-bold fira">Pricing</p>
          <div class="flex justify-center pt-3">
            <a
              class="text-yellow hover:text-white transition-all duration-300 font-semibold"
              href="#"
              >Home</a
            >

            <p class="font-semibold">
              <i class="fa-solid fa-angle-right px-2"></i>Pricing
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- banner area end -->
    <!-- price area start -->
    <div class="container mx-auto py-20 my-10 xl:px-40 px-5">
      <div class="grid crid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">
        <div class="text-center shadow-xl py-10 rounded-2xl">
          <h4 class="text-2xl font-bold fira pb-8">Standard Pass</h4>
          <p class="text-5xl font-bold text-yellow">$150.00</p>
          <p class="text-gray pt-2">1 Day</p>
          <div class="pt-10">
            <p class="text-xl font-bold hover:text-gray">Full Conference</p>
            <p class="text-gray">(Includes workshop, coffee etc)</p>
          </div>
          <div class="pt-5 text-gray">
            <p class="text-xl font-bold">Live Videos</p>
            <p class="">(Can access online free)</p>
          </div>
          <div class="pt-5 text-gray">
            <p class="text-xl font-bold">Meet Speaker</p>
            <p class="">(Ask question privately)</p>
          </div>
          <div class="pt-5">
            <button class="btn-one">Read Details</button>
          </div>
          <p class="text-gray pt-5">Our prices includes 10% charge</p>
        </div>
        <div class="text-center shadow-xl py-10 rounded-2xl">
          <h4 class="text-2xl font-bold fira pb-8">Flexible Pass</h4>
          <p class="text-5xl font-bold text-yellow">$250.00</p>
          <p class="text-gray pt-2">1 Day</p>
          <div class="pt-10">
            <p class="text-xl font-bold hover:text-gray">Full Conference</p>
            <p class="text-gray">(Includes workshop, coffee etc)</p>
          </div>
          <div class="pt-5">
            <p class="text-xl font-bold hover:text-gray">Live Videos</p>
            <p class="text-gray">(Can access online free)</p>
          </div>
          <div class="pt-5 text-gray">
            <p class="text-xl font-bold">Meet Speaker</p>
            <p class="">(Ask question privately)</p>
          </div>
          <div class="pt-5">
            <button class="btn-one">Read Details</button>
          </div>
          <p class="text-gray pt-5">Our prices includes 10% charge</p>
        </div>
        <div class="text-center shadow-xl py-10 rounded-2xl">
          <h4 class="text-2xl font-bold fira pb-8">Business Pass</h4>
          <p class="text-5xl font-bold text-yellow">$350.00</p>
          <p class="text-gray pt-2">1 Day</p>
          <div class="pt-10">
            <p class="text-xl font-bold hover:text-gray">Full Conference</p>
            <p class="text-gray">(Includes workshop, coffee etc)</p>
          </div>
          <div class="pt-5">
            <p class="text-xl font-bold hover:text-gray">Live Videos</p>
            <p class="text-gray">(Can access online free)</p>
          </div>
          <div class="pt-5">
            <p class="text-xl font-bold hover:text-gray">Meet Speaker</p>
            <p class="text-gray">(Ask question privately)</p>
          </div>
          <div class="pt-5">
            <button class="btn-one">Read Details</button>
          </div>
          <p class="text-gray pt-5">Our prices includes 10% charge</p>
        </div>
      </div>
    </div>
    <!-- price area end -->

    <!-- tax faqs area start -->

    <div class="container mx-auto py-20 my-10 xl:px-40">
      <div class="bg-[#e9f3f5] py-20 lg:px-10 px-5 rounded-3xl">
        <p class="text-3xl lg:text-5xl font-bold play text-[#485159] pb-10">
          Tax FAQs
        </p>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" checked="checked" />
          <div class="collapse-title text-xl font-bold noto py-8">
            My tax situation is not overly complicated, I just don’t want to do
            it anymore, can you help me?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium text-[#485159]">
              Certainly! I can help simplify your tax process. With your basic
              tax situation, I'll manage the paperwork and ensure everything is
              filed correctly, giving you peace of mind and freeing up your time
              for other priorities.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            Is it crucial to engage a tax preparer in my vicinity?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Finding a local tax preparer isn't necessarily crucial, but it can
              have advantages like easier communication and familiarity with
              regional tax laws. However, many remote tax preparers offer
              efficient services through online communication and document
              sharing.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            Do you offer in-person tax preparation services similar to
            traditional brick-and-mortar tax firms?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Do you provide face-to-face tax preparation services akin to
              traditional brick-and-mortar tax firms? This approach ensures
              personalized attention and clear communication throughout the tax
              preparation process, maintaining the convenience and reliability
              of in-person assistance.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            How can you help me minimize my tax liability?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Our experienced CPAs can analyze your business structure, income,
              and expenses to identify potential deductions, credits, and
              tax-saving strategies. We'll work closely with you to optimize
              your tax position and ensure compliance with all tax laws.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            Do you offer year-round support for tax-related queries and issues?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Yes, we provide year-round support to address any tax-related
              questions or concerns that may arise. Whether you have questions
              about estimated tax payments, tax notices, or changing tax laws,
              our team is here to assist you.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            How do you stay up-to-date with changes in tax laws and regulations?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Our CPAs actively monitor changes in tax laws, regulations, and
              court rulings to ensure that our clients receive accurate and
              timely advice. We regularly participate in professional
              development activities and maintain memberships in relevant
              professional organizations.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            What are your fees for small business tax services?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Our fees are determined based on the complexity of your business
              and the specific services required. We offer transparent pricing
              and will provide you with a detailed quote upfront. Our goal is to
              deliver high-quality services at a fair and competitive rate.
            </p>
          </div>
        </div>
        <div class="collapse collapse-plus bg-white mb-8 text-[#485159]">
          <input type="radio" name="my-accordion-3" />
          <div class="collapse-title text-xl font-bold noto py-8">
            Can you assist with tax planning and strategic business advice?
          </div>
          <div class="collapse-content">
            <p class="noto text-[18px] font-medium">
              Absolutely. In addition to tax compliance services, we offer
              proactive tax planning to help you maximize tax savings and
              achieve your long-term financial goals. We can also provide
              strategic business advice to help you improve profitability and
              efficiency.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- tax faqs area end -->
    <!-- footer area start -->
    @include('partials.footer.footer_up')

    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
