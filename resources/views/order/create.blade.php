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
                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="largeInput">Название товара</label>
                                <input type="text" name="title" class="form-control form-control" id="defaultInput" placeholder="Название">
                            </div>
                                <div class="form-group">
                                    <label for="largeInput">Краткое описание</label>
                                    <input type="text" name="description" class="form-control form-control" id="defaultInput" placeholder="Краткое описание">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">Подробное описание</label>
                                    <input type="text" name="content" class="form-control form-control" id="defaultInput" placeholder="Подробное описание">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">Площадь здания</label>
                                    <input type="text" name="size" class="form-control form-control" id="defaultInput" placeholder="Площадь здания">
                                </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Изображение</label>
                                <input name="preview_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                                <div id="file_add_group"></div>
                                <div class="form-group">
                                    <div class="btn btn-primary" id="file_add_btn">Добавить изображение</div>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label for="largeInput">Цена</label>
                                    <input type="text" name="price" class="form-control form-control" id="defaultInput" placeholder="Цена">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput">Материал</label>
                                    <input type="text" name="material" class="form-control form-control" id="defaultInput" placeholder="Материал">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Категория</label>
                                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                        <option selected="selected" disabled>Категория</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <input class="btn btn-primary" type="submit" value="Создать категорию">
                            </form>
                            <template id="add_image_template">
                                <div class="form-group">
                                    <label for="exampleInputFile">Загрузка фотографии товара доп</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="images[]" type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>
                            </template>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
