@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    <ul style="padding: 0; margin: 0">
        @foreach($errors->all() as $error)
        <li style="display:block; margin: 10px 0">{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif