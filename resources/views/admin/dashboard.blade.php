@extends('template.app')
@section('isi')
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem; height: 10rem; background-color: rgb(88, 160, 255)">
            <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
              <h5 class="card-title  align-item-center">total kamar</h5>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem; height: 10rem; background-color: rgb(88, 160, 255)">
            <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
              <h5 class="card-title  align-item-center">total Fasilitas</h5>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem; height: 10rem; background-color: rgb(88, 160, 255)">
            <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
              <h5 class="card-title  align-item-center">total user</h5>
            </div>
        </div>
    </div>
</div>
@endsection