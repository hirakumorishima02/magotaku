<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>まごたく。</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href='{{ secure_asset('css/styles.css') }}'>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <div class="row center">
    {{Form::open(['url' => '/order'])}}
    {{Form::token()}}
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('apple', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('apple', 'リンゴ')}}
      </div>
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('onion', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('onion', '玉ねぎ')}}
      </div>
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('rice', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('rice', 'お米')}}
      </div>
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('tomato', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('tomato', 'トマト')}}
      </div>
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('beaf', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('beaf', '牛肉')}}
      </div>
      <div class="col s6 m4">
          <img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('fish', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('fish', '魚')}}
      </div>
      {{Form::submit()}}
      {{Form::close()}}
    </div>
    <div class="row orders-list">
        <h3 class="center">注文一覧</h3>
        <ul class="col s12 offset-s2">
            <li>
                @foreach($orders as $order)
                    {{Form::open(['url' => '/getOrder'])}}
                    {{Form::token()}}
                    ほしいもの：
                        @if($order->apple == 1)リンゴ @endif
                        @if($order->onion == 1) 玉ねぎ   @endif
                        @if($order->rice == 1) お米 @endif
                        @if($order->tomato == 1) トマト @endif
                        @if($order->beaf == 1) 牛肉 @endif
                        @if($order->fish == 1) お魚 @endif
                    {{Form::hidden('order_id', $order->id)}}
                    {{Form::submit('受注')}}
                    {{Form::close()}}
                @endforeach
            </li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
            var select = document.querySelectorAll('select');
            M.FormSelect.init(select);
    </script>
    </body>
    
</html>
