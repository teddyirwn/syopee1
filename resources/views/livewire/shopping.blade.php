<div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-3 mt-3">
                    <div class="card">
                        <div class="card-header">
                            KERANJANG
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="card-body">
                            Rp. {{ $jumlah }}
                        </div>
                    </div>

                    <div class="card mt-4 ">
                        <div class="card-header">
                            BELANJAAN SAYA
                        </div>
                        <div class="card-body">
                            @foreach ($datas as $item)
                                <p>
                                    <i>{{ $item->nama_barang }}</i>
                                    <button
                                        class="border rounded py-1 px-4 mr-3 mb-2
                                    btn btn-danger "
                                        wire:click="destroy({{ $item->id }} )">
                                        delete
                                    </button>


                                </p>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-9 mt-3">
                    <div class="card card-2">
                        <div class="card-header">
                            PRODUK
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('gambar/tablet.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">IPAD </h5>
                                            <p class="card-text">Bisa Main CarXstreet rata kanan</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 6.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('Tab', '6000000')">BELI</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('gambar/stickps.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">stick</h5>
                                            <p class="card-text">Bisa buat rental ps</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 500.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('stick', '500000')">BELI</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('gambar/stickps.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">stick</h5>
                                            <p class="card-text">Buat main PES</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 500.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('stick', '500000')">BELI</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
