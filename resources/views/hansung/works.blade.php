<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  {{-- fontawesome --}}
  <script src="https://kit.fontawesome.com/ff316f86f0.js" crossorigin="anonymous"></script>
</head>
<body>

  {{-- 🟢 1. top --}}
  <x-nav-top></x-nav-top>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col">
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-24 h-full bg-indigo-500"></div>
        </div>
        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
          <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Projects</h1>
          <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"> 한성 건축사사무소는 건축 및 공간을 매개로 한 일련의 프로젝트를 수행하는 디자인 그룹입니다. 일상 공간의 경험에서 이루어지는 다양한 관계의 가치를 중시하며, 이를 통해 더불어 함께하는 건축을 지향합니다.</p>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6  pb-[70px] ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full " src="/imgs/works/1.jpg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">고향(故郷)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2 ">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/imgs/works/2.jpeg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">미래(未来)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/imgs/works/3.jpeg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">추억(追憶)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/imgs/works/4.jpeg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">기억(記憶)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/imgs/works/5.jpeg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">희망(希望)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        {{-- 1 --}}
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
          <div class="rounded-lg h-64 overflow-hidden">
            <img alt="content" class="object-cover object-center h-full w-full" src="/imgs/works/6.jpg">
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">열정(熱情)</h2>
          <div class="flex justify-center">
            <div class="w-[100px] h-[1px] bg-black my-2 "></div>
          </div>
          <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">더보기
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>

       
        
        
       
        
      </div>
    </div>
  </section>

    {{-- 🟢 5. 푸터 --}}
    <x-nav-footer></x-nav-footer>

</body>
</html>