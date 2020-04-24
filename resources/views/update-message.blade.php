@extends('layouts.app')

@section('title-block') Update contact @endsection

@section('content')
    <h1>Update contact</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="Enter name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Enter email</label>
            <input class="form-control" type="text" name="email" value="{{$data->email}}" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="subject">Topic of message</label>
            <input class="form-control" type="text" name="subject" value="{{$data->subject}}" placeholder="Topic message" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter message">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
