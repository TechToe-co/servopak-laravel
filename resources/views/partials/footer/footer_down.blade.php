<div class="bg-black text-white">
    <div class="container xl:px-40 px-5 mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-20">
            <div class="md:col-span-1 lg:col-span-4">
                <a class="text-4xl font-bold flex gap-2" href="/">
                    <img src="{{ asset('storage/' . $client->id . '/' . $client->logo) }}" alt="Client Logo"
                        class="img-fluid w-60 pe-2 mt-1" />
                </a>
                <p class="pt-5 text-gray kumbh">
                    {{$client->name}} is dedicated to revolutionizing urban mobility by
                    offering smart, sustainable, and efficient transit solutions. Our
                    mission is to enhance the way people navigate cities.
                </p>
            </div>
            <div class="md:col-span-1 lg:col-span-2">
                <p class="text-xl font-bold pb-7 fira">Our Company</p>
                <ul>
                    <li class="pb-2">
                        <a class="text-gray hover:text-yellow transition-all duration-300 hover:underline"
                            href="/">Home</a>
                    </li>
                    <li class="pb-2">
                        <a class="text-gray hover:text-yellow transition-all duration-300 hover:underline"
                            href="/service">Services</a>
                    </li>
                    <li class="">
                        <a class="text-gray hover:text-yellow transition-all duration-300 hover:underline"
                            href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="md:col-span-1 lg:col-span-3">
                <p class="text-xl font-bold pb-7 fira">Contact Us</p>
                <ul>
                    <li class="pb-2">
                        <a class="text-gray hover:text-yellow transition-all duration-300 hover:underline"
                            href="#">Email:{{$contact->email}}
                        </a>
                    </li>
                    <li class="pb-2">
                        <a class="text-gray hover:text-yellow transition-all duration-300 hover:underline"
                            href="#">Phone:{{$contact->phone_number}}</a>
                    </li>
                </ul>
            </div>
            <div class="md:col-span-1 lg:col-span-3">
                <p class="text-xl font-bold pb-7 fira">Our Address</p>
                <p class="text-gray">
                    {{$contact->address}}
                </p>
                <div class="mt-4">
                    <a class="text-yellow hover:text-white transition-all duration-300 me-5" href="#"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a class="text-yellow hover:text-white transition-all duration-300 me-5" href="#"><i
                            class="fa-brands fa-youtube"></i></a>

                    <a class="text-yellow hover:text-white transition-all duration-300 me-5" href="#"><i
                            class="fa-brands fa-x-twitter"></i></a>

                    <a class="text-yellow hover:text-white transition-all duration-300 me-5" href="#"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="border-b border-gray pt-20"></div>
        <div class="grid grid-cols-1 lg:grid-cols-2 pt-10">
            <div>
                <p>Copyright © 2024 {{$client->name}}. All Rights Reserved.</p>
            </div>
            <div class="text-end mt-5 pt-5 lg:mt-[-20px]">
                <a class="hover:text-yellow transition-all duration-300" href="privacy">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>