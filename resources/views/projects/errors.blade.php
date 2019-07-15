@if ($errors->any())
    <div class="notification is-danger" style="margin-top: 10px;">

        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach

    </div>
@endif
