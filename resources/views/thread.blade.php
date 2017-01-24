@extends('layout')


@section('return-link')
<a href="{{url('/')}}">Retour</a>
@endsection

@section('pagetitle')
Sujet "{{$thread->title}}"
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <p><i>Le {{$thread->date}} par {{$thread->author}}</i></p>
        <p>{{$thread->content}}</p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Réponses</div>
    <div class="panel-body">
        <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <p><i>Le {{$post->date}} par {{$post->author}}</i></p>
                <div>{{$post->content}}</div>
            </li>
        @endforeach
        </ul>
        <a href="{{route('new_post',['id'=>$thread->id])}}">Nouvelle réponse</a>
    </div>
</div>
@endsection