@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Предмет</h4>
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
                            <div class="card-title">Название: {{$predmet->title}}</div>
                            <div class="card-category">
                                    ID
                                    {{$predmet->id}}
                                </div>
                        </div>
                        <div class="card-body">

                            <a href="{{route('predmet.edit', $predmet->id)}}" class="btn btn-primary">Редактировать</a>
                            <br>
                            <br>
                            <form action="{{route('predmet.delete', $predmet->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
