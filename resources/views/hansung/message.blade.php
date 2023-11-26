
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

  {{-- 🟢 1. top --}}
  <header>
    <x-nav-top></x-nav-top>
  </header>


  {{-- 2.  --}}
  
  <div class="w-[full] h-[930px] justify-center items-start gap-2.5 flex ">
    {{-- 좌측 이미지 --}}
    <div class=" px-[80px] self-stretch justify-center items-center gap-2.5 flex">
      <div class="w-[574px] h-[753px] rounded-[13px] justify-center items-center flex">
        <img class="w-[579px] h-[752px] rounded-lg" src="/imgs/president/father_img.png" />
      </div>
    </div>
    {{-- 우측 글자 --}}
    <div class=" px-[80px]  self-stretch flex-col justify-center items-center gap-2.5 inline-flex">
      <div class="w-[540px] text-black text-[40px] "><span class="font-black  font-['Inter']">한성 건축사사무소</span> 홈페이지에 <br/>오신것을 진심으로 환영합니다</div>
      
    

      <div class="w-[540px] h-[500px] text-black text-xl font-['Inter'] tracking-[3.20px] leading-[1.6]  ">안녕하십니까? 한성 건축사사무소 대표 이상열입니다.  건축의 미래와 희망을 노래하는 열린 공간 한성 건축사사무소 홈페이지에 오신 것을 환영합니다. 미래지향적인 건축문화의 조성과 도시환경의 개선, 공공예술의 성격을 가진 건축물을 수세기 동안 유지될 수 있는 역사적 대상으로 발전시키고자 최선을 다하고 있는 도덕적이고 윤리적인 전문가단체이며, 우리 고장 울산을 품격 있는 건축과 문화가 살아 숨쉬는 도시, 사람과 자연, 산업과 환경이 조화를 이루는 세계적인 생태산업도시로 만들고자 울산광역시와 함께 건축사 회원들이 노력 하고 있습니다. 많은 관심과 성원을 부탁드립니다.감사합니다.</div>
    
      <div class="w-[540px] h-[100px] flex justify-end items-end" >
        <div>
          <span style="text-black text-xl font-normal font-['Inter']">      
            한성 건축사사무소 대표<br/>
          </span>
          <span style="text-black text-xl font-bold font-['Inter']">
            이상열 
          </span>
        </div>
        <div class="ml-[60px]">
          <img class="w-[150px] h-[80px] rounded-lg" src="/imgs/sign.svg" />
        </div>
      </div>
    </div>
  </div>



  {{-- 🟢 5. 푸터 --}}
  <footer>
    <x-nav-footer class="fixed"/>
  </footer>
  
</body>
</html>