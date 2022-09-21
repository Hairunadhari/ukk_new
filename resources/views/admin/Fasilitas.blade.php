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
                        <form action="/simpan-fasilitas" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Fasilitas</label>
                                <input type="text" name="nama_fasilitas" class="form-control">
                             
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control">
                                  
                            </div>
                            <div class="mb-3">
                                <label class="form-label">foto</label>
                                <input type="file" name="foto" class="form-control">
                                  
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
                        <th scope="col">Nama fasiliats</th>
                        <th scope="col">letrnangn</th>
                        <th scope="col">foto</th>
                        <th scope="col">Pilihan</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($fasilitas as $k)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $k->nama_fasilitas }}</td>
                        <td>{{ $k->keterangan }}</td>
                        <td>
                            <img src="{{ asset('fotofasilitas/' .$k->foto)}}" alt="" style="width:80px; height: 100px ;">
                                        
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop-{{ $k->id }}">
                                Edit
                            </button>
                            <a href="#" class="btn btn-danger delete2" data-id="{{ $k->id }}" data-nama="{{ $k->nama_fasilitas }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

@foreach ($fasilitas as $data)
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
                    <form action="/edit-fasilitas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama fasilitas</label>
                            <input type="text" name="nama_fasilitas" class="form-control" value="{{ $data->nama_fasilitas }}">
                          
                        </div>

                        <div class="mb-3">
                            <label class="form-label">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
                            
                        </div>

                        <div class="mb-3">
                            <label class="form-label">foto</label>
                            <input type="file" name="foto" class="form-control" value="{{ $data->foto }}">
                          
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
