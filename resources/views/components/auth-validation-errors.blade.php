@props(['errors'])

{{-- 
    $errors 변수는 라라벨에서 기본적으로 제공하는 변수로, 
    HTTP 요청에 대한 유효성 검사(validation)에서 발생한 오류 메시지들을 담고 있습니다.

    이 변수는 라라벨의 미들웨어인 Illuminate\View\Middleware\ShareErrorsFromSession에 의해 
    모든 뷰에 자동으로 공유되므로, 별도로 전달하지 않아도 뷰에서 사용할 수 있습니다.
--}}

@if ($errors->any())
    <div {{ $attributes }}> <!--Blade 컴포넌트의 속성 => 컴포넌트를 사용할 때 전달되는 모든 HTML 속성들이 이 변수에 자동으로 할당된다 -->
        <!-- 출력 내용 -->
        <div class="font-medium text-red-600">
          <!-- __는 Laravel의 국제화(i18n) 함수로, 다국어 지원을 위한 기능입니다. 이 함수는 주어진 문자열을 현재 설정된 언어로 번역합니다 -->
            {{ __('') }} {{-- 여기에 내용 넣으면 오류시 출력 --}}
        </div>
        
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                {{-- 여기에 내용 넣으면 오류시 출력  --}}
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif




