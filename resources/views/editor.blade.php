@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Админпанель</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="card" style="width: 18rem;">

                                <img src="images/1679144235.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Удалить</a>
                                </div>
                            </div>

                            <div class="card" style="width: 10rem;">

                                <img src="images/1679144235.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somcard's content.</p>
                                    <a href="#" class="btn btn-primary">Удалить</a>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
