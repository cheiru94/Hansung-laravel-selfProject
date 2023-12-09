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
    <img class="lg:w-1/2 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="/imgs/projects/2.jpeg">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">미래(未来)</h1>
      <p class="mb-8 leading-relaxed">미래를 테마로 한 건축물은 혁신적이고 진보적인 디자인이 필요합니다. 기술적인 발전을 반영하여 스마트 홈 기능, 에너지 효율적인 설계 등을 포함시키며, 미래지향적인 모던하고 깔끔한 디자인을 추구합니다.</p>
      
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
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ko&amp;q=울산광역시/data=!4m6!3m5!1s0x35662e8be2b2de81:0x7083fa7333d93101!8m2!3d35.5537228!4d129.2380554!16zL20vMDF2c2Rx?hl=ko&entry=ttu&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter:  opacity(0.8);"></iframe>
      
    </div>
  </div>
</section>

{{-- 🟢 3. 푸터 --}}
<div class="h-[50px]"> </div>
<x-nav-footer class="fixed" />


</body>

</html>