<?php

namespace Database\Seeders;

use App\Models\Artikel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['judul' => 'Transformasi Digital UMKM', 'isi' => 'UMKM kini memanfaatkan platform online untuk memperluas jangkauan pasar dan meningkatkan penjualan.', 'penulis' => 'Alfian Oktafireza', 'tanggal_publish' => '2025-10-10'],
            ['judul' => 'AI di Dunia Pendidikan', 'isi' => 'Pemanfaatan AI dalam proses belajar mengajar membawa perubahan signifikan dalam metodologi pendidikan.', 'penulis' => 'Dina Putri', 'tanggal_publish' => '2025-10-11'],
            ['judul' => 'Blockchain untuk Keamanan Data', 'isi' => 'Teknologi blockchain menawarkan solusi keamanan data yang revolusioner untuk berbagai industri.', 'penulis' => 'Ahmad Rizky', 'tanggal_publish' => '2025-10-12'],
            ['judul' => 'Internet of Things dalam Smart City', 'isi' => 'IoT menjadi fondasi utama dalam pengembangan kota pintar yang efisien dan berkelanjutan.', 'penulis' => 'Sarah Wijaya', 'tanggal_publish' => '2025-10-13'],
            ['judul' => 'Cloud Computing untuk Startup', 'isi' => 'Layanan cloud computing memungkinkan startup untuk berkembang dengan biaya infrastruktur yang minimal.', 'penulis' => 'Budi Santoso', 'tanggal_publish' => '2025-10-14'],
            ['judul' => 'Cybersecurity di Era Digital', 'isi' => 'Ancaman siber semakin kompleks, membutuhkan strategi keamanan yang komprehensif dan adaptif.', 'penulis' => 'Maya Indira', 'tanggal_publish' => '2025-10-15'],
            ['judul' => 'Machine Learning untuk Prediksi Bisnis', 'isi' => 'Algoritma machine learning membantu perusahaan dalam membuat prediksi bisnis yang lebih akurat.', 'penulis' => 'Rian Pratama', 'tanggal_publish' => '2025-10-16'],
            ['judul' => 'Fintech dan Inklusi Keuangan', 'isi' => 'Teknologi finansial membuka akses layanan keuangan bagi masyarakat yang sebelumnya tidak terlayani.', 'penulis' => 'Lestari Dewi', 'tanggal_publish' => '2025-10-17'],
            ['judul' => 'Virtual Reality dalam Pelatihan', 'isi' => 'VR menghadirkan pengalaman pelatihan yang immersive dan efektif untuk berbagai profesi.', 'penulis' => 'Agus Setiawan', 'tanggal_publish' => '2025-10-18'],
            ['judul' => 'Big Data Analytics untuk E-commerce', 'isi' => 'Analisis big data membantu platform e-commerce memahami perilaku konsumen dengan lebih baik.', 'penulis' => 'Fitri Handayani', 'tanggal_publish' => '2025-10-19'],
            ['judul' => 'Robotika dalam Industri Manufaktur', 'isi' => 'Robot industri meningkatkan efisiensi dan presisi dalam proses manufaktur modern.', 'penulis' => 'Hendro Kusuma', 'tanggal_publish' => '2025-10-20'],
            ['judul' => 'Green Technology untuk Lingkungan', 'isi' => 'Teknologi hijau menawarkan solusi inovatif untuk mengatasi masalah lingkungan global.', 'penulis' => 'Sari Melati', 'tanggal_publish' => '2025-10-21'],
            ['judul' => 'Augmented Reality dalam Retail', 'isi' => 'AR mengubah pengalaman berbelanja dengan memungkinkan konsumen mencoba produk secara virtual.', 'penulis' => 'Tommy Gunawan', 'tanggal_publish' => '2025-10-22'],
            ['judul' => 'Digital Marketing di Era Mobile', 'isi' => 'Strategi pemasaran digital harus beradaptasi dengan dominasi penggunaan perangkat mobile.', 'penulis' => 'Nina Sari', 'tanggal_publish' => '2025-10-23'],
            ['judul' => 'Quantum Computing Revolution', 'isi' => 'Komputasi kuantum berpotensi mengubah paradigma komputasi dan pemecahan masalah kompleks.', 'penulis' => 'David Hartono', 'tanggal_publish' => '2025-10-24'],
            ['judul' => 'Smart Agriculture dengan IoT', 'isi' => 'Teknologi IoT membantu petani dalam monitoring dan optimalisasi hasil pertanian secara real-time.', 'penulis' => 'Wati Susanti', 'tanggal_publish' => '2025-10-25'],
            ['judul' => '5G dan Transformasi Konektivitas', 'isi' => 'Jaringan 5G membawa perubahan fundamental dalam kecepatan dan kualitas konektivitas digital.', 'penulis' => 'Reza Maulana', 'tanggal_publish' => '2025-10-26'],
            ['judul' => 'Digital Twins dalam Industri', 'isi' => 'Konsep digital twins memungkinkan simulasi dan monitoring sistem fisik secara virtual.', 'penulis' => 'Indah Permata', 'tanggal_publish' => '2025-10-27'],
            ['judul' => 'Biometric Authentication', 'isi' => 'Sistem autentikasi biometrik meningkatkan keamanan akses dengan teknologi pengenalan unik.', 'penulis' => 'Fadli Rahman', 'tanggal_publish' => '2025-10-28'],
            ['judul' => 'Edge Computing untuk Real-time Processing', 'isi' => 'Edge computing meminimalkan latensi dengan memproses data lebih dekat dengan sumbernya.', 'penulis' => 'Lia Anggraeni', 'tanggal_publish' => '2025-10-29'],
            ['judul' => 'Chatbot dan Customer Service', 'isi' => 'Implementasi chatbot AI meningkatkan efisiensi layanan pelanggan 24/7 dengan respons yang cepat.', 'penulis' => 'Arif Nugroho', 'tanggal_publish' => '2025-10-30'],
            ['judul' => 'DevOps dalam Software Development', 'isi' => 'Metodologi DevOps mempercepat siklus pengembangan software dengan kolaborasi yang lebih baik.', 'penulis' => 'Dewi Kartika', 'tanggal_publish' => '2025-10-31'],
            ['judul' => 'Sustainable Tech Innovation', 'isi' => 'Inovasi teknologi berkelanjutan menjadi kunci dalam menciptakan masa depan yang ramah lingkungan.', 'penulis' => 'Yoga Pratama', 'tanggal_publish' => '2025-11-01'],
            ['judul' => 'Digital Wallet dan Cashless Society', 'isi' => 'Adopsi dompet digital mempercepat transisi menuju masyarakat tanpa uang tunai.', 'penulis' => 'Putri Maharani', 'tanggal_publish' => '2025-11-02'],
            ['judul' => 'Neural Networks dalam Computer Vision', 'isi' => 'Jaringan neural deep learning membawa terobosan dalam teknologi computer vision dan image recognition.', 'penulis' => 'Kevin Surya', 'tanggal_publish' => '2025-11-03']
        ];

        foreach ($data as $d) {
            Artikel::create($d);
        }
    }
}
