@extends('layouts.app')

@section('title-block') Message page @endsection

@section('content')
    <h1>Message page</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><smal>{{ $el->created_at }}</smal></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">More</button></a>
        </div>
    @endforeach
@endsection

