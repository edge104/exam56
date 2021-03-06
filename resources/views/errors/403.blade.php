{{-- 繼承主樣板的型態 --}}
{{-- @extends('layouts.app') 
@section('content')
<h1>403 Forbidden.</h1>
<p>您沒有權限可以執行目前的動作喔！</p>
@endsection --}}


{{-- LARAVEL內建的403 --}}
<html>
  <head>
    <title>{{ config('backpack.base.project_name') }} Error 403</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #B0BEC5;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
      }

      .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
      }

      .content {
        text-align: center;
        display: inline-block;
      }

      .title {
        font-size: 156px;
      }

      .quote {
        font-size: 36px;
      }

      .explanation {
        font-size: 24px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="title">403</div>
        <div class="quote">您沒有權限可以執行目前的動作喔！</div>
        <div class="explanation">
          <br>
          <small>
            <?php
              $default_error_message = "<a href='".url('')."'>返回首頁</a>.";
            ?>
            {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
         </small>
       </div>
      </div>
    </div>
  </body>
</html>
