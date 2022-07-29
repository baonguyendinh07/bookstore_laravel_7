@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    <ul style="padding: 0; margin: 0">
        @foreach($errors->all() as $error)
        <li style="display:block; margin: 10px 0">{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('flash_message'))
<div class="alert alert-{{Session::get('flash_type')}}">
    <ul class="list-unstyled mb-0">
        <li class="text-white">{{Session::get('flash_message')}}</li>
    </ul>
</div>
@endif