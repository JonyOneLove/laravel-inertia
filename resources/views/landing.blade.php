
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
    <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.8.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/landing/assets/images/favicon.ico" />

    <!-- Css -->
    <link href="/landing/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="/landing/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="/landing/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/landing/assets/css/icons.css" />
    <link rel="stylesheet" href="/landing/assets/css/tailwind.css" />
    <!-- Scripts -->

</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="/landing/assets/images/logo.svg"  width="25px"  class="inline-block dark:hidden" alt=""> BacklinkTracker
            <img src="/landing/assets/images/logo.svg"  width="25px"  class="hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <!--            <li class="inline mb-0">
                            <a href="" class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="h-4 w-4"></i></a>
                        </li>

                        <li class="inline ps-1 mb-0">
                            <a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="h-4 w-4"></i></a>
                        </li>-->

            @if(auth()->user())
                <a href="/dashboard" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a  href="/login" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 px-2">Log in</a>

                <a   href="/register" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 px-2">Register</a>
            @endif
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li><a href="#pricing" class="sub-menu-item">Pricing</a></li>
                <li><a href="/contact" class="sub-menu-item">Contact</a></li>
                <li><a href="/blog" class="sub-menu-item">Blog</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 overflow-hidden">
    <div class="container">
        <div class="relative grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="md:col-span-7">
                <div class="md:me-6">
                    <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white relative">The Best Platform to Track Your Linkbuilding <br> <span class="after:absolute after:end-0 after:start-0 after:bottom-3 after:lg:h-3 after:h-2 after:w-auto after:rounded-md after:bg-indigo-600/30 relative text-indigo-600">ROI</span></h4>
                    <p class="text-slate-400 text-lg max-w-xl">Track how much you spend on acquiring links from different platforms and contractors and measure results of your efforts in the dashboard</p>

                    <div class="relative mt-8">
                        <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2">Get Started</a>
<!--                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i class="mdi mdi-play text-xl align-middle"></i></a><small class="text-sm font-semibold uppercase align-middle ms-2">Watch Now</small>-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-5">
                <div class="relative after:content-[''] after:absolute after:md:bottom-12 after:-bottom-20 lg:after:-start-0 md:after:-start-20 after:-start-24
                        after:bg-indigo-600 after:shadow-2xl after:shadow-indigo-600/40 after:-z-1 ltr:after:rotate-[130deg] rtl:after:-rotate-[130deg] after:w-[75rem] after:md:h-[55rem] after:h-[30rem] after:rounded-[20rem]">
                    <img src="/landing/assets/images/laptop.png" class="lg:max-w-none md:max-w-md" alt="">
                </div>
            </div><!--end col-->

            <div class="overflow-hidden after:content-[''] after:absolute after:h-32 after:w-32 after:bg-indigo-600/5 after:top-16 after:start-0  after:-z-1 after:rounded-3xl after:animate-[spin_10s_linear_infinite]"></div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Business Partner -->
<section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
    <div class="container">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            <div class="mx-auto py-4">
                <img src="/landing/assets/images/Upwork-logo.svg" class="h-16" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="/landing/assets/images/Fiverr_Logo_09.2020.svg" class="h-8 mt-3" alt="">
            </div>

<!--            <div class="mx-auto py-4">
                <img src="/landing/assets/images/client/lenovo.svg" class="h-6" alt="">
            </div>-->

<!--            <div class="mx-auto py-4">
                <img src="/landing/assets/images/client/paypal.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="/landing/assets/images/client/shopify.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="/landing/assets/images/client/spotify.svg" class="h-6" alt="">
            </div>-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<!-- Start -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
    <div class="container lg mx-auto">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">When you're acquiring backlinks, find which ones are improving your rankings in search engine</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-adjust-circle"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Discover Most Effective Ways to Acquire Backlinks</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-circuit"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Get Isnights</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Get insights into your backlink building strategy and most optimal ROI.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-28 w-28 fill-indigo-600/5 mx-auto rotate-[30deg]"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                        <i class="uil uil-fire"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="" class="text-xl font-medium hover:text-indigo-600 duration-500 ease-in-out">Find Toxic Backlinks</a>
                    <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Find which links might harm your rankings instead of improving them.</p>
                </div>
            </div>
            <!-- Content -->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
            <div class="relative">
                <div class="md:me-10">
                    <img src="/landing/assets/images/saas/about.jpg" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                </div>
                <div class="absolute -bottom-10 end-0 p-6 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 md:w-80 w-60">
                    <h5 class="text-lg font-semibold mb-3">Acme Company Website</h5>
                    <p class="text-slate-400">Acquired 1245 backlinks</p>
                    <div class="flex justify-between mt-3 mb-2">
                        <span class="text-slate-400">Spent Budget:</span>
                        <span class="text-slate-400">84%</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 84%"></div>
                    </div>
                    <div class="flex justify-between mt-3 mb-2">
                        <span class="text-slate-400">Average Domain Authority</span>
                        <span class="text-slate-400">21</span>
                    </div>
                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                        <div class="bg-red-600 h-[6px] rounded-full" style="width: 21%"></div>
                    </div>
                </div>
            </div>

            <div class="lg:ms-8 mt-8 md:mt-0">
                <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Manage all your links <br> on this one plateform</h4>
                <p class="text-slate-400">One of the most challenging things in backlink building and SEO in general is that it's very difficult to measure results</p>

                <div class="mt-4">
                    <a href="/register" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Get a free trial <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="relative order-1 md:order-2">
                <img src="/landing/assets/images/saas/classic03.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
            </div>

            <div class="lg:me-8 order-2 md:order-1">
                <h4 class="mb-4 text-2xl leading-normal font-medium">Manage all your linkbuilding for all your projects in one place</h4>
<!--                <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>-->
                <ul class="list-none text-slate-400 mt-4">
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Track all your projects</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Track different platforms and contractors</li>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Track amount of resources spent on linkbuilding</li>
                </ul>

                <div class="mt-4">
                    <a href="/register" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Get a free trial <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End  -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container" id="pricing">
        <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5">
                <div class="ltr:lg:text-left rtl:lg:text-right text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Our Comfortable Rates</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">An ultimate tool to track baclink building for your projects</p>

                    <div class="mt-6">
                        <a href="/register" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="uil uil-master-card"></i> Subscribe Now</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7 mt-8 lg:mt-0">
                <div class="lg:ms-8">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">
                        <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md md:scale-110 z-3 bg-white dark:bg-slate-900">
                            <div class="p-6 py-8">
                                <h6 class="font-bold uppercase mb-5 text-indigo-600">Professional</h6>

                                <div class="flex mb-5">
                                    <span class="text-xl font-semibold">$</span>
                                    <span class="price text-4xl font-semibold mb-0">39</span>
                                    <span class="text-xl font-semibold self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-none text-slate-400">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Full Access</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Unlimited number of projects</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Unlimited number of platforms and contractors</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Unlimited number of backlinks</li>
                                </ul>
                                <a href="/register" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Get Started</a>
                            </div>
                        </div>

<!--                        <div class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md z-2 bg-gray-50 dark:bg-slate-800">
                            <div class="p-6 py-8 md:ps-10">
                                <h6 class="font-bold uppercase mb-5 text-indigo-600">Professional</h6>

                                <div class="flex mb-5">
                                    <span class="text-xl font-semibold">$</span>
                                    <span class="price text-4xl font-semibold mb-0">59</span>
                                    <span class="text-xl font-semibold self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-none text-slate-400">
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Full Access</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Source Files</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Free Appointments</li>
                                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Enhanced Security</li>
                                </ul>
                                <a href="" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Try it Now</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <!--Testimonials-->
<!--    <div class="container mt-20">
        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
        </div>&lt;!&ndash;end grid&ndash;&gt;

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Christa Smith</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>

                <div class="tiny-slide text-center">
                    <div class="customer-testi">
                        <div class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                            <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                            <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                            <ul class="list-none mb-0 text-amber-400 mt-3">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>

                        <div class="text-center mt-5">
                            <img src="/landing/assets/images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                            <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                            <span class="text-slate-400 text-sm">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>&lt;!&ndash;end grid&ndash;&gt;
    </div>&lt;!&ndash;end container&ndash;&gt;-->
    <!-- / Testimonials-->

