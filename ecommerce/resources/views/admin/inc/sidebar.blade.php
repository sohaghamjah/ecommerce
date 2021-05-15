<div class="card" style="width: 18rem;">
    <img style="width: 100%; border-radius: 50%" height="auto" src="{{ asset(Auth::user()-> photo) }}" class="card-img-top" alt="User Profile Image">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <a href="{{ route('admin.profile') }}" class="btn btn-block btn-primary">Home</a>
            <a href="{{ route('admin.showPhoto') }}" class="btn btn-block btn-primary">Update Photo</a>
            <a href="{{ route('admin.showPassword') }}" class="btn btn-block btn-primary">Change Password</a>
            <a class="btn btn-block btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
             </form>
        </ul>
    </div>
</div>
