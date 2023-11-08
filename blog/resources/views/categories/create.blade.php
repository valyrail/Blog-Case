<div class="container">
    <div class="row">
        <div class="col-md-8">
        
            <h2>Yeni Kategori Ekle</h2>
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Kategori Adı</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Kategori Ekle</button>
            </form>
        </div>
    </div>
</div>