</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="relative md:py-24 py-16 md:pt-0 pt-0">
    <div class="container">
        <div class="grid grid-cols-1 justify-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
            <div class="relative z-1">
                <div class="grid grid-cols-1 ltr:md:text-left rtl:md:text-right text-center justify-center">
                    <div class="relative">
                        <img src="/landing/assets/images/saas/home.png" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                               class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 ltr:md:text-left rtl:md:text-right text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/50 text-lg font-semibold">Get Free Trial</h6>
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">Get An Easy Start <br> With BacklinkTracker Now</h3>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <p class="text-white/50 max-w-xl mx-auto mb-2">An ultimate tool to track baclink building for your projects</p>
                                        <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row -->
    </div><!--end container-->

    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <img src="/landing/assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
            </div>

            <div class="lg:col-span-7 md:col-span-6">
                <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Coming soon</span>
                <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                <p class="text-slate-400 max-w-xl mb-0">Backlink Tracker will soon be available for smartphones</p>
                <div class="my-5">
                    <a href=""><img src="/landing/assets/images/app/app.png" class="m-1 inline-block" alt=""></a>

                    <a href=""><img src="/landing/assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                </div>

                <div class="inline-block">
                    <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                        <i data-feather="smartphone" class="me-2 text-indigo-600 h-10 w-10"></i>
                        <div class="content">
                            <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                            <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end gird-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Footer Start -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="/landing/assets/images/logo.svg" width="25px" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">An ultimate tool to track baclink building for your projects</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="mailto:hello@nomadicsoft.io" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
<!--                                <li class="inline"><a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>

                                <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-file align-middle" title="customization"></i></a></li>-->
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
<!--                                <li><a href="page-aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> About us</a></li>
                                <li class="mt-[10px]"><a href="page-services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Services</a></li>
                                <li class="mt-[10px]"><a href="page-team.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Team</a></li>
                                <li class="mt-[10px]"><a href="page-pricing.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Pricing</a></li>
                                <li class="mt-[10px]"><a href="portfolio-creative-four.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Project</a></li>
                                <li class="mt-[10px]"><a href="blog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Blog</a></li>
                                <li class="mt-[10px]"><a href="auth-login.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Login</a></li>-->
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="/terms-of-service" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                <li class="mt-[10px]"><a href="/privacy-policy" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
<!--                                <li class="mt-[10px]"><a href="documentation.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Documentation</a></li>
                                <li class="mt-[10px]"><a href="changelog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Changelog</a></li>
                                <li class="mt-[10px]"><a href="widget.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Widget</a></li>-->
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                            <p class="mt-6">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="foot-subscribe my-3">
                                        <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                            <input type="email" class="form-input bg-gray-800 border border-gray-800 text-gray-100 ps-12 focus:shadow-none" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>

                                    <button type="submit" id="submitsubscribe" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                </div>
                            </form>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="ltr:md:text-left rtl:md:text-right text-center">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Backlinktracker.io. Created with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://nomadicsoft.io" rel="nofollow" target="_blank" class="text-reset">Nomadic Soft</a>.</p>
                </div>

                <ul class="list-none ltr:md:text-right rtl:md:text-left text-center mt-6 md:mt-0">
                    <li class="inline"><a href=""><img src="/landing/assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href=""><img src="/landing/assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href=""><img src="/landing/assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href=""><img src="/landing/assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href=""><img src="/landing/assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Start Cookie Popup -->
<div class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
    <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
    <div class="cookie-popup-actions ltr:text-right rtl:text-left">
        <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
    </div>
</div>
<!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- Switcher
<div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
</div>
 Switcher -->


<!-- JAVASCRIPTS -->
<script src="/landing/assets/libs/tobii/js/tobii.min.js"></script>
<script src="/landing/assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="/landing/assets/libs/feather-icons/feather.min.js"></script>
<script src="/landing/assets/js/plugins.init.js"></script>
<script src="/landing/assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
