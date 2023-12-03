@extends('cekpesanan.main')

@section('content-table')

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th class="hide-on-small">No</th>
            <th class="hide-on-small">Tanggal Masuk</th>
            <th class="hide-on-small">Opsi Pemesanan</th>
            <th class="hide-on-small">Nama Pemesan</th>
            <th class="hide-on-medium">Nomer Telepon</th>
            <th class="hide-on-medium">Alamat</th>
            <th class="hide-on-small">Jumlah Pesanan</th>
            <th class="hide-on-small">Status Pesanan</th>
            <th class="hide-on-small">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $index => $od)
        <tr>
            <td class="hide-on-small">{{ $index + 1 }}</td>
            <td class="hide-on-small">{{ $od->created_at }}</td>
            <td class="hide-on-small">{{ $od->delivery_option }}</td>
            <td class="hide-on-small">{{ $od->orderer_name }}</td>
            <td class="hide-on-medium">{{ $od->phone  ?: '-' }}</td>
            <td class="hide-on-medium">{{ $od->address  ?: '-' }}</td>
            <td class="hide-on-small">{{ $od->getTotalItemsAttribute() }}</td>
            <td class="hide-on-small"
                @if ($od->status == 'Menunggu Diproses')
                    <span class="badge text-bg-warning py-2">{{ $od->status }}</span>
                @elseif ($od->status == 'Sedang Diproses')
                    <span class="badge text-bg-info py-2">{{ $od->status }}</span>
                @elseif ($od->status == 'Selesai')
                    <span class="badge text-bg-success py-2">{{ $od->status }}</span>
                @else
                    <span class="badge text-bg-secondary py-2">{{ $od->status }}</span>
                @endif
            </td>
            <td class="hide-on-small">
                <a href="" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropView{{ $od->id }}"">  
                    <i class="ri-file-list-fill"></i>             
                </a>
            </td>
        </tr>
        <div class="tableSmall appear-on-small">
            <p class="appear-on-small text-center mt-2"><strong>{{ $index + 1 }}</strong></p>
            <p class="appear-on-small"><strong>Tanggal Masuk:</strong>{{ $od->created_at }}</p>
            <p class="appear-on-small"><strong>Opsi Pemesanan:</strong>{{ $od->delivery_option }}</p>
            <p class="appear-on-small"><strong>Nama Pemesan:</strong>{{ $od->orderer_name }}</p>
            <p class="appear-on-small"><strong>Nomer Telepon:</strong>{{ $od->phone  ?: '-' }}</p>
            <p class="appear-on-small"><strong>Alamat:</strong>{{ $od->address  ?: '-' }}</p>
            <p class="appear-on-small"><strong>Jumlah Pesanan:</strong>{{ $od->getTotalItemsAttribute() }}</p>
            <p class="appear-on-small"><strong>Status Pesanan:</strong>
                @if ($od->status == 'Menunggu Diproses')
                    <span class="badge text-bg-warning py-2">{{ $od->status }}</span>
                @elseif ($od->status == 'Sedang Diproses')
                    <span class="badge text-bg-info py-2">{{ $od->status }}</span>
                @elseif ($od->status == 'Selesai')
                    <span class="badge text-bg-success py-2">{{ $od->status }}</span>
                @else
                    <span class="badge text-bg-secondary py-2">{{ $od->status }}</span>
                @endif
            </p>
            <p class="appear-on-small text-center d-flex justify-content-center align-items-center"><strong>Aksi:</strong>
                <a href="" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropView{{ $od->id }}"">  
                    Detail Pesanan <i class="ri-file-list-fill"></i>             
                </a>
            </p>
        </div>
        @endforeach
    </tbody>
</table>
@endsection
