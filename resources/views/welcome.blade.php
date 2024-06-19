<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>....</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class="bg-gray-100">

    <nav id="navbar" class="fixed w-full bg-white shadow-md navbar-visible">
        <div class="container mx-auto px-8 py-5 flex justify-between items-center">
            <div class="text-xl font-bold">Logo</div>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
              <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</a>
              <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pricing</a>
              <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>
        </div>
    </nav>



    <section class="relative pb-10 pt-20 md:pt-32 h-1527">
    <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 block dark:hidden h-full">
      <img
        src="/images/gradient.jpg"
        alt="gradient"
        class="h-full w-full"
      />
    </picture>
    <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 hidden dark:block">
      <img
        src="/images/gradient_dark.jpg"
        alt="gradient dark"
        class="h-full w-full"
      />
    </picture>

    <div class="container h-full mx-auto">
      <div class="grid h-full items-center gap-4 md:grid-cols-12">
        <div class="col-span-6 flex h-full flex-col items-center justify-center py-10 md:items-start md:py-20 xl:col-span-4">
          <h1 class="text-jacarta-700 font-bold font-display mb-6 text-center text-5xl dark:text-white md:text-left lg:text-6xl xl:text-7xl">
            Buy, sell and collect NFTs.
          </h1>
          <p class="dark:text-jacarta-200 mb-8 text-center text-lg md:text-left">
            The world's largest digital marketplace for crypto collectibles and
            non-fungible tokens
          </p>
          <div class="flex space-x-4">
            <a href="/create" class="bg-accent shadow-accent-volume hover:bg-accent-dark w-36 rounded-full py-3 px-8 text-center font-semibold text-white transition-all">
              Upload
            </a>
            <a href="/collection/explore_collection" class="text-accent shadow-white-volume hover:bg-accent-dark hover:shadow-accent-volume w-36 rounded-full bg-white py-3 px-8 text-center font-semibold transition-all hover:text-white">
              Explore
            </a>
          </div>
        </div>

        <!-- Hero image -->
        <div class="col-span-6 xl:col-span-8">
          <div class="relative text-center md:pl-8 md:text-right">
            <img
              src="/images/hero/hero.jpg"
              alt=""
              class="hero-img mt-8 inline-block w-72 rotate-[8deg] sm:w-full lg:w-[24rem] xl:w-[35rem]"
            />
            <img
              src="/images/hero/3D_elements.png"
              alt=""
              class="animate-fly absolute top-0 md:-right-[10%]"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
