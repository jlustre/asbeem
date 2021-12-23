@if(Session::has('error'))
    <div class="form-group">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session::get('error') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@elseif(Session::has('success'))
    <div class="form-group">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session::get('success') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif