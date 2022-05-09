<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{  route('grape.index')}}" class="nav-link">{{__('Grapes')}}</a></li>
        <li class="nav-item"><a href="{{ route('place.index')}}" class="nav-link">{{__('Places')}}</a></li>
        <li class="nav-item"><a href="{{ route('winetype.create')}}" class="nav-link">{{__('Wine types')}}</a></li>
        <li class="nav-item"><a href="{{ route('wine.create')}}" class="nav-link">{{__('Wines')}}</a></li>
    </ul>
    <ul class="nav justify-content-center">
    <li><a href="https://github.com/konyadonat" target="_blank">Github</a></li>
  </ul>
</footer>