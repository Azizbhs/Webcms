<div class="d-flex justify-content-between align-items-center py-3">
    <div class="search-bar">
        <input type="text" class="form-control" placeholder="Search ">
    </div>

    <div class="d-flex align-items-center">

        <button class="btn btn-light me-4">
            <i class="fa-solid fa-bell"></i>
        </button>
        <button class="btn btn-light me-5">
            <i class="fa-brands fa-rocketchat"></i>
        </button>

        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('assets/pics/image.jpg') }}" alt="Profile" class="rounded-circle me-2"
                    style="width: 40px; height: 40px;">
                name here
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
        </div>
    </div>
</div>
