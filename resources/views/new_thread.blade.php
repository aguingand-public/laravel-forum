@extends('layout')

@section('return-link')
<a href="{{url('/')}}">Retour</a>
@endsection

@section('pagetitle')
Nouveau sujet
@endsection

@section('content')
    <form action="{{route('api.new_thread')}}" method="POST">
        <div class="form-group">
            <label for="title">Titre</label><input id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Auteur</label><input id="author" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Texte</label><textarea id="content" name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
@endsection