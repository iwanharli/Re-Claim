<?php
    $pageTitle = '404 Page Not Found';
    $pageDescription = 'Re:Claim is a centralized lost and found tracking system for West Visayas State University - Main Campus.';
    $canonicalUrl = APP_URL;
    $ogImage = APP_URL . '/assets/Re_Claim Logo Icon.svg';
    $extraHead = '<link rel="stylesheet" href="/css/app.css">';
    require __DIR__ . '/../partials/head.php';
?>

<body class="min-h-screen flex flex-col antialiased">
    <?php require __DIR__ . "/../mainpages/header.php" ?>

    <main class="flex-grow flex items-center justify-center py-16 px-6 relative overflow-hidden">
        <div class="max-w-4xl w-full relative z-10 flex flex-col items-center">

            <div class="rounded-[3rem] p-8 md:p-16 w-full text-center relative overflow-hidden">

                <!-- 404 Visual -->
                <div class="relative flex justify-center overflow-visible">
                    <h1
                        class="flex items-center justify-center select-none font-outfit text-primary-500 text-[8rem] md:text-[12rem] font-extrabold -translate-y-4">
                        404
                    </h1>
                </div>
                <div class="max-w-xl mx-auto">
                        <h2 class="font-outfit text-3xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                            <span class="text-black">Page Not Found</span>
                        </h2>
                        <p class="text-md md:text-lg text-gray-500 mb-10 leading-relaxed font-light">
                            The page you're looking for did not exist. It might have been moved, deleted, or never existed in the first place.
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="/found" class="group flex items-center justify-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white text-md font-semibold rounded-2xl transition-all duration-300 gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Back to Home
                            </a>
                            <a href="/contact"
                                class="group flex items-center justify-center px-8 py-3 bg-white border border-gray-200 hover:border-primary-300 text-gray-700 hover:text-primary-600 text-md font-semibold rounded-2xl transition-all duration-300 hover:bg-white-100">
                                Contact Support
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </main>

    <?php require __DIR__ . "/../mainpages/footer.php" ?>
</body>

</html>