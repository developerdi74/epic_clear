@extends('layouts.admin')
@section('title')
    Акции
@endsection
@section('header')
Заявки
@endsection
@section('content')
        @foreach($promos as $promo)
            <div class="col-md-6">
                <div class="card {{ ($promo->active == 'new') ? 'card-warning' :
                        (($promo->active == 'delete') ? 'card-danger' :
                            (($promo->active == 'update') ? 'card-info'  :'card-success')) }} border border-dark">
                    <div class="card-header">
                        <h3 class="card-title">{{ $promo->title }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <form class="text-dark" action="{{route('admin.promo.update', $promo->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Название</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter ..." value="{{ $promo->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Описание</label>
                                        <textarea name="" class="form-control" id="" cols="10" rows="5">{{ $promo->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Категория</label>
                                        <input type="text" class="form-control" name="category" placeholder="Enter ..." value="{{ $promo->category }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Картинка</label>
                                        <input type="file" class="form-control" name="image" placeholder="Enter ..." value="{{ $promo->image }}">
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
