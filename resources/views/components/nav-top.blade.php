<header class="text-gray-600 body-font ">
  
  <div class=" bg-gray-100  mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
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
      <a href="#" class="mr-10 hover:text-gray-900 text-2xl">한성건축</a>
      <a href="greeting" class="mr-10 hover:text-gray-900 text-2xl">대표 인사말</a>
      <a href="#" class="mr-10 hover:text-gray-900 text-2xl">커뮤니티</a>
      <a href="{{route('contacts.index')}}" class="mr-10 hover:text-gray-900 text-2xl">1:1 상담</a>
    </nav>
    {{-- 로그인 등록 ~ --}}
    @if (Route::has('login'))
      @auth
      {{-- 여기에 ?? --}}
          {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">Dashboard</a> --}}

          <!-- Settings Dropdown -->
          <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                  {{-- 버튼 --}}
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
          </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        {{-- 추가한 부분 --}}


      @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">로그인</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400">회원가입</a>
          @endif
      @endauth
    @endif
 
  </div>

</header>