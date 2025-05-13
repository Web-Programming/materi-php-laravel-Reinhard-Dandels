@extends('master')

@section('content')
    <h1>Tambah Materi Baru: Fotosintesis</h1>

    <form method="POST" action="{{ url('/materi') }}">
        @csrf

        <div>
            <label for="judul"><strong>Judul Materi</strong></label><br>
            <input type="text" name="judul" id="judul" value="Fotosintesis" placeholder="Contoh: Fotosintesis" required style="width: 100%; padding: 8px;">
        </div>
        <br>

        <div>
            <label for="deskripsi"><strong>Deskripsi Materi</strong></label><br>
            <textarea name="deskripsi" id="deskripsi" rows="8" placeholder="Tulis penjelasan tentang materi di sini..." required style="width: 100%; padding: 8px;">
Fotosintesis adalah proses tumbuhan mengubah cahaya matahari menjadi energi. Dalam proses ini, tumbuhan mengambil karbon dioksida dari udara dan air dari tanah, lalu menghasilkan glukosa dan oksigen sebagai hasil akhir.
            </textarea>
        </div>
        <br>

        <button type="submit" style="padding: 10px 20px; background-color: green; color: white; border: none; border-radius: 4px;">Simpan Materi</button>
        <a href="{{ url('/materi') }}" style="margin-left: 10px; text-decoration: none;">Batal</a>
    </form>
@endsection
