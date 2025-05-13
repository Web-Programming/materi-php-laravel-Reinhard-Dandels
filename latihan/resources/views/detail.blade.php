@extends('master')

@section('content')
    <h1>Detail Materi: Fotosintesis</h1>

    <p><strong>Judul Materi:</strong> Fotosintesis</p>

    <p><strong>Deskripsi:</strong></p>
    <p>
        Fotosintesis adalah proses biokimia yang dilakukan oleh tumbuhan hijau, alga, dan beberapa jenis bakteri
        untuk mengubah energi cahaya matahari menjadi energi kimia dalam bentuk glukosa. Proses ini sangat penting
        karena menghasilkan oksigen sebagai hasil samping dan menjadi dasar rantai makanan di ekosistem.
    </p>

    <p><strong>Reaksi Umum Fotosintesis:</strong></p>
    <p style="margin-left: 20px;">
        6CO₂ + 6H₂O + cahaya matahari → C₆H₁₂O₆ + 6O₂
    </p>

    <p><strong>Tahapan Fotosintesis:</strong></p>
    <ol>
        <li><strong>Reaksi Terang:</strong> Terjadi di grana (tilakoid) kloroplas dan memerlukan cahaya matahari secara langsung. Menghasilkan ATP dan NADPH.</li>
        <li><strong>Reaksi Gelap (Siklus Calvin):</strong> Terjadi di stroma kloroplas. Menggunakan ATP dan NADPH untuk mengubah CO₂ menjadi glukosa.</li>
    </ol>

    <p><strong>Manfaat Fotosintesis:</strong></p>
    <ul>
        <li>Memproduksi oksigen untuk pernapasan makhluk hidup.</li>
        <li>Menghasilkan makanan (glukosa) untuk tumbuhan dan makhluk hidup lainnya.</li>
        <li>Mengurangi kadar karbon dioksida di atmosfer.</li>
    </ul>

    <a href="{{ url('/materi') }}">Kembali ke Daftar Materi</a>
@endsection
