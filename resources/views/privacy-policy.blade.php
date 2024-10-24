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
    <div class="bg-[#00000082] bg-blend-overlay bg-[url('../img/truck2.jpg')] xl:h-[70vh] h-[100vh] bg-cover text-white" style="max-height: 400px">
        <div class="container mx-auto">
            <div class="text-center py-32">
                <p class="text-6xl font-bold fira">Privacy Policy</p>
                <div class="flex justify-center pt-3">
                    <a class="text-yellow hover:text-white transition-all duration-300 font-semibold kumbh"
                        href="/">Home</a>

                    <p class="font-semibold kumbh">
                        <i class="fa-solid fa-angle-right px-2"></i>Privacy Policy
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- contact area start -->

    <div class="container mx-auto py-20 xl:px-40 px-5">
        <p class="mt-4">At <strong>{{ $client->name }}</strong>, we value your privacy and are committed to protecting your personal information. This Privacy Policy outlines the types of information we collect, how we use and protect that information, and your rights regarding the data you provide when visiting our website or using our services.</p>

        <h2 class="text-2xl font-semibold mt-8">1. Information We Collect</h2>
        <p class="mt-2">When you interact with our website, we may collect the following information through our contact form:</p>
        <ul class="list-disc list-inside mt-2">
            <li><strong>Personal Information</strong>: Your name, email address, and phone number when you voluntarily submit these details.</li>
            <li><strong>Other Data</strong>: We may collect general information such as your IP address, browser type, and referring URLs through cookies and similar technologies for website performance and analytics purposes.</li>
        </ul>

        <h2 class="text-2xl font-semibold mt-8">2. How We Use Your Information</h2>
        <p class="mt-2">We use the information we collect for the following purposes:</p>
        <ul class="list-disc list-inside mt-2">
            <li>To respond to your inquiries submitted via the contact form.</li>
            <li>To send updates or marketing communications about our truck dispatch services, if you have opted in to receive such information.</li>
            <li>To improve our website functionality, user experience, and marketing efforts through analytics.</li>
        </ul>
        <p class="mt-2">We will not sell, trade, or share your personal information with any third parties unless required by law.</p>

        <h2 class="text-2xl font-semibold mt-8">3. Data Security</h2>
        <p class="mt-2">We take reasonable steps to protect the personal information you provide against unauthorized access, disclosure, alteration, or destruction. However, no internet transmission is completely secure, and we cannot guarantee absolute security.</p>

        <h2 class="text-2xl font-semibold mt-8">4. Your Rights</h2>
        <p class="mt-2">You have the following rights concerning your personal information:</p>
        <ul class="list-disc list-inside mt-2">
            <li><strong>Access and Update</strong>: You can request access to or update your personal information at any time by contacting us.</li>
            <li><strong>Opt-out</strong>: If you no longer wish to receive marketing communications from us, you may unsubscribe by following the instructions in any email we send or by contacting us directly.</li>
            <li><strong>Deletion</strong>: You can request that we delete your personal information from our systems, subject to certain legal obligations.</li>
        </ul>

        <h2 class="text-2xl font-semibold mt-8">5. Cookies</h2>
        <p class="mt-2">We may use cookies and similar tracking technologies to enhance your browsing experience, analyze site traffic, and personalize content. You can adjust your browser settings to refuse cookies, but some parts of the website may not function properly as a result.</p>

        <h2 class="text-2xl font-semibold mt-8">6. Third-Party Links</h2>
        <p class="mt-2">Our website may contain links to third-party websites. We are not responsible for the privacy practices of other websites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

        <h2 class="text-2xl font-semibold mt-8">7. Changes to This Policy</h2>
        <p class="mt-2">We reserve the right to modify this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated policy on our website, and we will update the "Effective Date" at the top of this page.</p>

        <h2 class="text-2xl font-semibold mt-8">8. Contact Us</h2>
        <p class="mt-2">If you have any questions about this Privacy Policy or your personal information, please contact us at:</p>
        <ul class="list-disc list-inside mt-2">
            <li><strong>{{ $client->name }}</strong></li>
            <li><strong>{{ $contact->address }}</strong></li>
            <li><strong>{{ $contact->phone_number }}</strong></li>
        </ul>
    </div>

    <!-- footer area start -->
    @include('partials.footer.footer_down')
    <!-- footer area end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/form.js"></script>
</body>



</html>