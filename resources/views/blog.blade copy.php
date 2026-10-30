<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog</title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
</head>
<body>
     <nav
   class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 dark:border-neutral-700 dark:bg-neutral-900 min-h-[68px] relative z-20"
   aria-label="Main navigation">
   <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
      <div class="flex-1 flex">
         <a href="#"
            class="min-w-9 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            <span class="sr-only">Your Company</span>
            <img src="img/gambar_luna.png" alt="gambar luna" class="h-16 w-auto" />
         </a>
      </div>

      <div id="collapseMenu" tabindex="-1"
         class="hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">

         <div
            class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
            <a href="#"
               class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <span class="sr-only">Your Company</span>
               <img src="img/gambar_luna.png" alt="gambar luna" class="h-16 w-auto" />
            </a>
            <button type="button" aria-controls="collapseMenu" id="toggleClose"
               class="cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <span class="sr-only">Close main menu</span>
               <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900 dark:fill-slate-50"
                  aria-hidden="true" viewBox="0 0 329.269 329">
                  <path
                     d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                     data-original="#000000" />
               </svg>
            </button>
         </div>

         <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 dark:text-slate-50 lg:flex-row max-lg:p-6">
            <li>
               <a href="/blog"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">ke blog</a>
            </li>
            <li>
               <a href="/"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded"
                  aria-current="page">Home</a>
            </li>
            <li>
               <a href="/blog"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Blog</a>
            </li>
            <li>
               <a href="/about"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">About</a>
            </li>
            <li>
               <a href="/contact"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Contact</a>
            </li>
            {{-- <li>
               <a href="#"
                  class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Log
                  in</a>
            </li> --}}
         </ul>
      </div>

      <div class="flex items-center gap-4 lg:ml-4">
         <a href="#"
            class="py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">Sign
            up</a>

         <button type="button" aria-controls="collapseMenu" aria-expanded="false" aria-haspopup="true" id="toggleOpen"
            class="cursor-pointer lg:hidden focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            <span class="sr-only">Open main menu</span>
            <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
            </svg>
         </button>
      </div>
   </div>
</nav>

    {{-- <h1>Halaman Blog</h1>
    <article>
        <h3>Judul 1</h3>
        <p>Lorem Ipsum is simply dummy text of the 
            printing and typesetting industry. 
            Lorem Ipsum has been the industry's 
            standard dummy text ever since 1966,
            when designers at Letraset and James Mosley,
            the librarian at St Bride Printing Library in 
            London, took a 1914 Cicero translation and 
            scrambled it to make dummy text for 
            Letraset's Body Type sheets. It has survived 
            not only many decades, but also the leap into 
            electronic typesetting, remaining essentially 
            unchanged. It was popularised thanks to these 
            sheets and more recently with desktop publishing 
            software like Aldus PageMaker and Microsoft Word 
            including versions of Lorem Ipsum.</p>
    </article>

    <article>
        <h3>Judul 2</h3>
        <p>It is a long established fact that a reader will 
            be distracted by the readable content of a page 
            when looking at its layout. The point of using 
            Lorem Ipsum is that it has a more-or-less normal 
            distribution of letters, as opposed to using 
            'Content here, content here', making it look like 
            readable English. Many desktop publishing packages and 
            web page editors now use Lorem Ipsum as their default 
            model text, and a search for 'lorem ipsum' will uncover 
            many web sites still in their infancy. Various versions 
            have evolved over the years, sometimes by accident, 
            sometimes on purpose (injected humour and the like).</p>
    </article> --}}

    <!-- Halaman Blog Murni Teks (Light & Dark Mode) -->
<main class="bg-white dark:bg-neutral-900 text-slate-800 dark:text-slate-100 min-h-screen font-sans py-12 px-4 md:px-8">
  <div class="max-w-4xl mx-auto">

    <!-- Judul & Deskripsi Halaman Blog -->
    <div class="mb-12 border-b border-slate-200 dark:border-neutral-800 pb-6">
      <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-2">
        Drawing tips
      </h1>
      <p class="text-slate-600 dark:text-slate-400">
        If you're also interested in drawing, here are some videos you might like.
      </p>
    </div>

    <!-- Daftar Artikel (Format Teks dengan Pemisah Garis Halus) -->
    <div class="space-y-10">

      <!-- Artikel 1 -->
      <article class="group">
        <div class="flex items-center gap-3 text-xs text-slate-500 dark:text-slate-400 mb-2">
          <span class="font-semibold px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400">realism drawing</span>
          <span>•</span>
          <span>7 years ago</span>
        </div>
        <h2 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-3">
          <!-- Ganti LINK_EKSTERNAL_1 dengan link artikel luar Anda -->
          <a href="https://youtu.be/qskU9ZJzC04?si=VbGfZfxZjymGfz8R" rel="noopener noreferrer" class="group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
            how to draw realistic facial features
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-sm md:text-base leading-relaxed mb-4">
          realistic facial features has always been a challenge for me from the start, and i've been looking for a way to improve my skill in drawing facial features. This video really helped me a lot, and i hope it will help you too.
        </p>
        <a href="https://youtu.be/qskU9ZJzC04?si=VbGfZfxZjymGfz8R" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">
          Baca artikel &rarr;
        </a>
      </article>

      <!-- Garis Pemisah Antar Artikel -->
      <hr class="border-slate-100 dark:border-neutral-800">

      <!-- Artikel 2 -->
      <article class="group">
        <div class="flex items-center gap-3 text-xs text-slate-500 dark:text-slate-400 mb-2">
          <span class="font-semibold px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400">realism drawing</span>
          <span>•</span>
          <span>6 years ago</span>
        </div>
        <h2 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-3">
          <!-- Ganti LINK_EKSTERNAL_2 dengan link artikel luar Anda -->
          <a href="" target="_blank" rel="noopener noreferrer" class="group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
            Tips on drawing realistic hair
          </a>
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-sm md:text-base leading-relaxed mb-4">
          as i mentioned in one of my work, drawing hair is one of the most difficult part of human to be drawn in my opinion. In my journey of learning how to draw hair, this is one of the video that helped me a lot.
        </p>
        <a href="https://youtu.be/vAKRmgeFkU4?si=hRWdqnyolWiPm-q2" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">
          Baca artikel &rarr;
        </a>
      </article>

      <!-- Garis Pemisah Antar Artikel -->
      <hr class="border-slate-100 dark:border-neutral-800">

      <!-- Artikel 3 -->
      <article class="group">
        <div class="flex items-center gap-3 text-xs text-slate-500 dark:text-slate-400 mb-2">
          <span class="font-semibold px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400">realism drawing</span>
          <span>•</span>
          <span>8 years ago</span>
        </div>
        <h2 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-3">
          <!-- Ganti LINK_EKSTERNAL_3 dengan link artikel luar Anda -->
          <a href="https://youtu.be/lkH-18ye8Tg?si=OLIxvBWaHUzSKour" target="_blank" rel="noopener noreferrer" class="group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
            How to draw realistic eyebrows
          </a>
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-sm md:text-base leading-relaxed mb-4">
          eyebrows is one part of facial features that oftenly be ignored.. most of the time, people focus more ont he eyes, but they didnt notice that the eyebrows also affect a lot. So in order to improve your eyebrow drawing, here's a video you might like.
        </p>
        <a href="https://youtu.be/lkH-18ye8Tg?si=OLIxvBWaHUzSKour" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">
          Baca artikel &rarr;
        </a>
      </article>

    </div>
  </div>
</main>


</body>

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

</html>