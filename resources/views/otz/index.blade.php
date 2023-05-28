@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Отзыв</h4>
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
                        <a href="#">Отзыв</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Отзыв</div>
                            <br>
                            <a href="{{route('otz.create')}}"><button class="btn btn-primary">Добавить Отзыв</button></a>

                        </div>
                        <div class="card-body">
                                    <table class="table mt-3">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Имя</th>
                                            <th scope="col">Отзыв</th>
                                            <th scope="col">Пройденный курс</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($otz as $ot)
                                            <tr>
                                                <td><a href="{{route('otz.show', $ot->id)}}">{{$ot->id}}</a></td>
                                                <td>{{$ot->name}}</td>
                                                <td>{{$ot->content}}</td>
                                                <td>{{$ot->title}}</td>
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
