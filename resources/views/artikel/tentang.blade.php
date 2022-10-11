@extends('artikel/template/app')
@section('title', 'Tentang Kami')
@section('tentang', 'active')

@section('content')
   <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h3 class="card-title">Tentang Kami</h3>

            <p class="card-text">{!!$tentang->konten!!}</p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <a href="{{$tentang->facebook}}">
                    <div style="background-color: black" class="card-body border border-warning text-center m-3">
                       <img src="{{URL::asset('/upload/logo/tele.png')}}" style="width:50px;height:50px;" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
               <a href="{{$tentang->instagram}}">
                    <div style="background-color: black" class="card-body border border-warning text-center m-3">
                        <img src="{{URL::asset('/upload/logo/mail.png')}}"style="width:60px;height:50px;" alt="">
                    </div>
                </a>
            </div>
          {{--   <div class="col-md- 4">
                <a href="{{$tentang->twitter}}">
                    <div class="card-body bg-info text-center m-3">
                        <i class="fab fa-twitter fa-3x text-white"></i>
                    </div>
                </a>
            </div> --}}
        </div>
    </div>
@endsection