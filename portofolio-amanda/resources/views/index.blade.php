<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Personal Web</title>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
   <style>
    .gradient {
        background: #344DCD; /* Mengganti warna gradasi menjadi gradasi merah, kuning, dan oranye */
    }

    .center-text {
        text-align: center;
    }

    .navbar-links {
        margin: 0 auto;
        display: inline-block;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-inter bg-primary gradient"> <!-- tambahkan class "gradient" di sini -->
    @if($message = Session::get('berhasil'))
    <script>
        Swal.fire({
            title: "Terima Kasih",
            text: "{{ Session::get('berhasil') }}",
            icon: "success"
        });
    </script>
@endif
    <header class="text-white w-full mx-auto text-base fixed">
        <nav class="bg-color-hover text-center flex py-4 items-center justify-between">
        
           <!-- navbar kanan -->
            <div class="hidden md:flex space-x-10 mr-80 navbar-links center-text">
                <a href="#about" class="bg-red-text hover:text-black rounded-md w-24 py-1 -mt-1 text-3xl">About Me</a>
                <a href="#portofolio" class="bg-red-text hover:text-black rounded-md w-24 py-1 text-3xl">Portofolio</a>
                <a href="#reach" class="bg-red-text hover:text-black rounded-md w-24 py-1 -mt-1 text-3xl">Reach</a>
                <a href="#contact" class="bg-red-text hover:text-black rounded-md w-24 py-1 -mt-1 text-3xl">Contact</a> 
                <a href="{{ url('login') }}" class="bg-red-text hover:text-black rounded-md w-24 py-1 -mt-1 text-3xl">Login</a> 
            </div>

            <div class="mr-16 md:hidden">
                <button class="text-white" id="mobile-menu-button">
                    <i data-feather="menu"></i>
                </button>
            </div>
        </nav>
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="mr-24 bg-color-hover mx-auto w-full text-center">
                <a href="#about" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">About Me</a>
                <a href="#portofolio" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Portofolio</a>
                <a href="#reach" class="hover:text-red-text block py-1 hover:bg-primary mb-2 rounded-md">Reach</a>
                <a href="#contact" class="hover:bg-red-text rounded-md py-1 block text">Contact</a>
            </div>
        </div>
    </header>
    <!-- section home -->
    <section name="about" id="about" class="max-w-full mx-auto flex py-40 px-0 justify-between">
        <!-- intro nama -->
          <div class="ml-28 mt-48 mb-10"> <!-- Memperbaiki margin top dan bottom -->
            <h3 class="text-4xl text-black pb-2 font-extrabold -mt-24">About Me!</h3> <!-- Menghapus margin top yang tidak diperlukan -->
            <div class="text-2xl text-white -mt-15"> <!-- Menghapus margin top yang tidak diperlukan -->
                <p><span class="text-red-text">Hallo Everyone.</span></p>
                <p>Thank you for allowing me to introduce myself.</p>
                <p>My name is Dea Amanda Putri.</p>
                <p>I am from Tegal.</p>
                <p>I am a content creator and editor.</p>
            </div>
            <div class="py-7 flex space-x-4"> <!-- Menghapus margin top yang tidak diperlukan -->
                <div class="rounded-full mr-4"></div>
                <div class="flex space-x-7 text-zinc-600"></div>
            </div>
        </div>
        <!-- intro gambar -->
    <div class="container">
    <div class="flex flex-col items-center bg-blue-500 rounded-full p-10 hover:bg-blue-500 m-36 -mt-20 mr-20" style="background-size: 80%;">
        <img src="{{ asset('image/amanda11.png') }}" class="rounded w-90 h-90 object-cover">
    </div>
</div>
</section>

<section id="reach">
   <div class="container">
<div class="container">
    <div class="flex flex-col items-left rounded-full p-10 m-36 -mt-40 mr-48" style="background-size: 80%;">
        <img src="image/manda7.jpg" class="rounded w-60 h-60 object-cover">
        <p class="flex flex-col items-end rounded-full p-10 m-36 -mt-72 mr-20 font-serif text-3xl text-white">Software Skills <br><span class="text-2xl">. lightroom<br>. canva<br>. piscart<br>. Capcutt video editor<br>. Snapssed</span></p>
    </div>
</section>

<section id="portofolio">
<div class="container">
    <div class="ml-30 -mt-44 mr-96 flex flex-wrap justify-center">
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda2.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda3.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
 <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda1.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <p class="flex flex-col items-end rounded-full p-10 m-36 -mt-14 -mr-80 font-serif text-3xl text-white">Software Skills <br><span class="text-2xl font-serif">. lightroom<br>. canva<br>. piscart<br>. Capcutt video editor<br>. Snapssed</span></p>
    </div>
</div>

<div class="container">
    <div class="ml-30 -mt-24 mr-80 flex flex-wrap justify-center">
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda4.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda5.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
 <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda6.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <p class="flex flex-col items-end rounded-full p-10 m-36 -mt-14 -mr-80 font-serif text-3xl text-white">Typography Instagram <br><span class="text-3xl mr-36 font-serif">Stories</span></p>
    </div>
</div>

    <div class="container">
    <p class="flex flex-col items-start rounded-full p-10 m-36 mt-14 mr-96 font-serif text-3xl text-white">Typography Instagram <br><span class="text-3xl mr-36 mt-5 font-serif">Stories</span></p>
    <div class="ml-30 -mt-28 mr-80 flex flex-wrap justify-center">
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda8.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda9.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda10.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda5.jpg') }}" class="rounded w-48 h-48 object-cover">
        </div>
    </div>
</div>

    <div class="container">
    <p class="flex flex-col items-start rounded-full p-10 m-36 mt-14 mr-96 font-serif text-3xl text-white ">Editor Photo</p>
    <div class="ml-30 -mt-28 mr-80 flex flex-wrap justify-center">
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda121.jpg') }}" class="rounded w-96 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4 -mt-12">
            <img src="{{ asset('image/manda11.jpg') }}" class="rounded w-96 h-48 object-cover">
        </div>
    </div>
</div>
</section>
    <div class="container">
    <div class="ml-30 mt-10 mr-80 flex flex-wrap justify-center">
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ asset('image/manda13.jpg') }}" class="rounded w-96 h-48 object-cover">
        </div>
        <div class="-mr-2 mb-4 px-4">
            <img src="{{ ('image/manda14.jpg') }}" class="rounded w-96 h-48 object-cover">
        </div>
    </div>
