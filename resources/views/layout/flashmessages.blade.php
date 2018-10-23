@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">  x  </button>
        <strong> {!! session('success') !!} <br><br></strong>
    </div>
@endif


@if(Session::has('error'))
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">  x  </button>
        <strong> {!! session('error') !!} <br><br></strong>
    </div>
@endif 