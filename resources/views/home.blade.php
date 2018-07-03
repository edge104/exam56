@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- 
    設定新的內容 往在nav.blade.php裡就已自訂的scetion('my_menu')裡塞，
    以(at)parent決定是否延用nav裡的自訂內容
    此處只有在此視圖﹙頁面﹚才有作用
    以(at)stop結尾，等同(at)endsection
-->
{{-- @section('my_menu')
    <li><a class="nav-link" href="#">自訂選項</a></li>
    @parent
@stop --}}