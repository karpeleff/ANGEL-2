@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Админпанель</div>

                    <div class="card-body row align-items-start "   >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                         @if($data->count() !== 0)
                             @foreach($data as $item)
                                    <div class="card " style="width: 10rem;">

                                        <img src="images/{{$item->name}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Somcard's content.</p>
                                            <a href="/image-del/{{$item->id}}" class="btn btn-primary">Удалить</a>
                                        </div>
                                    </div>
                                @endforeach

                            @else
                             <p>Empty</p>
                             @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
