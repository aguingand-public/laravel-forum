@extends('layout')

@section('return-link')
<a href="{{route('thread',['id'=>$thread_id])}}">Retour</a>
@endsection

@section('pagetitle')
Nouvelle réponse
@endsection

@section('content')
    <form action="{{route('api.new_post',['id'=>$thread_id])}}" method="POST">
        <div class="form-group">
            <label for="author">Auteur</label><input id="author" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Texte</label><textarea id="content" name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
@endsection