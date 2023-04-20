@extends('layouts.admin')
@section('title')
Акции
@endsection
@section('header')
Акции
@endsection
@section('content')
    <div class="col-md-4">
        <div class="card card-info border border-dark">
            <div class="card-header">
                <h3 class="card-title">Создание акции</h3>
            </div>
            <!-- /.card-header -->
            <form class="text-dark" action="{{route('admin.promo.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название акции" value="">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea name="description" class="form-control" id="" cols="10" rows="5" placeholder="Описание акции"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <input type="text" class="form-control" name="category" placeholder="Категория акции" value="">
                            </div>
                            <div class="form-group">
                                <label>Картинка</label>
                                <input type="file" class="form-control" name="image" placeholder="Картинка" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <button type="submit" class="btn btn-primary w-100">Добавить</button>
                </div>
            </form>
        </div>
    </div>
        @foreach($promos as $promo)
            <div class="col-md-4">
                <div class="card {{ ($promo->active == 'new') ? 'card-warning' :
                        (($promo->active == 'delete') ? 'card-danger' :
                            (($promo->active == 'update') ? 'card-info'  :'card-success')) }} border border-dark">
                    <div class="card-header">
                        <h3 class="card-title">{{ $promo->title }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <form class="text-dark" action="{{route('admin.promo.update', $promo->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Активность</label>
                                    <select name="active" class="form-control">
                                        <option {{ ($promo->active=='1') ? 'selected':'' }} value="1">Да</option>
                                        <option {{ ($promo->active=='0') ? 'selected':'' }} value="0">Нет</option>
                                    </select>
                                    <div class="form-group">
                                        <label>Название</label>
                                        <input type="text" class="form-control" name="title" placeholder="Название акции" value="{{ $promo->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Описание</label>
                                        <textarea class="form-control" id="" name="description" placeholder="Описание акции" cols="10" rows="5">{{ $promo->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Категория</label>
                                        <input type="text" class="form-control" name="category" placeholder="Категория акции" value="{{ $promo->category }}">
                                    </div>
                                    @if($promo->image)
                                        <img src="/{{$promo->image}}" alt="" height="100px">
                                    @endif
                                    <div class="form-group">
                                        <label>Картинка</label>
                                        <input type="file" class="form-control" name="image" placeholder="Картинка" value="{{ $promo->image }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary w-100">Изменить</button>
                        </div>
                    </form>
                    <div class="card-footer text-right">
                        <form action="{{route('admin.promo.delete', $promo->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button  type="submit" class="btn btn-danger w-25" id="delete_btn">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
