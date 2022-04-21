@extends('main')

<?php $titleTag=htmlspecialchars($post->title); ?>

@section('title','|View Post')

@section('content')

<h1>{{$post->title}}<h1>
<div class="row">
<p class='lead'>{{$post->body}}</p>
<img src="{{asset('public/images/'.$post->image_path)}}" width="70px" height="70px">
<div class="div">
        <div class="col-sm-7">

        @foreach($post->comments as $comment)
        <div class="comment">
            <p><strong> Name:</strong>{{$comment->name}}</p>
            <p> <strong>Comment:</strong></br>{{$comment->comment}}</p>
        </div>
        @endforeach
        </div>
        

</div>
<div class="col-sm-6">

<div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2">
        {{Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])}}
        <div class="row">
            <div class="col-md-6">

           
                {{Form ::label('name',"Name:")}}
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
        <div class="col-md-6">
        {{Form ::label('emailid',"Email:")}}
                {{Form::text('emailid',null,['class'=>'form-control'])}}


        </div>
        <div class="col-md-12">
        {{Form ::label('comment',"Comment:")}}
                {{Form::textarea('comment',null,['class'=>'form-control'])}}
        `


        {{Form ::submit('Add comment',array('class'=>'btn btn-success btn-lg','style'=>'margin-top: 20px;'))}}
           

        </div>
        {{Form::close()}}
    </div>

</div>
@endsection