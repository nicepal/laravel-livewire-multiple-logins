@section('title')
    User Dashboard
@endsection
<div>
    User Dashboard Page

    <br/>

    <br/>

    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
        Logout
    </a>
    <form method="post" id="logout-form" action="{{route('logout')}}" style="display:none;">
        @csrf
    </form>
</div>