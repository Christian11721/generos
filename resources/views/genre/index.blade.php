<x-master-layout title="Géneros" cardTitle="Géneros">
    <div class="row">
        <div class="col-md-6">
            <h2>Géneros</h2>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('genres.create') }}" class="btn btn-primary btn-sm">Agregar género</a>
        </div>
    </div>
    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
        <thead class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->slug }}</td>
                    <td>
                        <div style="display: flex; gap: 5px;">
                            <div>
                                <a href="{{ route('genres.show', $genre->id) }}"
                                    class="btn btn-info btn-sm hover-elevate-up">Ver</a>
                            </div>
                            <div>
                                <a href="{{ route('genres.edit', $genre->id) }}"
                                    class="btn btn-primary btn-sm hover-elevate-up">Editar</a>
                            </div>
                            <div>
                                <form action="{{ route('genres.destroy', $genre->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"class="btn btn-danger btn-sm hover-elevate-up">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
</x-master-layout>
