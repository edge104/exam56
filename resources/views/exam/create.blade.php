<!--繼承主樣板-->
@extends('layouts.app')

<!--塞值給主樣板裡的content scetion-->
@section('content')
    <h1>{{ __('Create Exam') }}</h1>

    {{ bs()->openForm('post', '/exam') }}
        {{ bs()->text('測驗標題')->placeholder('請填入測驗標題') }}
        {{ bs()->select('enable', ['1' => '開啟', '0' => '關閉'], '1') }}

    {{ bs()->closeForm() }}    

@endsection