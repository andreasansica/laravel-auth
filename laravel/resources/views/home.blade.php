@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->photo)
                      <img class="propic" src="{{asset('storage/photos/'.Auth::user()->photo)}}" width="100px">
                    @else
                      <img class="propic" src="{{asset('storage/photos/Avatar.html')}}" alt="" width="100px>
                    @endif


                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-header">Aggiorna foto profilo</div>

                <div class="card-body">

                    @if ($errors->any())
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    @endif

                    <form action="{{route('photo-update')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('post')
                      <input type="file" name="foto" value="">
                      <input type="submit" name="" value="Aggiorna Foto" class="btn btn-success">
                    </form>

                    <a href="{{route('photo-delete')}}" class="btn btn-danger">Cancella Foto</a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
