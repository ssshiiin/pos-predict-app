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
    ['url' => '/dashboard', 'label' => 'Dashboard', 'img' => 'dashboard'], 
    ['url' => '/dashboard/product', 'label' => 'Product', 'img' => 'order'], 
    ['url' => '/dashboard/order', 'label' => 'Order', 'img' => 'order'], 
    ['url' => '/dashboard/register', 'label' => 'File Upload', 'img' => 'upload'], 
    ['url' => '/dashboard/previous', 'label' => 'Previous Data', 'img' => 'upload'], 
    ['url' => '/dashboard/setting', 'label' => 'Setting', 'img' => 'setting'], 
    ]; ?>
  <nav id="drawer" class="drawer">
    <div>
      <button id="drawerButton" class="drawer__button">
        close
      </button>
    </div>
    <div class="drawer__nav">
      <ul>
        <div class="line"></div>
        @foreach ($navs as $nav)
        <li class="drawer__nav__item">
          <a href={{$nav["url"]}} >
            <span class="drawer__nav__item__center">
              <img src="{{ asset('images/' . $nav['img'] . '.png')}}" class="drawer__nav__item__center__img"/>
            </span>
            <span class="drawer__nav__item__label">{{$nav['label']}}</span>
          </a>
        </li>
        @if($nav['label'] == 'Order')
        <div class="line"></div>
        @endif
        @endforeach
      </ul>
    </div>
  </nav>
  <header id="header" class="header header__close">
    <div>
      <button id="headerButton" class="header__button">
        open
      </button>
    </div>
    <span>
      DashBoard
    </span>
  </header>
  <main id="main" class="main main__close">
      @yield('content')
  </main>
  <script>
    let drawer = document.getElementById('drawer');
    let drawerButton = document.getElementById('drawerButton');
    let header = document.getElementById('header');
    let headerButton = document.getElementById('headerButton');
    let main = document.getElementById('main');
    
    const isOpenDrawer = () => {
      const drawerClass = drawer.classList;
      const headerClass = header.classList;
      const mainClass = main.classList;
      
      if(drawerClass.length == 1){
        drawerClass.add('drawer__close');
        headerClass.remove('header__close');
        mainClass.remove('main__close');
      } else {
        drawerClass.remove('drawer__close');
        headerClass.add('header__close');
        mainClass.add('main__close');
      }
    }

    drawerButton.addEventListener('click', () => isOpenDrawer(), false);
    headerButton.addEventListener('click', () => isOpenDrawer(), false);
  </script>
</body>
</html>
