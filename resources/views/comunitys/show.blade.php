<x-hansung-layout>

  {{-- 위 여백 --}}
  <div class="h-[50px]"> </div>

  {{-- 게시글 --}}
  <div class="Contact w-[1440px] h-[auto] p-2.5  mb-10 bg-white flex-col justify-start items-center gap-2.5 inline-flex relative">
    <div class="TitleDiv w-[1360px] h-[75px] mb-3 p-2.5 bg-white flex-col justify-start items-start gap-2.5 flex ">
      <div class="Title w-[1080px]  grow shrink basis-0 text-black text-[51px] font-normal font-['Inter']">{{$post->title}}</div>
    </div>
    <div class="Navbar w-[1366px] h-[68px] px-[35px] py-2.5 bg-slate-50 border-t-2 border-b-2 border-neutral-200 justify-start items-center gap-[29px] inline-flex">
      <div class="Author w-16 text-black text-[21px] font-bold font-['Inter']">작성자</div>
      <div class="Authorcontent w-16 text-black text-[21px] font-normal font-['Inter']">{{$post->name}}</div>
      <div class=" w-[1px] h-[25px]  border-2 border-zinc-400"></div>
      <div class="Date w-[89px] text-black text-[21px] font-bold font-['Inter']">작성일자</div>
      <div class="DateContent w-[235px] text-black text-[21px] font-normal font-['Inter']">{{$post->created_at}}</div>
    </div>
    <div class="Description w-[1363px] h-[auto] p-2.5 border-b-2">{{$post->contact}}</div>

    {{-- 게시글 수정 삭제 --}}
    @if(Auth::check() && $post->user_id === Auth::user()->id)
    <div class="flex absolute right-[40px] bottom-[-50px]">

      <form action="{{ route('posts.edit',['post'=>$post->id]) }}" method="get" class="mr-[20px]">
        {{-- <input type="hidden" name="userComment" value="{{$comment->comment}}">
        <input type="hidden" id="chechedComment" name="chechedComment" value="{{$comment->id}}"> --}}
        <button type="submit" class="text-blue-500">게시글 수정</button>
        <!-- value에 값을 변수로 박아ㄷ둔다 -->
      </form>

      <form id="delete_{{$post->id}}" action="{{route('posts.destroy',['post'=>$post->id])}}" method="post">
        @csrf
        @method('delete')
        <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this)" class="text-indigo-600  ">게시글 삭제</a>
      </form>
    </div>
    @endif

  </div>

  {{-- 댓글 추가 --}}
  <div class="px-8 my-5 ">
    <form action="/posts/{{$post->id}}/comments " method="post" class=" flex items-center ">
      @csrf
      <textarea name="comment" required placeholder="댓글 입력" cols="50" rows="1" class="w-[750px] bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="border-radius: 5px;"></textarea>
      <button class="ml-7 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">댓글 작성</button>
    </form>
  </div>

  {{-- 댓글 리스트 ~개  --}}
  <div class="px-8 my-[70px]">댓글 리스트 ({{$post->comments->count()}}개) </div>


  {{-- 🟢🟢 댓글 🟢🟢 --}}
  <section class="text-gray-600 px-3 body-font overflow-hidden mb-6 h-[300px]">
    <div class="container px-5 ">
      <div class="-my-8 divide-y-2 divide-gray-100">

        @foreach ($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
        <div class="py-8 flex flex-wrap md:flex-nowrap">
          <div class="md:w-40 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-gray-700">{{$comment->user->name}}</span>
            <span class="mt-1 text-gray-500 text-sm">{{$comment->created_at}}</span>
          </div>
          <div class="md:flex-grow">
            {{-- <p name="userComment" value="{{$comment->comment}}" class="leading-relaxed">{{$comment->comment}}</p> --}}
            <input name="userComment" value="{{$comment->comment}}" readonly class="leading-relaxed border-none focus:ring-0">

            {{-- 🟡 수정 , 삭제 🟡 --}}
            @if(Auth::check() && $comment->user_id === Auth::user()->id)
            <div class="flex">

              {{-- 🟡 수정 --}}
              {{-- <form action="/posts/{{$post->id}}/comments/{{$comment->id}}/edit" method="GET "> --}}
              <form class="mr-[20px]" action="{{ route('posts.comments.edit',['post'=>$post->id,'comment'=>$comment->id ]) }}" method="GET ">
                <input type="hidden" name="userComment" value="{{$comment->comment}}">
                <input type="hidden" id="chechedComment" name="chechedComment" value="{{$comment->id}}">
                <button type="submit" class="text-blue-500">수정</button>
                <!-- value에 값을 변수로 박아ㄷ둔다 -->
              </form>

              {{-- 🟡 삭제 --}}
              <form id="delete_{{$post->id}}" action="/posts/{{$post->id}}/comments/{{$comment->id}}" method="POST">
                {{-- <form action="{{ route('posts.comments.edit',['post'=>$post->id,'comment'=>$comment->id ]) }}" method="POST"> --}}
                @csrf
                @method('delete')
                <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this)" class="text-indigo-600  ">삭제</a>
              </form>
            </div>
            @endif

          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  {{-- 아래 여백 --}}
  {{-- <div class="h-[50px]"> </div> --}}

</x-hansung-layout>



{{-- 삭제시 자바스크립트 --}}
<script>
  function deletePost(e) {
    'use strict'
    if (confirm('진짜 지워도 괜찮나?')) {
      document.getElementById('delete_' + e.dataset.id).submit()
    }
  }
</script>