<!--extend layout master.blade.php -->
 
@extends('layouts/master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Create new message: </h2>

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">

    @csrf
    <button type="submit">Submit</button>
</form>


<h2>Recent messages:</h2>

<ul>
<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
   and created_at in an <li> element -->
@foreach ($messages as $message) 
   <li>
       <b>
           <a href="/message/{{$message->id}}">{{$message->title}}:</b><br>
       {{$message->content}}<br>
       {{$message->created_at->diffForHumans()}}           
   </li>

@endforeach
</ul>

@endsection
