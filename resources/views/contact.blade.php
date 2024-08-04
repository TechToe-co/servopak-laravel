<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')


</head>

<body>
    
    <!-- navbar start -->
    @include('partials.navbar.navbar')
    <!-- navbar end -->
    <!-- banner area start -->
    <div class="bg-[#00000082] bg-blend-overlay bg-[url('../img/truck2.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white">
        <div class="container mx-auto">
            <div class="text-center py-32">
                <p class="text-6xl font-bold fira">Contact</p>
                <div class="flex justify-center pt-3">
                    <a class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
                        href="#">Home</a>

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
                    <h2 class="text-3xl xl:text-5xl font-bold pt-5 pb-10 fira !leading-[1.3]">
                        Connect with Our Support Team
                    </h2>
                </div>

                <div class="">

                    {{-- form in contact --}}



                    <form id="reused_form" action="{{ url('/submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text font-bold">Name</span>
                            </div>
                            <input id="name" name="name" type="text" placeholder="Your name"
                                class="input input-bordered w-full max-w-xs" />

                        </label>

                        

                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text font-bold">Phone</span>
                            </div>
                            <input id="telephone" name="telephone" type="text" placeholder="+49xxxxxxxxxx"
                                class="input input-bordered w-full max-w-xs" />

                        </label>

                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text font-bold">Message</span>
                            </div>
                            <textarea id="comments" name="message" class="textarea textarea-bordered" placeholder="Your Message"></textarea>

                        </label>
                        <div class="mt-5 text-right">
                            <button id="sub_all" type="submit" class="btn-one">
                                <i class="fa-solid fa-envelope"></i> SUBMIT
                            </button>
                        </div>
                    </form>
                    <script>
                        
                        document.getElementById('sub_all').addEventListener('click', function(event) {
                            event.preventDefault(); 
                            document.getElementById('reused_form').submit(); // Submit the form
                        });
                    </script>

                    {{-- END form in contact --}}


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
                    <h2 class="text-3xl xl:text-5xl font-bold pt-5 pb-8 fira !leading-[1.3]">
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
                        class="fa-solid fa-phone text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <div class="ps-5">
                        <p class="text-xl font-bold pb-3">Have any question?</p>
                        <a class="text-gray text-xl" href="#">917-325-3600</a>
                    </div>
                </div>
                <div class="flex pt-10">
                    <i
                        class="fa-solid fa-envelope text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <div class="ps-5">
                        <p class="text-xl font-bold pb-3">Write email</p>
                        <a class="text-gray text-xl" href="mailto:taimour@servopak.co">taimour@servopak.co</a>
                    </div>
                </div>
                <div class="flex pt-10">
                    <i
                        class="fa-solid fa-location-arrow text-xl bg-black text-white p-7 hover:bg-yellow hover:text-black transition-all duration-300"></i>
                    <div class="ps-5">
                        <p class="text-xl font-bold pb-3">Visit anytime</p>
                        <a class="text-gray text-xl" href="#">Apt T1 6626 Ronald Rd MD Capitol Heights 20743</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact area end -->
    <div class="container mx-auto pt-10">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3106.1849613470486!2d-76.89603284546763!3d38.87400987542251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7bf1ec9298313%3A0x713f85cd8d735a82!2s6626%20Ronald%20Rd%20md%2C%20Capitol%20Heights%2C%20MD%2020743%2C%20USA!5e0!3m2!1sen!2s!4v1722029249158!5m2!1sen!2s"
            width="100%" height="550" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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
