<div class="container">
    <h2>Gönderi Detayı</h2>
    
    @if ($post)
        <div class="card">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    @else
        <p>Gönderi bulunamadı.</p>
    @endif

    <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Tüm Gönderilere Geri Dön</a>
</div>
