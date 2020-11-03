@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('flash_msg'))
            <div class="alert alert-success">
               {{Session::get('flash_msg')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">My Blog Page</div>
                <div class="card-body">
                <div class="container">
                    @foreach($categories as $category)
                    <div class="row">
                    <div class="col-sm">
                        <b>{{$category->description}}</b><span><a href="{{route('posts.show',$category->id)}}"> add post</a></span>
                        @foreach($category->posts as $post)
                        <div class="row">
                        <div class="col-sm">
                            {{$post->description}}<div class="float-right">{{$post->user->name}}</div>
                        </div>    
                        </div>
                        @endforeach
                    </div>
                    </div>
                    <hr>
                    @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

