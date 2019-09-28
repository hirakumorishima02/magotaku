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
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      <div class="col s6 m4"><img src="img/food.jpg" name="foodImg" decoding="async" loading="lazy" width="100%" height="100%">
          <button>注文</button>
      </div>
      
    </div>
    <div class="row orders-list">
        <h3 class="center">注文一覧</h3>
        <ul class="col s12 offset-s2">
            <li>ほしいもの：リンゴ・きゅうり・キャベツ<button>受注</button></li>
            <li>ほしいもの：なす・なし・ポン酢<button>受注</button></li>
            <li>ほしいもの：カレー粉・鶏肉・玉ねぎ<button>受注</button></li>
            <li>ほしいもの：にんじん・切り干し大根・醤油<button>受注</button></li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
    
</html>
