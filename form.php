<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zforg | Contact</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="relative bg-black text-white overflow-x-hidden">

  <?php include "nav.php"; ?>

  <!-- Background blobs -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="light-blob top-10 left-10"></div>
    <div class="light-blob orange bottom-20 right-10"></div>
    <div class="light-blob pink top-1/2 left-1/2"></div>
  </div>

  <!-- FORM SECTION -->
  <section class="relative min-h-screen flex justify-center items-center px-4 p-10">

    <div
      class="glass-card relative z-10
             w-full max-w-md sm:max-w-xl md:max-w-4xl
             mx-auto rounded-2xl
             p-6 sm:p-8 md:p-12">

      <!-- Heading -->
      <div class="text-center mb-8 sm:mb-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-semibold">
          Send a message
        </h2>
      </div>

      <!-- Form -->
    <form action="https://api.web3forms.com/submit" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5">

  <input type="hidden" name="access_key" value="c3c25e34-40a3-49f3-a953-85753790d7aa">

  <input type="hidden" name="from_name" value="Zforg Website">

  <input type="hidden" name="redirect" value="https://zforg.kesug.com/thankyou.php">

  <input name="name" required
         class="input-glow w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg"
         placeholder="Full Name" />

  <input type="email" name="email" required
         class="input-glow w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg"
         placeholder="Email Address" />

  <input name="contact" required
         class="input-glow w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg"
         placeholder="Phone Number" />

  <input name="wcontact"
         class="input-glow w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg"
         placeholder="Whatsapp Number" />

  <input name="companyname"
         class="input-glow w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg"
         placeholder="Company name" />

  <select name="subject"
          class="input-glow w-full px-4 py-3 bg-transparent border border-white/50 rounded-lg">
    <option class="text-white bg-black">Web Development</option>
    <option class="text-white bg-black">UI/UX Design</option>
    <option class="text-white bg-black">Graphic Design</option>
    <option class="text-white bg-black">Branding</option>
    <option class="text-white bg-black">WordPress</option>
    <option class="text-white bg-black">Maintenance</option>
    <option class="text-white bg-black">Other</option>
  </select>

  <textarea rows="5" name="message" required
    class="input-glow md:col-span-2 w-full px-4 py-3 bg-transparent border border-white/20 rounded-lg resize-none"
    placeholder="Tell us about your project..."></textarea>

  <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

  <div class="md:col-span-2 flex justify-center mt-6">
    <button type="submit" class="shine-btn w-full sm:w-auto px-10 py-3 rounded-full border border-white/30">
      Send Message
    </button>
  </div>

</form>
      <p class="mt-2 text-white/60 text-center opacity-[20%]">
         we will connect back to you soon!
        </p>
    </div>
      
  </section>
  
<a href="https://wa.me/919462794522?text=Hello%20Team%20Zforg%2C%20we%20visited%20your%20website%20and%20would%20like%20to%20discuss%20a%20project%20with%20you."
target="_blank"
class="fixed bottom-20 right-6 z-[9999] hidden md:flex w-14 h-14 items-center justify-center
rounded-2xl bg-white/10 backdrop-blur-xl border border-white/20
shadow-lg shadow-purple-800/70 hover:scale-110 transition">

<svg xmlns="http://www.w3.org/2000/svg" 
viewBox="0 0 24 24"
fill="currentColor"
class="w-7 h-7 text-gray-300">

<path d="M12.04 2C6.58 2 2.15 6.43 2.15 11.89c0 1.93.5 3.8 1.46 5.44L2 22l4.82-1.57c1.57.86 3.34 1.31 5.22 1.31 5.46 0 9.89-4.43 9.89-9.89S17.5 2 12.04 2zm0 18.04c-1.67 0-3.3-.45-4.73-1.3l-.34-.2-2.86.93.93-2.78-.22-.36a7.9 7.9 0 01-1.21-4.24c0-4.38 3.56-7.94 7.94-7.94s7.94 3.56 7.94 7.94-3.56 7.95-7.95 7.95zm4.38-5.95c-.24-.12-1.41-.7-1.63-.78-.22-.08-.38-.12-.54.12-.16.24-.62.78-.76.94-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.94-1.21-.72-.64-1.21-1.43-1.35-1.67-.14-.24-.01-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.48-.4-.42-.54-.43h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.69 2.58 4.1 3.61.57.25 1.02.4 1.37.51.58.18 1.11.15 1.53.09.47-.07 1.41-.58 1.61-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28z"/>

</svg>
</a>

  <script src="script.js"></script>

  <?php include "footer.php"; ?>

</body>
</html>
