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


<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-1/2 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="/imgs/projects/6.jpg">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">열정(熱情)</h1>
      <p class="mb-8 leading-relaxed">열정은 강렬한 사랑이나 열망을 의미합니다. 열정을 테마로 한 건축물은 강렬하고 도전적인 디자인이 필요합니다. 대담한 색상 사용, 독특한 형태의 구조 등을 통해 열정적인 분위기를 연출합니다.</p>
      
    </div>
  </div>
</section>


 {{-- 🟢 4. 찾아 오시는길 : 지도 --}}
 <section class="text-gray-600 body-font relative">
  {{-- 상단 제목 --}}
  <div class="flex flex-col text-center w-full mb-10">
    <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">위치</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">찾아 오시는 길</p>
  </div>
  <div class="container px-5 pb-24 mx-auto fle justify-center sm:flex-nowrap flex-wrap">
    <div class="lg:w-full h-[500px] md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ko&amp;q=경상북도+경주시+양남면+명주길/data=!4m6!3m5!1s0x3567b3e9bc192f5b:0x52132fff73c82a4c!8m2!3d35.7417087!4d129.3878024!16s%2Fg%2F119wqxh9h?hl=ko&entry=ttu&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter:  opacity(0.8);"></iframe>
      
    </div>
  </div>
</section>

{{-- 🟢 3. 푸터 --}}
<div class="h-[50px]"> </div>
<x-nav-footer class="fixed" />


</body>

</html>