<x-layout>
  <h2>{{ $artikel->judul }}</h2>
  <p class="text-muted">By {{ $artikel->penulis }} | {{ $artikel->tanggal_publish }}</p>
  <p>{!! $artikel->isi !!}</p>
  <a href="/" class="btn btn-secondary mt-3">← Kembali</a>
</x-layout>
