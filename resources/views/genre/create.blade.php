<x-master-layout title="Géneros" cardTitle="Géneros">
    <div class="row">
        <div class="col-md-12">
            <h2>Agregar genero</h2>
            <form action="{{ route('genres.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-md-2 col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="text-left mt-3">
                    <a href="{{ route('genres.index') }}" class="btn btn-info btn-sm hover-elevate-up">Cancelar</a>
                    <button type="submit" class="btn btn-primary btn-sm hover-elevate-up">Crear</button>
                </div>
            </form>
        </div>
    </div>
</x-master-layout>
