@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Сообщения</div>



                    @if($data->count() !== 0)
                        @foreach($data as $item)
                            <div class="  m-3  alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{$item->name}} {{$item->surname}}:</strong> {{$item->note}}

                                <a href="/message_del/{{$item->id}}" class="btn btn-primary active  position-absolute bottom-0 end-0  ">Delete</a>

                            </div>
                        @endforeach

                    @else
                        <p>Empty</p>
                    @endif




                </div>
            </div>
        </div>
    </div>
@endsection
