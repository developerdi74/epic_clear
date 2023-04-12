@extends('layouts.admin')
@section('title')
    Заявки
@endsection
@section('header')
Заявки
@endsection
@section('content')
        @foreach($leads as $lead)
            <div class="col-md-6">
                <div class="card {{ ($lead->process == 'new') ? 'card-warning' :
                        (($lead->process == 'delete') ? 'card-danger' :
                            (($lead->process == 'update') ? 'card-info'  :'card-success')) }} border border-dark">

                    <div class="card-header">
                        <h3 class="card-title">Заявка № - {{ $lead->id }}</h3>
                    </div>
                    <!-- /.card-header -->
                        <form class="text-dark" action="{{route('admin.lead.update', $lead->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Отметка</label>
                                        <select name="process" class="form-control">
                                            <option {{ ($lead->process=='success') ? 'selected':'' }} value="success">Принята</option>
                                            <option {{ ($lead->process=='delete') ? 'selected':'' }} value="delete">Отказ</option>
                                            <option {{ ($lead->process=='update') ? 'selected':'' }} value="update">Думает</option>
                                            <option {{ ($lead->process=='new') ? 'selected':'' }} value="new">Новая заявка</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Имя</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter ..." value="{{ $lead->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Дата</label>
                                        <input type="datetime-local" class="form-control" name="time"  placeholder="Enter ..." value="{{ $lead->time }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." name="phone" value="{{ $lead->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Выбранные зоны</label>
                                        @foreach($areas as $area)

                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input"
                                                        @foreach( $lead->area as $areaActiv)
                                                        {{($area->id == $areaActiv->id) ? 'checked':''}}
                                                        @endforeach
                                                        type="checkbox" id="customCheckbox_{{ $area->id }}_{{ $lead->id }}" name="area_id[]" value="{{$area->id}}">
                                                    <label for="customCheckbox_{{$area->id}}_{{ $lead->id }}" class="custom-control-label">{{ $area->name }}</label>
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
                                        <textarea class="form-control" name='message' rows="3" placeholder="Enter ...">{{ $lead->message }}</textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                </div>
            </div>
        @endforeach
@endsection