</div>
</div>

<div class="container">
        <style>
    .graphic-text {
        color: black; /* Mengubah warna teks menjadi putih */
    }
</style>
<section id="contact">
<h1 class="mt-20 mr-48 text-4xl text-center font-extrabold" class="">
    CONTACT <span class="graphic-text">ME :</span> <!-- Menggunakan class graphic-text untuk mengubah warna teks "Graphic" menjadi putih -->
    </h1>
<div class="-mr-15 mb-11 px-4 wide-image mt-10 flex items-center p-4">
    <img src="{{ asset('image/whatsap1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
    <a href="https://wa.me/085726433211" target="_blank" class="text-2xl" >085887049405</a>
    </div>
<div class="-mr-15 mb-11 px-4 wide-image -mt-9 flex items-center p-4">
    <img src="{{ asset('image/instagram1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
    <a href="https://ig.me/deamanda_ptri" target="_blank" class="text-2xl" >deamanda_ptri</a>
</div>
<div class="-mr-15 mb-11 px-4 wide-image -mt-9 flex items-center p-4">
    <img src="{{ asset('image/lokasi1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
    <a href="https://maps.app.goo.gl/784bnqFsSdS4XR2y5" target="_blank" class="text-2xl" >Sumurpanggang Tegal Kota</a>
</div>
<div class="-mr-15 mb-11 px-4 wide-image -mt-9 flex items-center p-4">
    <img src="{{ asset('image/gmail1.png') }}" class="rounded w-16 h-15 mr-4 object-cover">
    <a href="https://wa.me/085726433211" target="_blank" class="text-2xl" >amandaajah03@gmail.com</a> 
</div>
</section>
<section class="">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi Saya</h2>
      
      <form method="POST"" class="space-y-8">
        @csrf
          <div>
              <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama :</label>
              <input type="text" id="nama" name="nama" class="block p-3 w-full text-sm text-gray-900 bg-blue-500 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan nama anda" required value="{{ (isset($contact)) ? $contact->nama:"" }}">
          </div>
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email :</label>
              <input type="email" id="email" name="email" class="shadow-sm bg-blue-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Masukan Email Anda" required value="{{ (isset($contact)) ? $contact->email:"" }}">
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan :</label>
              <textarea id="message" rows="6" name="pesan" class="block p-2.5 w-full text-sm text-gray-900 bg-blue-500 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Pesan Untuk Saya"></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">KIRIM PESAN</button>
      </form>
  </div>
</section>
</body>
</html>