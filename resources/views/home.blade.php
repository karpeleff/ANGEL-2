@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Загрузка фото</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container mt-5">
                            @if(Session::get('success', false))
                                <?php $data = Session::get('success'); ?>
                                @if (is_array($data))
                                    @foreach ($data as $msg)
                                        <div class="alert alert-success" role="alert">
                                            <i class="fa fa-check"></i>
                                            {{ $msg }}
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-success" role="alert">
                                        <i class="fa fa-check"></i>
                                        {{ $data }}
                                    </div>
                                @endif

                                <img src="images/{{ Session::get('image') }}" width="200px">
                            @endif
                            <br><br>
                            <form action="{{ route('image-upload.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="file" name="image" class="form-control">
                                        @if ($errors->has('image'))
                                            <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success">Загрузить</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
