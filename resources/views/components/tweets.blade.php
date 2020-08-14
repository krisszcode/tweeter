@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="col-md-10">
            @if($tweets->count()>0)
            @foreach($tweets as $tweet)
            <div class="pb-4">
                <div class="card">
                    <div class="card-header">{{$tweet->user->name}}</div>
                        <div class="card-body">
                            {{ $tweet->tweet }}
                        </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $tweets->links() }}
                </div>
            </div>
            @else
                No tweet there :/
            @endif
        </div>
    </div>
@endsection
