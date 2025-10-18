<x-layout>
  <div class="row">
    @foreach ($artikels as $artikel)
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h5>{{ $artikel->judul }}</h5>
            <p class="text-muted">By {{ $artikel->penulis }} | {{ $artikel->tanggal_publish }}</p>
            <p>{!! Str::limit($artikel->isi, 100) !!}</p>
            <a href="{{ route('artikel.show', $artikel->id_artikel) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-layout>
