@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light">Create a New Channel</div>

                <div class="card-body">

                <form action="{{ route('channels.store') }}" method="post">
                @csrf

                <div class="form-group">
                <input type="text" name="channel" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save Channel</button>
                    </div>
                </div>
                
                
                
                </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
