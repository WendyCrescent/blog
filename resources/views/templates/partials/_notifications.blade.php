@if (Session::has('info'))
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="alert alert-info" role="alert">
        <i class="fa fa-info" aria-hidden="true"></i>  {!! Session::get('info') !!}
      </div>
    </div>
  </div>
@endif
@if (Session::has('success'))
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
    <div class="alert alert-success" role="alert">
      <i class="fa fa-check" aria-hidden="true"></i>  {!! Session::get('success') !!}
    </div>
  </div>
</div>
@endif
@if (Session::has('error'))
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
    <div class="alert alert-danger" role="alert">
      <i class="fa fa-times" aria-hidden="true"></i> {!! Session::get('error') !!}
    </div>
  </div>
</div>
@endif
@if (Session::has('warning'))
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
    <div class="alert alert-warning" role="alert">
      <i class="fa fa-exclamation" aria-hidden="true"></i>  {!! Session::get('warning') !!}
    </div>
  </div>
</div>
@endif
