@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Редактировать преподователя</h4>
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
                        <a href="#">преподователи</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('prepod.update', $prepod->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="largeInput">ФИ преподователя</label>
                                    <input type="text" name="name" value="{{$prepod->name}}" class="form-control form-control" id="defaultInput" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">Краткое описание</label>
                                    <input type="text" name="content" value="{{$prepod->content}}" class="form-control form-control" id="defaultInput" placeholder="Краткое описание">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Категория</label>
                                    <select class="form-control" name="predmet_id" id="exampleFormControlSelect1">
                                        <option selected="selected" disabled>Категория</option>
                                        @foreach ($predmets as $predmet)
                                            <option value="{{$predmet->id}}">{{$predmet->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Создать преподавателя">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
