@if ($errors->any())
    <ul class="col-md-12 alert alert-danger" style="list-style-type: none;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (Session::has('success'))
    <div class="alert alert-success fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('warning') }}
    </div>
@endif
