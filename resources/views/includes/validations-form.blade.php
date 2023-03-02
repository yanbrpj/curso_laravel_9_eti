@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error" style="color:#FF0000">{{ $error }}</li>
        @endforeach
    </ul>
@endif