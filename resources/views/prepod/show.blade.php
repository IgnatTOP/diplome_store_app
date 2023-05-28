@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Преподователь</h4>
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
                        <a href="#">Преподователь</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Название: {{$prepod->name}}</div>
                            <div class="card-category">
                                    ID
                                    {{$prepod->id}}
                                </div>
                        </div>
                        <div class="card-body">

                            <a href="{{route('prepod.edit', $prepod->id)}}" class="btn btn-primary">Редактировать</a>
                            <br>
                            <br>
                            <form action="{{route('prepod.delete', $prepod->id)}}" method="post">
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
