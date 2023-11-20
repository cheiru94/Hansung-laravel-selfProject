<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- 테일윈드 css  --}}
        @vite('resources/css/app.css')
        
        
        {{-- fontawesome --}}
        <script src="https://kit.fontawesome.com/ff316f86f0.js" crossorigin="anonymous"></script>
    </head>


    <body class="antialiased">  
      <x-nav-top></x-nav-top>


 
    {{-- 🟢 2. 메인 이미지 --}}
    <div class="flex flex-col h-[600px] items-center justify-center gap-[24px] px-[37px] py-0 relative bg-[url(/imgs/main_img.png)] bg-cover bg-[50%_50%]" style="background-image: url(/imgs/main_img2.png)">
      <div class="w-[663px] h-[97px] [text-shadow:0px_4px_4px_#00000040] [font-family:'Inter-Bold',Helvetica] font-bold text-[85px] whitespace-nowrap relative text-white tracking-[0] leading-[normal]">
        한성 건축사사무소
      </div>
      <p class="w-[461px] h-[63px] [font-family:'Inter-Regular',Helvetica] font-normal text-[32px] relative text-white tracking-[0] leading-[normal]">
        모두가 꿈꾸는 아름다운 집의 시작
      </p>
      <div class="relative w-[191px] h-[28px] [font-family:'Inter-Regular',Helvetica] font-normal text-white text-[20px] tracking-[0] leading-[normal]">
        Design Your Dream
      </div>
    </div>




    {{-- 🟢  3. 설계 ・ 건축 법령　・ 감리   --}}
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-10">
          <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">Business Area</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">사업분야</p>
        </div>
        <div class="flex flex-wrap -m-4 justify-center ">
          <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
              <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/imgs/business_area/design.png">
              <div class="w-full">
                <h2 class="title-font font-medium text-3xl text-gray-900">설계</h2>
                <h3 class="text-gray-500 mb-3">Design</h3>
                {{-- <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p> --}}
                <span class="inline-flex">
                  
                </span>
              </div>
            </div>
          </div>
         
          <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
              <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/imgs/business_area/supervise.png">
              <div class="w-full">
                <h2 class="title-font font-medium text-3xl text-gray-900">감리</h2>
                <h3 class="text-gray-500 mb-3">Supervision</h3>
                {{-- <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p> --}}
                <span class="inline-flex">
                  
                </span>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
              <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="/imgs/business_area/low.png">
              <div class="w-full">
                <h2 class="title-font font-medium text-3xl text-gray-900">건축 법령 상담</h2>
                <h3 class="text-gray-500 mb-3">Consultation</h3>
                {{-- <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p> --}}
                <span class="inline-flex">
                  
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    {{-- 🟢 지도 --}}
    <section class="text-gray-600 body-font relative">
      {{-- 상단 제목 --}}
      <div class="flex flex-col text-center w-full mb-10">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">Directions</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">찾아 오시는 길</p>
      </div>
      <div class="container px-5 pb-24 mx-auto fle justify-center sm:flex-nowrap flex-wrap">
        <div class="lg:w-full h-[500px] md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
          <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ko&amp;q=175+Seongan-ro,+Jung-gu,+Ulsan,+South+Korea&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter:  opacity(0.8);"></iframe>
          <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
            {{-- 좌측 상단 div --}}
            <div class="lg:w-1/2 px-6">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">주소</h2>
              <p class="mt-1">울산광역시 중구 성안로 175</p>
            </div>
            {{-- 좌측 하단 div --}}
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">이메일</h2>
              <a class="text-green-500 leading-relaxed" href="mailto:hansung4003@naver.com">hansung4003@naver.com</a>
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">전화번호</h2>
              <p class="leading-relaxed">010-3842-4003</p>
            </div>
          </div>
        </div>
      </div>
    </section>







    {{-- 🟢 4. 푸터 --}}
    <footer class="text-gray-600 body-font">
      <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <img class="w-10 h-10  " src="/imgs/logo/hansung-g.png" alt="안뜸">
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 1993 한성 건축사사무소 대표자 이상열</p>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">울산광역시 중구 성안로 175</p>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">052-273-1988</p>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">hansung4003@naver.com</p>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">청안이씨 효령종친회 회장</p>

          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            
          </span>
        </div>
      </div>

    </footer>


     

      
    </body>
</html>
