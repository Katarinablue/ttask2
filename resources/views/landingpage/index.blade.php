<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Photographer | Responsive Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-sans text-gray-800">

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed top-0 w-full z-50">
      <div class="max-w-6xl mx-auto flex items-center justify-between p-4">
        <div class="text-lg font-bold"><a href="#">Azka Amar</a></div>
        <input type="checkbox" id="check" class="hidden" />
        <label for="check" class="cursor-pointer md:hidden">
          <i class="ri-menu-line text-2xl"></i>
        </label>
        <ul class="hidden md:flex space-x-6">
          <li><a href="#home" class="hover:text-blue-500">Home</a></li>
          <li><a href="#about" class="hover:text-blue-500">About</a></li>
          <li><a href="#resume" class="hover:text-blue-500">Skill</a></li>
          <li><a href="#portfolio" class="hover:text-blue-500">Portfolio</a></li>
          <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="pt-20 min-h-screen bg-gray-50 flex items-center">
      <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left space-y-4">
          <p class="text-xl text-blue-500 font-semibold">HALO</p>
          <h1 class="text-4xl font-bold">
            Saya <span class="text-blue-500">Azka Amar</span><br />
            adalah seorang <span class="text-blue-500">Photographer</span>
          </h1>
          <p class="text-gray-700 leading-relaxed">
            Selamat datang di website saya. Setiap proyek yang saya ambil adalah kesempatan untuk bercerita melalui gambar. Portofolio ini menampilkan berbagai karya saya yang mencerminkan dedikasi saya terhadap seni fotografi dan kepuasan klien.
          </p>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0">
          <img src="89268ba496c2f64ac14e055b97cc2ae9.jpg" alt="profile" class="rounded-lg shadow-md w-full" />
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">About Me</h2>
        <p class="text-gray-700 leading-relaxed text-center">
          Saya adalah seorang fotografer profesional yang mengkhususkan diri dalam menangkap momen-momen berharga dan menjadikannya abadi. Dengan pengalaman bertahun-tahun di berbagai bidang fotografi, saya memiliki kemampuan untuk bercerita melalui lensa kamera.
        </p>
      </div>
    </section>

    <!-- Skill Section -->
    <section id="resume" class="py-20 bg-gray-50">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Skill</h2>
        <ul class="space-y-6">
          <li>
            <h3 class="text-xl font-semibold">Fotografi Potret:</h3>
            <p class="text-gray-700">Mengabadikan karakter dan kepribadian melalui gambar.</p>
          </li>
          <li>
            <h3 class="text-xl font-semibold">Fotografi Perjalanan:</h3>
            <p class="text-gray-700">Menangkap keindahan dan budaya dari berbagai belahan dunia.</p>
          </li>
          <li>
            <h3 class="text-xl font-semibold">Fotografi Pernikahan:</h3>
            <p class="text-gray-700">Mendokumentasikan cinta dan emosi dalam setiap detik yang berharga.</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Portfolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden">
            <img src="7c9ea8dbe755d612cf0d0293a1876e1c.jpg" alt="Project 1" class="w-full h-56 object-cover" />
            <div class="p-4">
              <h3 class="text-xl font-semibold">Akad Nikah</h3>
              <p class="text-gray-700">Memfoto pengantin Pria</p>
            </div>
          </div>
          <!-- Tambahkan item lain sesuai struktur di atas -->
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Contact</h2>
        <p class="text-gray-700 mb-6">Feel free to contact me through the form below.</p>
        <form class="space-y-4">
          <input type="text" placeholder="Your Name" class="w-full p-3 border rounded-md" required />
          <input type="email" placeholder="Your Email" class="w-full p-3 border rounded-md" required />
          <textarea placeholder="Your Message" class="w-full p-3 border rounded-md" required></textarea>
          <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Send Message</button>
        </form>
      </div>
    </section>

  </body>
</html>
