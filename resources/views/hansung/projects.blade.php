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
        <x-hansungs.project title='고향(故郷)' image_path='/imgs/projects/1.jpg' a_link='/hansung/work_link/project1'>
          고향은 어린 시절을 보낸 곳이며, 그곳에서의 첫 경험과 추억이 쌓여있습니다. 따라서 고향을 테마로 한 건축물은 따뜻함과 편안함을 주는 디자인이 필요합니다. 자연스러운 재료와 색상을 사용하여 고향의 풍경을 연상시키는 디자인을 추구하고, 공간 구성에서도 친숙하고 안정감 있는 느낌을 주도록 합니다.
        </x-hansungs.project>
        {{-- 2.2.2 --}} 
        <x-hansungs.project title='미래(未来)' image_path='/imgs/projects/2.jpeg' a_link='/hansung/work_link/project2' >
          미래를 테마로 한 건축물은 혁신적이고 진보적인 디자인이 필요합니다. 기술적인 발전을 반영하여 스마트 홈 기능, 에너지 효율적인 설계 등을 포함시키며, 미래지향적인 모던하고 깔끔한 디자인을 추구합니다.
        </x-hansungs.project>
        {{-- 2.2.3 --}} 
        <x-hansungs.project title='추억(追憶)' image_path='/imgs/projects/3.jpeg' a_link='/hansung/work_link/project3' >
          추억은 개인의 과거 경험을 회상하는 것입니다. 추억을 테마로 한 건축물은 공간마다 이야기가 담겨있어야 합니다. 고유한 특징을 가진 디자인 요소를 사용하여 각 공간이 특별한 경험과 추억을 연상시키도록 합니다.
        </x-hansungs.project>
        {{-- 2.2.4 --}} 
        <x-hansungs.project title='기억(記憶)' image_path='/imgs/projects/4.jpeg' a_link='/hansung/work_link/project4' >
          기억은 과거의 사건을 재현하는 것입니다. 기억을 테마로 한 건축물은 감동적이고 임팩트 있는 디자인이 필요합니다. 공간마다 특별한 이벤트나 사건을 기억하게 만드는 독특하고 인상적인 디자인 요소를 사용합니다.
        </x-hansungs.project>
        {{-- 2.2.5 --}} 
        <x-hansungs.project title='희망(希望)' image_path='/imgs/projects/5.jpeg' a_link='/hansung/work_link/project5' >
          희망은 미래에 대한 긍정적인 기대입니다. 희망을 테마로 한 건축물은 밝고 활기찬 디자인이 필요합니다. 통창을 통한 자연광 활용, 쾌적한 공간 배치 등을 통해 긍정적인 에너지를 느낄 수 있는 환경을 만듭니다.
        </x-hansungs.project>
        {{-- 2.2.6 --}} 
        <x-hansungs.project title='열정(熱情)' image_path='/imgs/projects/6.jpg' a_link='/hansung/work_link/project6' >
          열정은 강렬한 사랑이나 열망을 의미합니다. 열정을 테마로 한 건축물은 강렬하고 도전적인 디자인이 필요합니다. 대담한 색상 사용, 독특한 형태의 구조 등을 통해 열정적인 분위기를 연출합니다.
        </x-hansungs.project>
      </div>

    </div>
  </section>


  {{-- 🟢 3. 푸터 --}}
  <x-nav-footer></x-nav-footer>

</body>
</html>