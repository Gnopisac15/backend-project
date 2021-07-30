@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            
                <div class="card">
                    <div class="card-header ">Admin Panel</div>

                        <div class="card-body">
                           <div>
                           <a href="" style="text-decoration:none">Recipe Management</a>
                           </div>
                           <br>
                           
                           <div>
                           <a href=""style="text-decoration:none">View Users</a>
                           </div>
                    </div>
                </div>
            </div>

        <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><a href="/posts/create" class="btn btn-outline-primary">Add New Recipe</a></div>

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
@endsection
