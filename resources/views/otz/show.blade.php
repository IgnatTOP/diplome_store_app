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
                            <div class="card-title">Название: {{$otz->title}}</div>
                            <div class="card-category">
                                    ID
                                    {{$otz->id}}
                                </div>
                        </div>
                        <div class="card-body">

                            <a href="{{route('otz.edit', $otz->id)}}" class="btn btn-primary">Редактировать</a>
                            <br>
                            <br>
                            <form action="{{route('otz.delete', $otz->id)}}" method="post">
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
