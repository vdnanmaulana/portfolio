@extends('back.template')

@php
$title = 'Home Section Management';
@endphp

@section('content')
<div class="card border border-dark">
    <div class="card-body">
        <h4 class="card-title p-0 m-0">{{ $title }}</h4>
    </div>
</div>

<div class="card border border-dark">
    <div class="card-body">
        <form action="{{url('dashboard')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-2">
                    <div class="flex flex-col">
                        <img class="w-100" style="border-radius: 500px; border: 5px solid rgba(0,0,0, 0.1)" src="{{ asset('images/nan.jpg') }}" alt="">
                        <p class="d-flex justify-content-center">Ubah Gambar</p>
                        <input name="image" type="file" class="form-control">
                    </div>
                </div>

                <div class="col-4">
                    <div class="flex flex-col">
                        <input type="text" name="nama" class="form-control" placeholder="Adnan Maulana">
                        <input type="text" name="title" class="form-control mt-3" placeholder="I'm a junior web developer">
                    </div>
                </div>

                <div class="col-4">
                    <div class="flex flex-col">
                        <input type="text" name="instagram" class="form-control" placeholder="Instagram Username">
                        <input type="text" name="dribbble" class="form-control mt-3" placeholder="Dribble Username">
                        <input type="text" name="upwork" class="form-control mt-3" placeholder="Upwork Username">
                        <input type="text" name="github" class="form-control mt-3" placeholder="Github Username">
                    </div>
                </div>

                <div class="d-flex justify-content-start">
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection