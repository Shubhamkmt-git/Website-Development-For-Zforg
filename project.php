<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zforg | Project</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="relative bg-black text-white overflow-x-hidden">

  <?php include "nav.php"; ?>

  <!-- Background blobs -->
   <div class="fixed inset-0 -z-10">
        <span class="blur-ball ball-1"></span>
        <span class="blur-ball ball-2"></span>
        <span class="blur-ball ball-3"></span>
    </div>

  <section class="text-white py-24 relative overflow-x-hidden">
  <div class="max-w-[1200px] mx-auto px-6">

    <!-- Header -->
    <div class="mb-14">
      <h2 class="text-4xl font-semibold">Our Work</h2>
      <p class="mt-3 text-white/60 max-w-xl">
        A selection of projects designed and built with clarity,
        performance, and modern web systems.
      </p>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Project Card -->
      <div
        class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <!-- Image -->
        <div class="h-60 overflow-hidden">
          <img
            src="project images/furnioo.png"
            alt=""
            class="rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <!-- Content -->
        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">Furnioo.co</h3>
          <p class="text-sm text-white/60">
            Interior designer landing page
          </p>
              <a href="work\furnioo\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

      <!-- Project Card -->
      <div
        class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <div class="h-60 overflow-hidden">
          <img
            src="project images/littlemoon.png"
            alt=""
            class="rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">LittleMoon.</h3>
          <p class="text-sm text-white/60">
           School Landing Web page.
        </p>
           <a href="work\littlemoon\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

      <!-- Project Card -->
      <div
       class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <div class="h-60 overflow-hidden">
          <img
            src="project images\tajjlee.png"
            alt=""
            class=" rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">Brand Website</h3>
          <p class="text-sm text-white/60">
           Hotel website
          </p>
        <a href="work\taj\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

       <!-- Project Card -->
      <div
        class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <!-- Image -->
        <div class="h-60 overflow-hidden">
          <img
            src="project images/furnioo.png"
            alt=""
            class="rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <!-- Content -->
        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">Furnioo.co</h3>
          <p class="text-sm text-white/60">
            Interior designer landing page
          </p>
              <a href="work\furnioo\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

      <!-- Project Card -->
      <div
        class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <div class="h-60 overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1559027615-cd4628902d4a"
            alt=""
            class="rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">Dashboard UI</h3>
          <p class="text-sm text-white/60">
            Component-driven admin interface.
          </p>
           <a href="work\furnioo\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

      <!-- Project Card -->
      <div
       class="rounded-2xl bg-white/5 border border-white/10
                  backdrop-blur-xl p-6">

        <div class="h-60 overflow-hidden">
          <img
            src="https://images.unsplash.com/photo-1545235617-9465d2a55698"
            alt=""
            class=" rounded-2xl w-full h-full object-cover
                   transition-transform duration-700
                   group-hover:scale-110"
          >
        </div>

        <div class="p-6 flex flex-col gap-3">
          <h3 class="text-lg font-medium">Brand Website</h3>
          <p class="text-sm text-white/60">
            High-impact brand presence and UX.
          </p>
        <a href="work\furnioo\index.html"
           
                class="shine-btn bg-white/5 px-8 py-3 rounded text-center
                 border border-white/20 hover:bg-white/10 hover:border-white/30 mt-10">
            View 
            </a>
        </div>
      </div>

    </div>
  </div>
</section>
 
  <script src="script.js"></script>

  <?php include "footer.php"; ?>

</body>
</html>
