@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Заявки</h4>
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
                        <a href="#">Заявки</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Заявки</div>
                            <div class="card-category">Здесь можно просматривать входящие заявки</div>
                            <br>
                            <a href="{{ url('admin/export') }}" class="btn btn-success">Скачать таблицу Excel</a>
                        </div>
                        <div class="card-body">
                                    <table class="table mt-3">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">ФИО</th>
                                            <th scope="col">Номер</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Вопрос</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders->reverse() as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->FIO}}</td>
                                                <td>{{$order->number}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>{{$order->coment}}</td>
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
