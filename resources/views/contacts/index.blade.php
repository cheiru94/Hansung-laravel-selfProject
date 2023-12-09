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

  {{-- 🟢 2. 게시판 --}}
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        {{-- 게시판 내용 --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">


            {{-- 검색하기 input --}}
            <div class="w-full flex justify-center">

              <form method="get" action="{{route('contacts.index')}}" class="mb-8"> {{-- 검색된 결과로 다시 index로 팅구자 --}}
                <label for="topic" class="leading-7 text-lg text-gray-600">검색 분류</label><br>
                
                <select name="topic"  class=" w-[120px] h-[50px] bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="border-radius: 5px;">
                  {{-- 숫자는 === 이 먹지 않는다..;;; --}}
                  {{-- <option value="name" {{ old('topic')==="name" ? 'selected' : ''}}  >성명</option>
                  <option value="title" {{ old('topic')==="title" ? 'selected' : ''}} >문의사항</option>
                  <option value="region" {{ old('topic')==="region" ? 'selected' : ''}} >지역</option> --}}
                  <option value="name" {{ $topic==="name" ? 'selected' : ''}}  >성명</option>
                  <option value="title" {{ $topic==="title" ? 'selected' : ''}} >문의사항</option>
                  <option value="region" {{ $topic==="region" ? 'selected' : ''}} >지역</option>
                </select>

                <input value="{{$search}}" type="text" name="search" placeholder="검색" class="w-[350px] bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="border-radius: 5px;"">
                <button class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">검색하기</button>
              </form>
              
            </div>
              
            
              {{-- 테이블 --}}
              <div class="lg:w-3/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  {{-- 테이블 head --}}
                  <thead>
                    <tr class="text-center">
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">No.</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">성명</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">문의사항</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">지역</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">등록일</th>
                    </tr>
                  </thead>
                  {{-- 테이블 내용 --}}
                  <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="text-center">
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{$contact->id}}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{$contact->name}}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900"><a href="{{ route('contacts.show' ,['id'=>$contact->id])}}">{{$contact->title}}</a></td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 ">
                            @php
                              $region = '';
                              switch ($contact->region) {
                                case '남구':
                                  $region = '남구';
                                  break;
                                case '중구':
                                  $region = '중구';
                                  break;
                                case '북구':
                                  $region = '북구';
                                  break;
                                case '동구':
                                  $region = '동구';
                                  break;
                                case '울주군':
                                  $region = '울주군';
                                  break;
                                case '그 외 지역':
                                  $region = '그 외 지역';
                                  break;
                              }
                            @endphp
                            {{ $region }}  
                          </td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{$contact->created_at}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

                {{-- 신규 등록 --}}
              <div class="flex justify-end mt-4">
                <button class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                  <a class="text" href="{{route('contacts.create')}}" class="text-blue-500">신규등록</a>
                </button><br>
              </div>
              {{-- 페이지네이션 --}}
              <div class="mt-6 flex justify-center items-center">
                {{$contacts->links()}}
              </div>

            </div>
          </div>
      </div>
  </div>

  {{-- 🟢 3. 푸터 --}}
  {{-- <div class="h-[50px]"> </div> --}}
  <x-nav-footer class="fixed" />

</body>
</html>
 
 