@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Gestion des Projets</h1>

    <!-- Ajouter un projet -->
    <div class="mb-4">
        <h2>Ajouter un Projet</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image (URL)</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <!-- Liste des projets -->
    <div>
        <h2>Liste des Projets</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td><img src="{{ $project->image }}" alt="Image" style="width: 100px;"></td>
                    <td>
                        <!-- Modifier -->
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                        <!-- Supprimer -->
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
