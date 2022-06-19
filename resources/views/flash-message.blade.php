@if(session()->has('message'))
<div class="container alert bg-primary alert-dismissible fade show justify-content-center" role="alert" style="position:fixed;left: 50%;transform:translate(-50%);z-index:9999">
    <strong>{{ session('message') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif