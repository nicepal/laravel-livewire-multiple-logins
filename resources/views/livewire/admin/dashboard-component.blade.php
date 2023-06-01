@section('title')
    Admin Dashboard
@endsection
<div>
    Admin Dashboard Page

    <br/>

    <br/>

    <a class="dropdown-item" href="{{ route('admin.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
        Logout
    </a>
    <form method="post" id="logout-form" action="{{route('admin.logout')}}" style="display:none;">
        @csrf
    </form>
</div>
