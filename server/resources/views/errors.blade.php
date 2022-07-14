@if (Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close"  data-dismiss="alert">x</button>
    <strong>{{Session::get('success')}}</strong>
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close"  data-dismiss="alert">x</button>
    <strong>{{Session::get('error')}}</strong>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> 
    </div>
@endif