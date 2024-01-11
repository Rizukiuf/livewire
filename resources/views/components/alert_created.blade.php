@if (session()->has('created'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('created') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif