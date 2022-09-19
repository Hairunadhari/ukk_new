@extends('template.app')

@section('isi')

<body>

    <div class="container">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
        </button>
        <!-- MODAL INPUT KAMAR -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/simpan-kamar" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">No Kamar</label>
                                <input type="text" name="no_kamar" class="form-control">
                             
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tipe Kamar</label>
                                <input type="text" name="tipe_kamar" class="form-control">
                                  
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga kamar</label>
                                <input type="text" name="harga_kamar" class="form-control">
                                                          
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Kamar</label>
                                <input type="text" name="jumlah_kamar" class="form-control">
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL TUTUP INPUT KAMAR --}}

        <div class="row">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">No</th>
                        <th scope="col">No Kamar</th>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Harga Kamar</th>
                        <th scope="col">Jumlah Kamar</th>
                        <th scope="col">Pilihan</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($kamar as $k)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $k->no_kamar }}</td>
                        <td>{{ $k->tipe_kamar }}</td>
                        <td>{{ $k->harga_kamar }}</td>
                        <td>{{ $k->jumlah_kamar }}</td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop-{{ $k->id }}">
                                Edit
                            </button>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $k->id }}" data-nama="{{ $k->no_kamar }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

@foreach ($kamar as $data)
        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop-{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/edit-simpan/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">No Kamar</label>
                            <input type="text" name="no_kamar" class="form-control" value="{{ $data->no_kamar }}">
                          
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipe Kamar</label>
                            <input type="text" name="tipe_kamar" class="form-control" value="{{ $data->tipe_kamar }}">
                            
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Kamar</label>
                            <input type="text" name="harga_kamar" class="form-control" value="{{ $data->harga_kamar }}">
                            @error('harga_kamar')
                          <div class="text-warning">{{ $message }}</div>
                      @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Kamar</label>
                            <input type="text" name="jumlah_kamar" class="form-control" value="{{ $data->jumlah_kamar }}">
                            
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</body>

@endsection
