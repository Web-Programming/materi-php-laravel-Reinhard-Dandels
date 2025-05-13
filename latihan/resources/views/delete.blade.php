@extends('master')

@section('content')
    <h1>Hapus Materi: Fotosintesis</h1>

    <p>Apakah kamu yakin ingin menghapus materi <strong>"Fotosintesis"</strong>? Tindakan ini tidak bisa dibatalkan.</p>

    <form method="POST" action="{{ url('/materi/1') }}"> {{-- Ganti ID sesuai data --}}
        @csrf
        @method('DELETE')

        <button type="submit" style="padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 4px;">Ya, Hapus</button>
        <a href="{{ url('/materi') }}" style="margin-left: 10px; text-decoration: none;">Batal</a>
    </form>
@endsection
