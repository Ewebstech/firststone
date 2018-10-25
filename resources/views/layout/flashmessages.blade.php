@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <strong><li align="center">{{ $error }}</li></strong>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success alert-block" align="center">
        <button type="button" class="close" data-dismiss="alert"> </button>
        <strong> {!! session('success') !!} </strong>
    </div>
@endif


@if(Session::has('error'))
    <div class="alert alert-error alert-block" align="center">
        <button type="button" class="close" data-dismiss="alert">  </button>
        <strong> {!! session('error') !!} </strong>
    </div>
@endif 