<x-app-layout>
<x-slot name="header">Daftar Laporan</x-slot>

<div class="p-6">
<a href="{{ route('laporan.create') }}" class="btn btn-primary mb-3">+ Buat Laporan</a>

<table class="table">
<tr>
    <th>Judul</th>
    <th>Status</th>
    <th>Foto</th>
</tr>
@foreach($laporans as $l)
<tr>
    <td>{{ $l->judul }}</td>
    <td>{{ $l->status }}</td>
    <td>
        @if($l->foto)
            <img src="{{ asset('storage/'.$l->foto) }}" width="80">
        @endif
    </td>
</tr>
@endforeach
</table>
</div>
</x-app-layout>
