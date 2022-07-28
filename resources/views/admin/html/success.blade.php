@if(Session::has('flash_message'))
<div class="alert alert-{{Session::get('flash_type')}}">
    <ul class="list-unstyled mb-0">
        <li class="text-white">{{Session::get('flash_message')}}</li>
    </ul>
</div>
@endif