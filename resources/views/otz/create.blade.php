@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Создать категорию</h4>
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
                        <a href="#">Категории</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="largeInput">Название категории</label>
                                <input type="text" name="title" class="form-control form-control" id="defaultInput" placeholder="Название">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Изображение</label>
                                <input name="preview_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Создать категорию">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
