<x-master-layout title="Géneros" cardTitle="Géneros">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detalles del genero</h2>
                <div class="form-group">
                    <label for="gender_id"><strong>ID:</strong></label>
                    <input type="text" class="form-control" value="{{ $genre->id }}" disabled>
                </div>
                <div class="form-group">
                    <label for="gender_name"><strong>Nombre:</strong></label>
                    <input type="text" class="form-control" value="{{ $genre->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="gender_slug"><strong>Slug:</strong></label>
                    <input type="text" class="form-control" value="{{ $genre->slug }}" disabled>
                </div class="text-left mt-3">
                <a href="{{ route('genres.index') }}" class="btn btn-info btn-sm hover-elevate-up">Regresar</a>
                <a href="{{ route('genres.edit', $genre->id) }}"
                    class="btn btn-primary btn-sm hover-elevate-up">Editar</a>
            </div>
        </div>
    </div>
</x-master-layout>
