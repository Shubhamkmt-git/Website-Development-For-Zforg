<?php

   $name = "Zforg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zforg</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="style.css">
     <link rel="icon" type="image/x-icon" href="project images/ZEFORG-LOGO.png">
     
</head>
<body>
   <nav class="mx-6 my-6 rounded-xl border border-purple-800/30 bg-purple-600/10 backdrop-blur-md shadow-lg shadow-purple-800/20">
    <div class="flex items-center justify-between px-6 py-2">

      <!-- Logo -->
      <p class="text-2xl font-bold  text-white ">
        <a href="index.php"><img src="project images/ZEFORG-LOGO.png" class="h-16" alt="logo"></a>
      </p>

      <!-- Desktop Menu -->
      <ul class="hidden md:flex items-center gap-10 text-white font-medium">
        <li class="cursor-pointer"><a href="index.php">Home</a></li>
        <li class="cursor-pointer"><a href="index.php#about">About</a></li>
        <li class="cursor-pointer"><a href="index.php#services">Services</a></li>
        <li class="cursor-pointer"><a href="index.php#work">Our Work</a></li>

        <li>
          <a href="form.php"
   class="shine-btn inline-flex items-center justify-center
          bg-black/30 px-8 py-3 rounded-xl
          border border-purple-800/30 hover:bg-black/30">
   Get in touch
</a>

        </li>
      </ul>

      <!-- Mobile Menu Button -->
      <button
  id="menuBtn"
  class="md:hidden flex items-center justify-center
         w-8 h-8 text-white cursor-pointer">

  <!-- Hamburger icon -->
  <svg
    id="menuIcon"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke="white"
    stroke-width="2">
    <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
  </svg>
</button>


    </div>

    <!-- Mobile Menu -->
    <div
      id="mobileMenu"
      class="hidden md:hidden mx-4 mb-4 rounded-xl
             border border-purple-800
             bg-black/80 backdrop-blur-md
             shadow-lg shadow-purple-800/10
             px-6 py-6 text-white">

      <ul class="flex flex-col gap-5 text-center font-medium">
      <li class="cursor-pointer"><a href="index.php">Home</a></li>
      <li class="cursor-pointer"><a href="index.php#about">About</a></li>
      <li class="cursor-pointer"><a href="index.php#services">Services</a></li>
      <li class="cursor-pointer"><a href="index.php#work">Our Work</a></li>

        <li>
          <button class="shine-btn bg-black/30 px-8 py-3 rounded-xl border border-purple-400/30 hover:bg-black/30 ">
            <a href="form.php"> Get in touch</a>
          </button>
        </li>
      </ul>
    </div>
</nav>