<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Kategoriler</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Kategori Ekle</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adı</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form method="POST" action="{{ route('categories.destroy', $category) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
