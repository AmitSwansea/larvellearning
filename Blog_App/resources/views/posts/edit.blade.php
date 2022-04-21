@extends('main')

@section('title','|Edit Post')

@section('content')


{!! Form::model($post,['route'=>['posts.update', $post->id]]) !!}
                {{Form ::label('title','Title:')}}

             
                {{Form ::text('title',null,['class'=>'form-control'])}}
                {{Form ::label('body',"Post Body:")}}
                {{Form ::textarea('body',null,array('class'=>'form-control'))}}
               
           


<div class="col-sm-2">
    
{{Form ::submit('Edit',['class'=>'btn btn-primary btn-block'])}}

</div>


<div class="col-sm-2">
{!!Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-primary btn-block'))!!}

               
</div>

</div>
@endsection