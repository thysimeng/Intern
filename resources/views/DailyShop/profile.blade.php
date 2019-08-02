@extends('layouts.CSSHome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                <div class="card-header"></div>
                Name    : {{ Auth::user()->name }}<br>
                Email   : {{ Auth::user()->email }}  <br>
                Role    :
                    @role('admin')
                        Admin
                    @endrole
                @endauth
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
