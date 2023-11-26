<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          상세화면
      </h2>
  </x-slot>

   
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">

                {{-- 🟢 Contact Us 내용 🟢 --}}
                <section class="text-gray-600 body-font relative">
                  
                    <div class="container px-5  mx-auto">
                      <div class="lg:w-1/2 md:w-2/3 mx-auto"> {{-- 폭관리 --}}
                        {{-- <div class=" mx-auto">  --}}
                        <div class="flex flex-wrap -m-2">

                          {{-- 1. title --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="title" class="leading-7 text-lg text-gray-600">문의 사항</label>
                              <div class="w-full  rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{$contact->title}}
                              </div>
                            </div>
                          </div>
                          {{-- 2. name --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="name" class="leading-7 text-lg text-gray-600">이름</label>
                              <div  class="w-full rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                              {{$contact->name}}
                              </div>
                            </div>
                          </div>
                          {{-- 3. email --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="email" class="leading-7 text-lg text-gray-600">e-mail</label>
                              <div class="w-full  rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{$contact->email}}
                              </div>
                            </div>
                          </div>
                          {{-- 4. type 라디오 버튼 --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label  class="leading-7 text-lg text-gray-600" >종류</label><br>
                              <div class="w-full  rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{$type}}
                              </div>
                            </div>
                          </div>

                          {{-- 5. region 드롭다운 --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="region" class="leading-7 text-lg text-gray-600">지역선택 (울산광역시)</label><br>
                              
                                <div class="w-full rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  {{$region}}
                                </div>
                              
                            </div>
                          </div>

                          {{-- 6. contact --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="contact" class="leading-7 text-lg text-gray-600">문의 내용</label>
                              {{-- <div id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"> --}}
                                <div class="mb-[50px]">
                                {!!$contact->contact!!}
                                <div>

                              {{-- </div> --}}
                            </div>
                          </div>
                      

                          {{-- 8. button --}}
                          <div class=" w-full flex justify-center ">
                            {{-- 8.1 뒤로가기 --}}
                            <div class="p-2 w-full mb-[10px]">
                              <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg"><a href="{{route('contacts.index')}}">이전</a></button>
                            </div>
                            {{-- 8.2 수정하기 --}}
                            <div class="p-2 w-full mb-[10px]">
                              <form method="get" action="{{route('contacts.edit',['id' => $contact->id])}}">
                                <button class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">수정</button>
                              </form>
                            </div>
                            {{-- 8.3 삭제하기 --}}
                            <div class="p-2 w-full mb-[10px]">
                              <form id="delete_{{$contact->id}}" method="post" action="{{route('contacts.destroy',['id' => $contact->id])}}">
                                @csrf
                                @method('delete')
                                <button data-id="{{ $contact->id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">삭제</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
               
                  
                </section>

              </div>
          </div>
      </div>
  </div>

  {{-- 삭제시 자바스크립트 --}}
  <script>
    function deletePost(e) {
      'use strict'
      if (confirm('정말로 삭제 하시겠습니까?')) {
        document.getElementById('delete_'+e.dataset.id).submit()  /*  submit으로 실행  */
      }
    }

  </script>

</x-app-layout>
 