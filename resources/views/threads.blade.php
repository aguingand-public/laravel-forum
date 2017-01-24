@extends('layout')


@section('pagetitle')
Sujets
@endsection

@section('content')
<p><a class="btn btn-primary btn-sm" href="{{url('/new_thread')}}">Nouveau sujet</a></p>
    <div class="list-group">
    @foreach($threads as $thread)
        <a class="list-group-item" href="{{route('thread',['id'=>$thread->id])}}" >
            <h4>{{$thread->title}}</h4>
            <p>
                Créé le {{$thread->date}} par {{$thread->author}}
            </p>
        </a> 
    @endforeach
    </div>
@endsection