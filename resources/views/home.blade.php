@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
{{-- DARI SINI CODE UNTUK ISINYA. NAVBAR YANG DI ATASNYAA --}}


<!-- Galeri Gambar Sederhana (Light & Dark Mode) -->
<main class="bg-white dark:bg-neutral-900 text-slate-800 dark:text-slate-100 min-h-screen font-sans py-12 px-4 md:px-8">
  <div class="max-w-6xl mx-auto">

    <!-- Judul Galeri -->
    <div class="mb-8">
      <h1 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-2">
        Gallery of my artworks
      </h1>
      <p class="text-slate-600 dark:text-slate-400">
        by someone who loves to do art a lot.
      </p>
    </div>

    {{-- galerinya --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">


      <div class="cursor-pointer group bg-slate-100 dark:bg-neutral-800 rounded-xl overflow-hidden border border-slate-200 dark:border-neutral-800 shadow-sm hover:shadow-md transition-shadow"
           onclick="openModal('img/nari.png', 'Dance', 'I drew this abput 6 years ago. this drawing was made with pencil on an A5 paper. this was my first time trying posture drawing, and i really enjoyed it.')">
        <div class="aspect-square overflow-hidden bg-slate-200 dark:bg-neutral-700">
          <img src="img/nari.png" alt="Karya 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
          <h3 class="font-bold text-slate-900 dark:text-white">Dance</h3>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">click for more details</p>
        </div>
      </div>


      <div class="cursor-pointer group bg-slate-100 dark:bg-neutral-800 rounded-xl overflow-hidden border border-slate-200 dark:border-neutral-800 shadow-sm hover:shadow-md transition-shadow"
           onclick="openModal('img/ivana.png', 'Ivana', 'This was a portrait of someone who used to be a friend of mine. her name is Ivana. I drew her since i needed someone i knew to practice my drawing skill. this was the third portrait i drew. this drawing was done with pencil on an A5 paper about 6 years ago.')">
        <div class="aspect-square overflow-hidden bg-slate-200 dark:bg-neutral-700">
          <img src="img/ivana.png" alt="Karya 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
          <h3 class="font-bold text-slate-900 dark:text-white">Ivana</h3>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">click for more details</p>
        </div>
      </div>

      <div class="cursor-pointer group bg-slate-100 dark:bg-neutral-800 rounded-xl overflow-hidden border border-slate-200 dark:border-neutral-800 shadow-sm hover:shadow-md transition-shadow"
           onclick="openModal('img/kepang.png', 'braid', 'this was my practice on drawing hair, since that time, hair was one of the most difficult peart of human to be drawn in my opinion. So i decied to give myself some challenge. and it turned out that i really loved the result.')">
        <div class="aspect-square overflow-hidden bg-slate-200 dark:bg-neutral-700">
          <img src="img/kepang.png" alt="Karya 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
          <h3 class="font-bold text-slate-900 dark:text-white">braid</h3>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">click for more details</p>
        </div>
      </div>

      <div class="cursor-pointer group bg-slate-100 dark:bg-neutral-800 rounded-xl overflow-hidden border border-slate-200 dark:border-neutral-800 shadow-sm hover:shadow-md transition-shadow"
           onclick="openModal('img/terbang.png', 'The dancer', 'After the first time i practiced posture drawing, i made another one, and this was it. one of my favourite posture drawing. i really love the way her clothes draped so nicely, and i also love about how she looked so gracefully. This one was also made with pencil on an A5 paper.')">
        <div class="aspect-square overflow-hidden bg-slate-200 dark:bg-neutral-700">
          <img src="img/terbang.png" alt="Karya 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
        <div class="p-4">
          <h3 class="font-bold text-slate-900 dark:text-white">The dancer</h3>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">click for more details</p>
        </div>
      </div>

    </div>
  </div>
</main>

<!-- Modal Pop-up (Muncul saat gambar ditekan) -->
<div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/80 flex items-center justify-center p-4">
  <div class="bg-white dark:bg-neutral-900 rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden flex flex-col md:flex-row shadow-2xl relative">

    <!-- Tombol Tutup (X) -->
    <button onclick="closeModal()" class="absolute top-3 right-3 z-10 bg-slate-200 dark:bg-neutral-800 text-slate-700 dark:text-slate-200 rounded-full w-8 h-8 flex items-center justify-center font-bold hover:bg-slate-300 dark:hover:bg-neutral-700">
      ✕
    </button>

    <!-- Gambar Ukuran Penuh (Tidak Terpotong) -->
    <div class="md:w-3/5 bg-black flex items-center justify-center p-2">
      <img id="modalImg" src="" alt="Gambar Diperbesar" class="max-h-[70vh] md:max-h-[85vh] w-auto max-w-full object-contain">
    </div>

    <!-- Deskripsi di Sebelah Kanan -->
    <div class="md:w-2/5 p-6 flex flex-col justify-center bg-white dark:bg-neutral-900">
      <h2 id="modalTitle" class="text-2xl font-bold text-slate-900 dark:text-white mb-3">Judul Gambar</h2>
      <p id="modalDesc" class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
        Deskripsi gambar akan muncul di sini.
      </p>
    </div>

  </div>
</div>

<!-- Masukkan langsung script-nya di sini -->
<script>
  function openModal(imgSrc, title, desc) {
    document.getElementById('modalImg').src = imgSrc;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalDesc').innerText = desc;
    document.getElementById('imageModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
  }
</script>




<footer class="bg-white dark:bg-neutral-900 py-6 px-4 md:px-8">
   <div class="flex justify-between items-center flex-col md:flex-row flex-wrap gap-x-6 gap-y-8 text-center">
      <div class="max-md:order-1">
         <p class="text-sm text-slate-600 dark:text-slate-400">© angelinngozal. All rights reserved.</p>
      </div>

      <ul class="flex flex-wrap gap-6">
         <li>
            <a href="#"
               class="flex items-center bg-slate-100 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500"
               aria-label="Facebook">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50"
                  viewBox="0 0 155.139 155.139" aria-hidden="true">
                  <path
                     d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761z"
                     data-original="#010002" />
               </svg>
            </a>
         </li>
         <li>
            <a href="#"
               class="flex items-center bg-slate-100 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500"
               aria-label="LinkedIn">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50"
                  viewBox="0 0 24 24" aria-hidden="true">
                  <path
                     d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0"
                     data-original="#000000" />
               </svg>
            </a>
         </li>
         <li>
            <a href="#"
               class="flex items-center bg-slate-100 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500"
               aria-label="X">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50"
                  viewBox="0 0 1226.37 1226.37" aria-hidden="true">
                  <path
                     d="M727.348 519.284 1174.075 0h-105.86L680.322 450.887 370.513 0H13.185l468.492 681.821L13.185 1226.37h105.866l409.625-476.152 327.181 476.152h357.328L727.322 519.284zM582.35 687.828l-47.468-67.894-377.686-540.24H319.8l304.797 435.991 47.468 67.894 396.2 566.721H905.661L582.35 687.854z"
                     data-original="#000000" />
               </svg>
            </a>
         </li>
         <li>
            <a href="#"
               class="flex items-center bg-slate-100 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500"
               aria-label="Github">
               <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50"
                  viewBox="0 0 438.549 438.549" aria-hidden="true">
                  <path
                     d="M409.132 114.573q-29.41-50.392-79.798-79.8C295.736 15.166 259.057 5.365 219.271 5.365c-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8Q0 164.966 0 224.63c0 47.78 13.94 90.745 41.827 128.906q41.827 57.245 108.063 79.227c5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562q0-.855-.144-15.417a2550 2550 0 0 1-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999q-10.28-1.848-19.13-8.559c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559q-6.139-7.995-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429q-1.712-1.996-2.568-3.997-.86-2.002 1.427-3.289c1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851q8.42 5.71 13.846 14.842c4.38 7.806 9.657 13.754 15.846 17.847q9.277 6.138 18.699 6.136 9.42-.001 16.274-1.423 6.848-1.43 12.847-4.285 2.57-19.135 13.988-29.41c-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979q-5.852-18.56-5.852-42.826c0-23.035 7.52-42.637 22.557-58.817q-10.566-25.977 1.997-58.24c5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994s9.089 5.618 12.135 7.708q26.556-7.42 54.818-7.421c28.262-.001 37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979q-9.286 11.282-23.131 18.986c-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146q14.841 12.845 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995q66.244-21.98 108.068-79.226c27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049"
                     data-original="#000000" />
               </svg>
            </a>
         </li>
      </ul>
   </div>
</footer>
@endsection
