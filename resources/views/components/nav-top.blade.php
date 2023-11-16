<header class="text-gray-600 body-font ">
  <div class=" bg-gray-100  mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    {{-- 1.1 로고--}}
    <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img class="w-20 h-20  " src="/imgs/logo/hansung-b.png" alt="안뜸">
      <div>
        <div class="ml-3 text-xl">Hansung</div>
        <div class="ml-3 text-xl">Architects</div>
      </div>
    </a>
    {{-- nav bar --}}
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900 text-2xl hover:text-3xl">한성건축</a>
      <a class="mr-5 hover:text-gray-900 text-2xl">대표 인사말</a>
      <a class="mr-5 hover:text-gray-900 text-2xl">커뮤니티</a>
      <a class="mr-5 hover:text-gray-900 text-2xl">1:1 상담</a>
      <a class="mr-5 hover:text-gray-900 text-2xl">찾아오시는 길</a>
    </nav>
    {{-- 로그인 등록 ~ --}}
    @if (Route::has('login'))
      @auth
          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">Dashboard</a>
      @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">로그인</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">회원가입</a>
          @endif
      @endauth
    @endif
  </div>

</header>