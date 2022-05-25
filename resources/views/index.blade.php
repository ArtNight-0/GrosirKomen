@extends('layouts.appMain')

@section('content')

<div class="card-body margin " style="background-color: #F7F7F7;margin-top: 56px;">
    <div style="margin: auto;width: 80px;object-fit: cover;" >
        <img width="80px" src="https://e7.pngegg.com/pngimages/753/432/png-clipart-user-profile-2018-in-sight-user-conference-expo-business-default-business-angle-service-thumbnail.png" alt="">
    </div>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Handphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-grid gap-2">
  <button  type="submit" class="btn btn-primary">Daftar</button>

  </div>
</form>
    </div>


@endsection