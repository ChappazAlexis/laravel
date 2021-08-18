@extends('layouts.base')
@section('css', 'addBook')

@section('title', 'Ajouter')

@section('content')
    <h1 class="title">Ajouter un livre</h1>
    <div>
        <form action="addBook" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="author" placeholder="Auteur">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication_year" placeholder="Année de publication">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genres</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" placeholder="Genre">
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea name="synopsis" id="" cols="24" rows="2"></textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection


