@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
        <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-4  d-none d-lg-block bg-register-image"></div>
      <div class="col-lg-8">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
          </div>
          @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li><strong>{{$error}}</strong>
                    @endforeach
                </div>
            @endif

            <form class="user" action="{{ route('kontak.store') }}" method="post">
            {{ csrf_field()}}
            <div class="form-group row">
              <input type="text" class="form-control form-control-user" id="usr" name="nama" placeholder="First Name">
              </div>

              <div class="form-group row">
                <input type="text" class="form-control form-control-user" id="nohp" name="nohp" placeholder="Last Name">
              </div>
            <div class="form-group row">
              <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
            </div>
            <div class="form-group row">
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="alamat">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Register Account
            </button>
          </form>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
    </div>
</section>
@endsection