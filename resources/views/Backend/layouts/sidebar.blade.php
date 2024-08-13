<h3>WeHR</h3>
<p class="mt-5 menu">MAIN MENU</p>
<ul class="nav flex-column mt-3">
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-gauge", 'name' => 'Dashboard', 'route' => '\dashboard'])
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-circle-user", 'name' => 'Employees', 'route' => '\employees'])
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-building", 'name' => 'Departments', 'route' => '\departments'])
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-users", 'name' => 'Users', 'route' => '\users'])
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-circle-radiation", 'name' => 'Roles', 'route' => '\roles'])
</ul>
<p class="mt-5 menu">OTHER</p>
<ul class="nav flex-column mt-3">
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-headset", 'name' => 'Support', 'route' => '\support'])
    @include('backend.layouts.components.sidebar.item', ['icon'=> "fa-solid fa-gear", 'name' => 'Settings', 'route' => '\settings'])
</ul>