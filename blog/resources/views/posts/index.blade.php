
    <div class="container">
        <h2>Tüm Gönderiler</h2>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Yeni Gönderi Ekle</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>İçerik</th>
                    <th>Kategori</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Göster</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Düzenle</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
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

