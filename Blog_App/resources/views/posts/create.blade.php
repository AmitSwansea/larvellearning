@extends('main')
@section('title','Create post');

@section('content')


<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            @if($errors->any())
<div>
Errors:
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
            <hr>
            {!! Form::open(array('route' => 'posts.store','files'=>'true')) !!}
                {{Form ::label('title','Title:')}}
                {{Form ::label('image_path','upload image')}}
                {{Form::file('image')}}
             
                {{Form ::text('title',null,array('class'=>'form-control'))}}
                {{Form ::label('body',"Post Body:")}}
                {{Form ::textarea('body',null,array('class'=>'form-control'))}}
                {{Form ::submit('Create Post',array('class'=>'btn btn-success btn-lg','style'=>'margin-top: 20px;'))}}
           
                {!! Form::close() !!}
        </div>

</div>
@endsection

