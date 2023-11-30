<x-hansung-layout >

    {{-- 아래 여백 --}}
    <div class="h-[80px]"> </div>

  <div class="Contact w-[1440px] h-[auto] p-2.5  mb-10 bg-white flex-col justify-start items-center gap-2.5 inline-flex ">
    <div class="TitleDiv w-[1360px] h-[75px] mb-3 p-2.5 bg-white flex-col justify-start items-start gap-2.5 flex ">
      <div class="Title w-[1080px]  grow shrink basis-0 text-black text-[51px] font-normal font-['Inter']">{{$post->title}}</div>
    </div>
    <div class="Navbar w-[1366px] h-[68px] px-[35px] py-2.5 bg-slate-50 border-t-2 border-b-2 border-neutral-200 justify-start items-center gap-[29px] inline-flex">
      <div class="Author w-16 text-black text-[21px] font-bold font-['Inter']">작성자</div>
      <div class="Authorcontent w-16 text-black text-[21px] font-normal font-['Inter']">{{$post->user->name}}</div>
      <div class=" w-[1px] h-[25px]  border-2 border-zinc-400"></div>
      <div class="Date w-[89px] text-black text-[21px] font-bold font-['Inter']">작성일자</div>
      <div class="DateContent w-[235px] text-black text-[21px] font-normal font-['Inter']">{{$post->created_at}}</div>
    </div>
    <div class="Description w-[1363px] h-[auto] p-2.5 border-b-2">{{$post->content}}</div>
  </div>

  {{-- 댓글 추가 --}}
  <div class="px-8 my-5 ">
    <form action="/posts/{{$post->id}}/comments " method="post" class=" flex items-center ">
      @csrf
      <textarea name="comment" required placeholder="댓글 입력"  cols="50" rows="1"  class="w-[750px] bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" style="border-radius: 5px;"></textarea>
      <button class="ml-7 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">댓글 작성</button>
    </form>
  </div>  

<div class="px-8 my-[70px]" >댓글 리스트 ({{$post->comments->count()}}개) </div>

 {{-- 댓글 --}}
  <section class="text-gray-600 px-3 body-font overflow-hidden mb-6">
    <div class="container px-5  {{-- mx-auto --}}">
      <div class="-my-8 divide-y-2 divide-gray-100">
        
        @foreach ($post->comments()->orderBy('created_at', 'desc')->get()  as $comment)
          <div class="py-8 flex flex-wrap md:flex-nowrap">
            <div class="md:w-40 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
              <span class="font-semibold title-font text-gray-700">{{$comment->user->name}}</span>
              <span class="mt-1 text-gray-500 text-sm">{{$comment->created_at}}</span>
            </div>
            <div class="md:flex-grow">
              <p class="leading-relaxed">{{$comment->comment}}</p>
              {{-- 삭제 --}}
              @if(Auth::check() && $comment->user_id === Auth::user()->id)
                <form action="/comments/{{$comment->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">삭제</button>
                </form>
              @endif
            </div>
          </div>
        @endforeach
      
      </div>
    </div>
  </section>

  {{-- 아래 여백 --}}
  <div class="h-[50px]"> </div>


</x-hansung-layout>

