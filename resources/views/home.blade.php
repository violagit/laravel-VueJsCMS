@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b style="color:blueviolet;text-align:center">Welcome to Tech Blog</b></div>
                </div>
            </div>
            <div style="text-align:center" class="title m-b-md">
                <h3 style ="text-align:center"> 
                    <a  class="btn btn-primary btn-lg btn-block" style="background-color:blueviolet;text-align:center" href="{{ url('/posts') }}"> Go check our latest posts<a>
                </h3>
            </div>
        </div>
    </div>
</div>
@endsection


