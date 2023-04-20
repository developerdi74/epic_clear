@extends('layouts.admin')
@section('title')
    Создание заявки
@endsection
@section('header')
    Создание заявки
@endsection
@section('content')
            <div class="col-md-6">
                <div class="card card-info border border-dark">
                    <div class="card-header">
                        <h3 class="card-title">Новая заявка</h3>
                    </div>
                    <!-- /.card-header -->
                        <form class="text-dark" action="{{route('admin.lead.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Отметка</label>
                                        <select name="process" class="form-control">
                                            <option selected value="success">Принята</option>
                                            <option value="delete">Отказ</option>
                                            <option value="update">Думает</option>
                                            <option value="complite">Выполнено</option>
                                            <option value="new">Новая заявка</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Дата</label>
                                        <input type="datetime-local" class="form-control" name="time"  value="{{  old('time')  }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <input type="text" class="form-control" placeholder="Введите телефон" name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Выбранные зоны</label>
                                        @foreach($areas as $area)
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input"
                                                        type="checkbox" id="customCheckbox_{{ $area->id }}" name="area_id[]" value="{{$area->id}}">
                                                    <label for="customCheckbox_{{$area->id}}" class="custom-control-label">{{$area->name}}({{$area->price}} руб.)
                                                    </label>
                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Сообщение клиента</label>
                                        <textarea class="form-control" name='message' rows="3" placeholder="Enter ...">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer text-left">
                                    <button type="submit" class="btn btn-primary w-100">Создать</button>
                            </div>
                        </form>
                </div>
            </div>
@endsection
