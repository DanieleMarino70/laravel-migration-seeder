<div class="container">
    <nav class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link @if(Request::route()?->getName() == 'home') active @endif" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ route('list_trains') }}" class="nav-link">Treni</a></li>
      </ul>
    </nav>
</div>
