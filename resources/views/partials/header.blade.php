
<header>
  <img class="logo" src="{{'img/marchio-sito-test.png'}}" alt="La Molisana">
  <nav class="header-nav">
    <ul class="main-menu">
      <li class="{{(url()->current() == route('index')) ? 'active' : ''}}">
      {{-- @if (url()->current() == route('index'))
      @endif  FORMA NORMALE DI SEGUITO FORMA CONTRATTA, SE E TRUE AGGIUNGI ACTIVE SE NO NON AGGIUGERE NULLA, OPERATORE TERNARIO--}}
        <a href="{{route('index')}}">Home</a>
      </li>
      <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">
        <a href="{{route('prodotti')}}">Prodotti</a>
      </li>
      <li class="{{(url()->current() == route('news')) ? 'active' : ''}}">
        <a href="{{route('news')}}">News</a>
      </li>
      {{-- <li><a href="{{route('prodotti')}}">Prodotti</a></li>
      <li><a href="{{route('news')}}">News</a></li> --}}
    </ul>
  </nav>
</header>
