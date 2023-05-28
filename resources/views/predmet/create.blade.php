@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Создать предмет</h4>
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
                        <a href="#">Предмет</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('predmet.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="largeInput">Название предмета</label>
                                <input type="text" name="title" class="form-control form-control" id="defaultInput" placeholder="Название">
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Создать предмет">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
