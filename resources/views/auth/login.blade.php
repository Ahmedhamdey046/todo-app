@extends('\layouts.main')
<!-- Extending layout\main -->
@push('head')
<title>Login Todo </title>
@endpush

@section('main-section')
<div class="container">
    <div>
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
        
        @if (session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        
        @if (session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>

    <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
        <div class="h2">Login</div>
        <a href="{{route("register")}}" class="btn btn-primary btn-lg">Register</a>
        <a href="{{route("todo.index")}}" class="btn btn-primary btn-lg">Home</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>   
                    <label for="" class="form-label mt-4">Email</label><!-- mt-4 = margin 4 -->
                    <input type="email" name="email" class = "form-control" placeholder="Email">
                </div>

                <div>   
                    <label for="" class="form-label mt-4">Password</label><!-- mt-4 = margin 4 -->
                    <input type="password" name="password" class = "form-control" placeholder="Password">
                </div>

                <button class="btn btn-primary btn-lg mt-4">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection