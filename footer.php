<?php

   $name = "Zforg";
?>
 <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<!-- ================= FOOTER WITH WAVE ================= -->
<footer class="relative bg-black/70 text-white  ">

  <!-- WAVE -->
  <div class="absolute -top-1 left-0 w-full overflow-hidden leading-none">
    <svg viewBox="0 0 1440 90" preserveAspectRatio="none"
         class="w-[200%] h-[90px] animate-wave">
      <path
        fill="rgba(255,255,255,0.05)"
        d="M0,40 C120,60 240,20 360,30 480,40 600,70 720,60
           840,50 960,20 1080,30 1200,40 1320,60 1440,50
           L1440,0 L0,0 Z" />
    </svg>
  </div>

  <!-- CONTENT -->
  <div class="relative z-10 px-6 pt-32 pb-14 max-w-8xl mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-12">

      <!-- BRAND -->
      <div>
        <div class="flex items-center gap-3 mb-4">
          
      <!-- Logo -->
      <p class="text-2xl font-bold tracking-wide text-white ">
        <a href="index.php"><img src="project images/ZEFORG-LOGO.png" class="h-8" alt="logo"></a>
      </p>
          <span class="text-sm">.india</span>
        </div>
        <p class="text-white/50 max-w-sm text-sm">
          A digital studio crafting design-driven technology
          with clarity and intent.
        </p>
      </div>
       <div>
        <p class="text-xs font-mono tracking-widest text-white/40 mb-5">
          quick links
        </p>

        <ul class="space-y-3 text-white/70 text-sm">
        <li class="cursor-pointer"><a href="index.php">Home</a></li>
        <li class="cursor-pointer"><a href="index.php#about">About</a></li>
        <li class="cursor-pointer"><a href="index.php#services">Services</a></li>
        <li class="cursor-pointer"><a href="index.php#work">Our Work</a></li>
        <li class="cursor-pointer"><a href="form.php">Contact</a></li>
        <li class="cursor-pointer"><a href="t&c.php">Terms & Conditions</a></li>
        </ul>
      </div>
      <!-- CONTACT DETAILS -->
      <div>
        <p class="text-xs font-mono tracking-widest text-white/40 mb-5">
          contact
        </p>

        <ul class="space-y-4 text-white/70 text-sm">

          <!-- Location -->
          
          <li class="flex items-center gap-3">
            <p>Location : </p>
            Jaipur, India
          </li>


          <!-- Email -->
          <li class="flex items-center gap-3">
            <p>E mail :</p>

            <a href="mailto:help.zforg@gmail.com"
              class="">
              help.zforg@gmail.com
            </a>
          </li>

          <!-- Phone -->
          <li class="flex items-center gap-3">
            <p>Contact : </p>
            +91 9680290425
          </li>

          <!-- WhatsApp -->
          <li class="flex items-center gap-3">
          <!-- WhatsApp Icon -->
           <p>Whatsapp: </p>
          <a href="https://wa.me/9462794522" target="_blank" class="hover:text-white">
            +91 9462794522
          </a>
        </li>


        </ul>
      </div>

      <!-- CONNECT -->
      <div class="">
        <p class="text-xs font-mono tracking-widest text-white/40 mb-5">
          connect
        </p>

        <!-- EMAIL INPUT -->
        <div class="flex gap-2 mb-6">
          <input
            type="email"
            placeholder="your@email.com"
            class="w-full px-4 py-2 rounded-lg
                   bg-white/5 border border-white/10
                   text-sm focus:outline-none focus:border-white/30"
          />
          <button class="px-4 rounded-lg bg-white/10 hover:bg-white/20 transition">
           <svg
    class="w-5 h-5"
    stroke="currentColor"
    stroke-width="1.5"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
          </button>
        </div>
        

      </div>

    </div>

    <!-- BOTTOM -->
    <div class="mt-16 pt-6 border-t border-white/10 flex flex-col md:flex-row justify-between text-xs text-white/40">
      <span>© 2026 Zforg | All Rights Reserved</span>
       <span><a href="t&c.php">terms & conditions</a></span>
    </div>

  </div>
  
</footer>

