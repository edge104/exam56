<!--繼承主樣板-->
@extends('layouts.app')

<!--塞值給主樣板裡的content scetion-->
@section('content')
    <h1 class="text-center">{{ __('Create Exam') }}</h1>
    <div class="row">
        <div class="col-2">&nbsp;</div>
        <div class="col-8">
            @can('建立測驗')

                    {{-- 有測驗id存在就跑修改的form，反之則新增 --}}
                    @if(isset($exam->id))
                        {{ bs()->openForm('patch', "/exam/{$exam->id}" , [ 'model' => $exam]) }}
                    @else
                        {{ bs()->openForm('post', '/exam') }}
                    @endif

                    {{ bs()->formGroup()
                            ->label('測驗標題', false, 'text-sm-right')
                            ->control(bs()->text('title')->placeholder('請填寫'))
                            ->helpText('')
                            ->showAsRow() }}<!--單行顯示-->
                    
                    {{ bs()->formGroup()
                            ->label('測驗狀態', false, 'text-sm-right')
                            ->control(bs()->radioGroup('enable', [1 => '啟用', 0 => '關閉'])
                                        ->selectedOption(1)
                                        ->inline())
                            ->helpText('')
                            ->showAsRow() }}

                    <!--隱藏欄位，紀錄使用者id-->
                    {{ bs()->hidden('user_id', Auth::id()) }}

                    {{ bs()->formGroup()
                            ->label('')
                            ->control(bs()->submit('建立測驗'))
                            ->showAsRow() }}
                {{ bs()->closeForm() }}

                {{-- 錯誤訊息集中起來 --}}
                @if (count($errors) > 0)
                    @component('bs::alert', ['type' => 'danger col-lg-12', 'animated' => true, 'dismissible' => true, 'data' => ['alert-id' => 40, 'context' => 'sample-code']])
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endcomponent
                @endif                

            @else
                @component('bs::alert', ['type' => 'danger', 'animated' => true, 'dismissible' => true, 'data' => ['alert-id' => 40, 'context' => 'sample-code']])
                    @slot('heading')
                        沒有建立測驗的權限
                    @endslot

                    <p>dismissible 右上會出現 x 符號，用來關閉；animated 在關閉時會有漸變效果；data 可以用來設置一些屬性</p>
                    <p>除了 type 外，其餘參數截可省略</p>
                @endcomponent
            @endcan
        </div>
    </div>
@endsection