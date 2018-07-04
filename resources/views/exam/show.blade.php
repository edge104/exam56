<!--繼承主樣板-->
@extends('layouts.app')

<!--塞值給主樣板裡的content scetion-->
@section('content')
    <h1 class="text-center">{{$exam->title}}</h1>

    <div class="col-lg-10 offset-lg-1 small text-center text-muted">
        發佈於 {{$exam->created_at->format("Y年m月d日 H:i:s")}} / 最後更新： {{$exam->updated_at->format("Y年m月d日 H:i:s")}}
    </div>
@endsection