<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
  <?php $navs = [
    ['url' => 'ダッシュボード', 'label' => 'Dashboard'], 
    ['url' => 'カート', 'label' => 'Product'], 
    ['url' => 'カート', 'label' => 'Order'], 
    ['url' => '資料', 'label' => 'File Upload'], 
    ['url' => '資料', 'label' => 'Previous Data'], 
    ['url' => '資料', 'label' => 'Setting'], 
    ]; ?>
  <nav id="drawer" class="drawer">
    <div>
      <button id="drawerButton">
        close
      </button>
    </div>
    <div class="drawer__nav">
      <ul>
        @foreach ($navs as $nav)
        <li class="drawer__nav__item">
          <span class="drawer__nav__item__center">
            <img src="{{ asset('images/' . $nav['url'] . '.png')}}" class="drawer__nav__item__center__img"/>
          </span>
          <span class="drawer__nav__item__label">{{$nav['label']}}</span>
        </li>
        @endforeach
      </ul>
    </div>
  </nav>
  <main>
    <header id="header" class="header__short">
      <span>
        DashBoard
      </span>
    </header>
    <div class="main-category">
      @yield('content')
    </div>
  </main>
  <script>
    let drawer = document.getElementById('drawer');
    let drawerButton = document.getElementById('drawerButton');

    const isOpenDrawer = (dEle) => {
      const dClass = dEle.classList;
      console.log(dClass)

      if(!(dClass in 'drawer__close')){
        console.log("true")
        dEle.classList.add('drawer__close');
      } else {
        dEle.classList.remove('drawer__close');
      }
    }



    drawerButton.addEventListener('click', () => isOpenDrawer(drawer), false);
  </script>
</body>
</html>
