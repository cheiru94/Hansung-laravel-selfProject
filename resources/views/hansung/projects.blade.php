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
  

</head>
<body>

  {{-- 🟢 1. top bar --}}
  <x-nav-top></x-nav-top>

  {{-- 🟢 2. projects 설명  --}}
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">

      {{-- 2.1 페이지 설명 --}}
      <div class="flex flex-col">
        {{-- 2.1.1 상단 가운데 선 --}}
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-24 h-full bg-indigo-500"></div>
        </div>

        {{-- 2.1.2페이지 간략 설명 --}}
        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
          <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Projects</h1>
          <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"> 한성 건축사사무소는 건축 및 공간을 매개로 한 일련의 프로젝트를 수행하는 디자인 그룹입니다. 일상 공간의 경험에서 이루어지는 다양한 관계의 가치를 중시하며, 이를 통해 더불어 함께하는 건축을 지향합니다.</p>
        </div>
      </div>
      
      {{-- 2.2 project 컴포넌트 --}}
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        {{-- 2.2.1 --}} 
        <x-hansungs.work title='고향(故郷)' image_path='/imgs/projects/1.jpg' />
        {{-- 2.2.2 --}} 
        <x-hansungs.work title='미래(未来)' image_path='/imgs/projects/2.jpeg' />
        {{-- 2.2.3 --}} 
        <x-hansungs.work title='추억(追憶)' image_path='/imgs/projects/3.jpeg' />
        {{-- 2.2.4 --}} 
        <x-hansungs.work title='기억(記憶)' image_path='/imgs/projects/4.jpeg' />
        {{-- 2.2.5 --}} 
        <x-hansungs.work title='희망(希望)' image_path='/imgs/projects/5.jpeg' />
        {{-- 2.2.6 --}} 
        <x-hansungs.work title='열정(熱情)' image_path='/imgs/projects/6.jpg' />
      </div>

    </div>
  </section>


  {{-- 🟢 3. 푸터 --}}
  <x-nav-footer></x-nav-footer>

</body>
</html>