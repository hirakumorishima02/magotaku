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
    <div class='navbar-fixed'>
        <nav>
            <div class="nav-wrapper">
                  <a href="#" class="magotaku-logo"><img src="img/logo.png" width="80px" /></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                </li>
                                <li class="nav-item">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                            @endguest
                  </ul>
            </div>
        </nav>
    </div>

    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider1.jpg" class="slider1" decoding="async" loading="lazy"> <!-- random image -->
            <div class="caption center-align">
              <h3>Welcome to Your Home Lawn Care Provider!</h3>
              <h5 class="light grey-text text-lighten-3">High Quality</h5>
            </div>
          </li>
          <li>
            <img src="img/slider2.jpg"> <!-- random image -->
            <div class="caption left-align" decoding="async" loading="lazy">
              <h3>More than the price</h3>
              <h5 class="light grey-text text-lighten-3">Reasonable Price</h5>
            </div>
          </li>
          <li>
            <img src="img/slider3.jpg" decoding="async" loading="lazy"> <!-- random image -->
            <div class="caption right-align">
              <h3>Agile lawn mowing</h3>
              <h5 class="light grey-text text-lighten-3">Stress-free waiting time</h5>
            </div>
          </li>
        </ul>
    </div>

    <div class="row center">
        <h3>利用方法</h3>
          <ul class="collapsible col s10 offset-s1">
            <li>
              <div class="collapsible-header"><i class="material-icons">local_taxi</i>学生の方</div>
                <div class="collapsible-body">
                  <span>
                      aaa
                  </span>
                </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">home</i>注文希望の方</div>
                <div class="collapsible-body">
                  <span>
                      
                  </span>
                </div>
            </li>
          </ul>
    </div>

    <div class="row center">
    <h3>食材の注文</h3>
    {{Form::open(['url' => '/order'])}}
    {{Form::token()}}
      <div class="col s6 m4">
          <img src="img/apple.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('apple', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('apple', 'リンゴ')}}
      </div>
      <div class="col s6 m4">
          <img src="img/onion.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('onion', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('onion', '玉ねぎ')}}
      </div>
      <div class="col s6 m4">
          <img src="img/rice.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('rice', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('rice', 'お米')}}
      </div>
      <div class="col s6 m4">
          <img src="img/tomato.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('tomato', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('tomato', 'トマト')}}
      </div>
      <div class="col s6 m4">
          <img src="img/beaf.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('beaf', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('beaf', '牛肉')}}
      </div>
      <div class="col s6 m4">
          <img src="img/fish.jpg" class="foodImg" decoding="async" loading="lazy" width="80%" height="80%" />
          {{Form::select('fish', ['注文しない', '注文する'], null, ['class' => 'select'])}}
          {{Form::label('fish', '魚')}}
      </div>
        <button class="btn waves-effect waves-right order-btn" type="submit" name="action">注文</button>
      {{Form::close()}}
    </div>
    <div class="row orders-list">
        <h3 class="center">注文一覧</h3>
        <div class="col s10 offset-s1">
            <table>
                <thead>
                    <tr>
                        @guest
                        @else
                        <th>依頼者</th>
                        @endguest
                        <th>ほしいもの</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($orders as $order)
                @guest
                @else
                    @if($order->orderer_id == Auth::user()->id)
                        {{Form::open(['url' => '/deleteOrder'])}}
                    @else
                        {{Form::open(['url' => '/getOrder'])}}
                    @endif
                @endguest
                    {{Form::token()}}
                        <tr>
                            @guest
                            @else
                            <td>
                                {{ $order->user->name }}
                            </td>
                            @endguest
                            <td>
                                @if($order->apple == 1)リンゴ @endif
                                @if($order->onion == 1) 玉ねぎ   @endif
                                @if($order->rice == 1) お米 @endif
                                @if($order->tomato == 1) トマト @endif
                                @if($order->beaf == 1) 牛肉 @endif
                                @if($order->fish == 1) お魚 @endif
                            </td>
                            <td>
                            @guest
                            @else
                                @if($order->orderer_id == Auth::user()->id)
                                    <button class="btn waves-effect red" type="submit" name="action">削除
                                        <i class="material-icons right">block</i>
                                    </button>
                                @else
                                    <button class="btn waves-effect waves-right" type="submit" name="action">届ける
                                        <i class="material-icons right">local_taxi</i>
                                    </button>
                                @endif
                            @endguest
                            </td>
                        </tr>
                    {{Form::hidden('order_id', $order->id)}}
                    {{Form::close()}}
                    @endforeach
                </tbody>
            </table>
            </li>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
            var select = document.querySelectorAll('select');
            M.FormSelect.init(select);
            
            var slide = document.querySelector('.slider');
            M.Slider.init(slide,{});

            var collapse = document.querySelectorAll('.collapsible');
            M.Collapsible.init(collapse);
    </script>
    </body>
    
</html>
