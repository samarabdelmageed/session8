@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html>

@extends('includes.head', [$title="Home"])

<body>
  <div class="hero_area">

@include('includes.header')

@include('includes.slider')

  </div>

@include('includes.about')

@include('includes.service')

@include('includes.client')

@include('includes.contact')

@include('includes.team')

@include('includes.info')

@include('includes.footer')

@include('includes.footerJs')

</body>

</html>
@endsection