<!--繼承主樣板-->
@extends('layouts.app')

<!--塞值給主樣板裡的content scetion-->
@section('content')
    <h1 class="text-center">{{ __('All Exam') }}</h1>

    <div class="list-group col-lg-10 offset-lg-1">

        {{-- 用forelse必定要搭配@empty不然會報錯 --}}
        @forelse($exams as $exam)

        <a href="/exam/{{ $exam->id }}" class="list-group-item list-group-item-action list-group-item-secondary">
            {{ $exam->created_at->format("Y年m月d日") }} - {{ $exam->title }}
        </a>
        
        @empty
            <a href="#" class="list-group-item list-group-item-action list-group-item-muted" style="cursor:default">尚無任何測驗</a>
        @endforelse
    </div>
@endsection