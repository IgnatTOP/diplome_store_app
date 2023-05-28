@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Преподователи</h4>
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
                        <a href="#">Преподователи</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Преподователи</div>
                            <div class="card-category">Здесь можно добавить, отредактировать, удалить преподователя</div>
                            <br>
                            <a href="{{route('prepod.create')}}"><button class="btn btn-primary">Добавить преподователя</button></a>

                        </div>
                        <div class="card-body">
                                    <table class="table mt-3">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Название</th>
                                            <th scope="col">Описание</th>
                                            <th scope="col">Категория</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prepod as $prepod)
                                            <tr>
                                                <td>{{$prepod->id}}</td>
                                                <td><a href="{{route('prepod.show', $prepod->id)}}">{{$prepod->name}}</a></td>
                                                <td>{{$prepod->content}}</td>
                                                <td><a href="{{route('predmet.show', $prepod->predmet_id)}}">{{$prepod->predmet_id}}</a></td>
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
