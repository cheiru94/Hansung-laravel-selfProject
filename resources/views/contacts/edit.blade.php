<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          편집하기
      </h2>
  </x-slot>

   
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">

                {{-- 🟢 Contact Us 내용 🟢 --}}
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <section class="text-gray-600 body-font relative">

                  <form method="POST" action="{{route('contacts.update',['id' =>$contact->id ] )}}">
                    @csrf
                    @method('put')
                    <div class="container px-5  mx-auto">
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">

                          {{-- 1. title --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="title" class="leading-7 text-lg text-gray-600">문의 사항</label>
                              <input type="text" id="title" name="title" value="{{$contact->title}}"   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          
                          {{-- 2. name --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="name" class="leading-7 text-lg text-gray-600">이름</label>
                              <input  type="text" id="name" name="name" value="{{$contact->name}}"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>

                          {{-- 3. email --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="email" class="leading-7 text-lg text-gray-600">e-mail</label>
                              <input type="email" id="email" name="email"  value="{{$contact->email}}"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>

                          {{-- 4. type --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label  class="leading-7 text-lg text-gray-600" >종류</label><br>
                              <input type="radio" name="type" value="house"  @if ($contact->type === "house") checked @endif > 주택
                              <input type="radio" name="type" value="villa" class="ml-[50px]"  @if ($contact->type === "villa") checked @endif > 빌라
                              <input type="radio" name="type" value="apartment" class="ml-[50px]"  @if ($contact->type === "apartment") checked @endif > 아파트
                              <input type="radio" name="type" value="shop" class="ml-[50px]"  @if ($contact->type === "shop") checked @endif > 상가
                              <input type="radio" name="type" value="supervision" class="ml-[50px]"  @if ($contact->type === "supervision") checked @endif > 감리
                            </div>
                          </div>

                          {{-- 5. region --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="region" class="leading-7 text-lg text-gray-600">지역선택 (울산광역시)</label><br>
                              <select name="region">
                                {{-- 숫자는 === 이 먹지 않는다..;;; --}}
                                <option value="남구" @if ($contact->region == "남구") selected @endif >남구</option>
                                <option value="중구" @if ($contact->region == "중구") selected @endif >중구</option>
                                <option value="북구" @if ($contact->region == "북구") selected @endif >북구</option>
                                <option value="동구" @if ($contact->region == "동구") selected @endif >동구</option>
                                <option value="울주군" @if ($contact->region == "울주군") selected @endif >울주군</option>
                                <option value="그 외 지역" @if ($contact->region == "그 외 지역") selected @endif >그 외 지역</option>
                              </select>
                            </div>
                          </div>
                          
                          {{-- 6. contact --}}
                          <div class="p-2 w-full mb-[10px]">
                            <div class="relative">
                              <label for="contact" class="leading-7 text-lg text-gray-600">문의 내용</label>
                              <textarea  id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{$contact->contact}}</textarea>
                            </div>
                          </div>

                          {{-- 8. button --}}
                          <div class="p-2 w-full mb-[10px]">
                              <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">수정 완료</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </form>
                  
                </section>

              </div>
          </div>
      </div>
  </div>
</x-app-layout>
<script>
  $('#contact').summernote({
    placeholder: '안녕하세요, 한성 건축사사무소',
    tabsize: 2,
    height: 300
  });
</script>