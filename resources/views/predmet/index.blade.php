@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Предметы</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Предметы</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Предметы</div>
                            <div class="card-category">Здесь можно добавить, отредактировать, удалить предмет</div>
                            <br>
                            <a href="{{route('predmet.create')}}"><button class="btn btn-primary">Добавить предмет</button></a>

                        </div>
                        <div class="card-body">
                                    <table class="table mt-3">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Название</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($predmets as $predmet)
                                            <tr>
                                                <td>{{$predmet->id}}</td>
                                                <td><a href="{{route('predmet.show', $predmet->id)}}">{{$predmet->title}}</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
