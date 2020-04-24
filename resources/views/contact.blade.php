@extends('layouts.app')

@section('title-block') Contact page @endsection

@section('content')
    <h1>Contact page</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Enter email</label>
            <input class="form-control" type="text" name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="subject">Topic of message</label>
            <input class="form-control" type="text" name="subject" placeholder="Topic message" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
