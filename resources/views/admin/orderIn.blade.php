@extends('admin.layouts.main')

@section('container')

<head>
    <style>
        h4 {
        text-align: center;
        }

        th, td {
        text-align: center;
        }

        .table-container {
            margin-right: 280px;
        }
    </style>
</head>
<div class="container mt-4 table-container">
    <div class="card">
        <div class="table-responsive">
        <h4 class="card-title">Pesanan Masuk</h4>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Waktu Pemesanan</th>
                        <th>Nama</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Item</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderIn as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->orderer_name }}</td>
                            <td>{{ $order->orderer_name }}</td>
                            <td>{{ $order->getTotalItemsAttribute() }}</td>
                            <td>
                                <button class="btn btn-danger">Tolak</button>
                                <button class="btn btn-success">Terima</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection

    
