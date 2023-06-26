@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Создать преподавателя</h4>
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
                        <a href="#">преподаватели</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('prepod.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="largeInput">ФИ преподавателя</label>
                                <input type="text" name="name" class="form-control form-control" id="defaultInput" placeholder="ФИО">
                            </div>
                                <div class="form-group">
                                    <label for="largeInput">Краткое описание</label>
                                    <input type="text" name="content" class="form-control form-control" id="defaultInput" placeholder="Краткое описание">
                                </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Изображение</label>
                                <input name="preview_image" type="file" class="form-control-file" id="exampleFormControlFile1">
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
