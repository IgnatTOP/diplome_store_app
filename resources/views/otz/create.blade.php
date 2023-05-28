@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Создать Отзыв</h4>
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
                        <div class="card-body">
                            <form action="{{route('otz.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="largeInput">Имя Фамилия</label>
                                <input type="text" name="name" class="form-control form-control" id="defaultInput" placeholder="Название">
                            </div>
                                <div class="form-group">
                                    <label for="largeInput">Пройденный курс</label>
                                    <input type="text" name="title" class="form-control form-control" id="defaultInput" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">Отзыв</label>
                                    <input type="text" name="content" class="form-control form-control" id="defaultInput" placeholder="Название">
                                </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Изображение</label>
                                <input name="preview_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Создать Отзыв">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
