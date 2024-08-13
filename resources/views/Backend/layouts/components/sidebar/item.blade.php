<li class="nav-item pad py-2">
    <a class="nav-link {{ url()->current() == url($route) ? 'active' : '' }}" href="{{$route}}"><i class="{{$icon}} me-4"></i> {{ $name }}</a>
</li>
