<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TOKO RAFIQ</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="font-poppins bg-gray-100 text-gray-900">

  <!-- Navbar start -->
  <nav class="bg-white shadow-md fixed top-0 w-full z-10">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
      <a href="#" class="text-2xl font-bold text-black">Toko<span class="text-blue-900">Rafiq</span>.</a>

      <div class="hidden md:flex space-x-6">
        <a href="#home" class="text-black hover:text-blue-900">Home</a>
        <a href="#about" class="text-black hover:text-blue-900">Tentang Kami</a>
        <a href="#menu" class="text-black hover:text-blue-900">Menu</a>
        <a href="#products" class="text-black hover:text-blue-900">Produk</a>
        <a href="#contact" class="text-black hover:text-blue-900">Kontak</a>
      </div>

      <div class="flex space-x-4">
        <a href="#" id="search-button" class="text-black"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button" class="text-black"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu" class="md:hidden text-black"><i data-feather="menu"></i></a>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('hero-background.jpg');">
    <div class="text-center text-gray-900">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Toko <span class="text-blue-900">Rafiq</span></h1>
      <p class="text-lg md:text-xl">Silahkan Berbelanja Dengan Nyaman.</p>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8"><span class="text-blue-900">Tentang</span> Kami</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="flex justify-center">
          <img src="aset/ecommerce.jpg" alt="Tentang Kami" class="rounded-lg shadow-md">
        </div>
        <div class="flex flex-col justify-center space-y-4 text-left">
          <h3 class="text-xl font-semibold text-black">Kenapa memilih Toko Kami?</h3>
          <p class="text-black">Terima Kasih Telah Memilih Toko Kami!</p>
          <p class="text-black">Semoga Kalian Dilimphkan Berkah Yang Banyak.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="py-16 bg-white">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-8"><span class="text-blue-900">Menu</span> Kami</h2>
      <p class="mb-8 text-black">Menu Gaming.</p>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Card Example -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="aset/Razer-Basilisk-V3_20220426-124554_full.jpg" alt="Mouse" class="w-full h-40 object-cover rounded-md">
          <h3 class="mt-4 text-lg font-bold text-black">Mouse</h3>
          <p class="text-gray-600">IDR 500K</p>
          <a href="https://wa.me/6282326352497" target="_blank" class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white rounded-md">
            <i data-feather="whatsapp"></i> Pesan Sekarang
          </a>
        </div>
        <!-- Repeat similar structure for other cards -->
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>
