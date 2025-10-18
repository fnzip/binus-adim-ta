<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul' => 'Menampilkan Data Artikel dari Database pada Laravel Mini Artikel',
            'isi' => "<p>Setelah proses pembuatan model dan migrasi untuk tabel <b>artikels</b> selesai, langkah penting berikutnya adalah melakukan perubahan pada <b>class</b>, <b>routes</b>, dan <b>views</b> agar data yang sudah tersimpan di database dapat ditampilkan ke halaman web.</p><p>Pertama, pada <b>class controller</b>, dibuat <b>ArtikelController</b> yang memanggil model <b>Artikel</b> menggunakan <code>Artikel::all()</code> atau <code>Artikel::latest()</code> untuk mengambil seluruh data dari tabel. Hasil query tersebut dikirim ke view dengan <code>compact('artikels')</code>.</p><pre><code>public function index() { \$artikels = Artikel::latest('tanggal_publish')->get(); return view('artikel.index', compact('artikels')); }</code></pre><p>Kedua, di bagian <b>routes</b>, file <code>web.php</code> perlu ditambahkan kode berikut agar Laravel mengetahui jalur URL yang akan memanggil controller tersebut:</p><pre><code>Route::get('/', [ArtikelController::class, 'index']); Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');</code></pre><p>Ketiga, pada <b>views</b>, dibuat file <code>index.blade.php</code> dan <code>show.blade.php</code>. File <code>index.blade.php</code> akan menampilkan daftar semua artikel menggunakan perulangan <code>@foreach</code>, sedangkan <code>show.blade.php</code> menampilkan detail artikel berdasarkan <code>id_artikel</code> yang dipilih.</p><pre><code>@foreach (\$artikels as \$artikel) &lt;h3&gt;{{ \$artikel-&gt;judul }}&lt;/h3&gt; &lt;p&gt;{{ Str::limit(\$artikel-&gt;isi, 100) }}&lt;/p&gt; @endforeach</code></pre><p>Dengan perubahan pada tiga bagian ini — <b>controller</b>, <b>route</b>, dan <b>view</b> — maka data artikel yang tersimpan di database SQLite dapat muncul secara dinamis pada halaman utama dan halaman detail. Hasil akhirnya, pengguna dapat membaca daftar artikel yang selalu ter-update tanpa perlu mengubah kode secara manual.</p>",
            'penulis' => 'Alfian Oktafireza',
            'tanggal_publish' => '2025-11-03']
        );
    }
}
