
<x-hansung-layout>
   
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">

                {{-- 🟢 Contact Us 내용 🟢 --}}
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                <section class="text-gray-600 body-font relative">

                <form method="POST" action="{{route('posts.store')}}">
                  @csrf
                  <div class="container px-5  mx-auto">
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                      <div class="flex flex-wrap -m-2">

                        {{-- 1. title --}}
                        <div class="p-2 w-full mb-[10px]">
                          <div class="relative">
                            <label for="title" class="leading-7 text-lg text-gray-600">제목</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        {{-- 2. name --}}
                        <div class="p-2 w-full mb-[10px]">
                          <div class="relative">
                            <label for="name" class="leading-7 text-lg text-gray-600">이름</label>
                            <input  type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        {{-- 3. email --}}
                        <div class="p-2 w-full mb-[10px]">
                          <div class="relative">
                            <label for="email" class="leading-7 text-lg text-gray-600">e-mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
               
                      

                        {{--💛  6. contact --}}
                        <div class="p-2 w-full mb-[10px]">
                          <div class="relative">
                            <label for="contact" class="leading-7 text-lg text-gray-600">게시글 내용</label>
                            <textarea  id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('title') }}</textarea>
                          </div>
                        </div>
                        
                     
                        <script>
                          $('#contact').summernote({
                            placeholder: '안녕하세요, 한성 건축사사무소',
                            tabsize: 2,
                            height: 300
                          });
                        </script>

                        {{-- 8. button --}}
                        <div class="p-2 w-full mb-[10px]">
                          <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">문의하기</button>
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

</x-hansung-layout>

<script>
  $('#contact').summernote({
    placeholder: 'ヤッホー',
    tabsize: 2,
    height: 300
  });
</script>