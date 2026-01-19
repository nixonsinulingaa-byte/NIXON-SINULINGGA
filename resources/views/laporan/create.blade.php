<x-app-layout>
<x-slot name="header">Buat Laporan</x-slot>

<div class="p-6">
<form method="POST" action="{{ route('warga.laporan.store') }}" enctype="multipart/form-data">
@csrf

<input name="judul" class="form-control mb-2" placeholder="Judul">
<textarea name="deskripsi" class="form-control mb-2"></textarea>
<input type="file" name="foto" class="form-control mb-2">

<button class="btn btn-success">Kirim</button>
</form>
</div>
</x-app-layout>
