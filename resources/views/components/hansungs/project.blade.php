{{-- 
  디폴트 props 내용들  
  1. image_path
  2. title
  3. a_link
--}}
@props([
  'image_path'=>'이미지를 입력하시오',
  'title'=>'제목을 입력하시오',
  'a_link'=>'#',
])

<!-- 🟢 상단 nav 한성건축 탭 projects의 wokr 컴포넌트 🟢 -->
<div class="p-4 md:w-1/3 sm:mb-0 mb-6  pb-[70px] ">

  {{-- 1. image_path --}}
  <div class="rounded-lg h-64 overflow-hidden">
    <img alt="content" class="object-cover object-center h-full w-full " src="{{$image_path}}" >
  </div>

  {{-- 2. title --}}
  <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center	">{{$title}}</h2>
  <div class="flex justify-center">
    <div class="w-[100px] h-[1px] bg-black my-2 "></div>
  </div>
  <p class="text-base leading-relaxed mt-2 ">{{$slot}}</p>
  
  {{-- 3. a_link --}}
  <a href="{{$a_link}}" class="text-indigo-500 inline-flex items-center mt-3">더보기
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
      <path d="M5 12h14M12 5l7 7-7 7"></path>
    </svg>
  </a>
  
</div>