@extends('main')

@section('title','|All Post')

@section('content')

<a class="navbar-brand" href="#">Welcome {{Auth::user()->name}}</a>
<div class="row">
        <div class="col-md-10">
            <h1>All posts</h1>
        <div>
             <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create NewPost</a>
        </div>    
</div>
<hr>

<div class="row"> 
           
            <div class="col-md-2">
                <table class="table">

                    <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>

                     </thead>

                    <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <th>{{$post->id}}<th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->body}}</th>
                            <th>{{$post->created_at}}</th>
                            <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default">view</a><a href="{{route('posts.edit',$post->id)}}" class="btn ntn-default">Edit/Delete</a></td> 
                        </tr>
                    
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $posts->links('pagination::bootstrap-4');!!}
                </div>
            </div>
            
                

        </div>

                </div>
</div>

@stop