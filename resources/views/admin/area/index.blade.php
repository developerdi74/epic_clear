@extends('layouts.admin')
@section('title')
    Список зон
@endsection
@section('header')
    Зоны работы и стоимость
@endsection
@section('content')
<div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" aria-sort="ascending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Название</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Цена</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Скидка</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Изменить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($areas as $area)
                <tr class="odd">
                    <form action="{{route('admin.area.update', $area->id)}}" method="post">
                        @csrf
                        @method('patch')
                    <td class="dtr-control sorting_1" tabindex="0">{{$area->id}}</td>
                    <td>
                            <input type="text" class="form-control" name = 'name' placeholder="Enter ..." value="{{$area->name}}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'price' placeholder="Enter ..." value="{{$area->price}}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'discont' placeholder="Скидка в процентах" value="{{$area->discont}}">
                    </td>
                        <td><button type="submit" class="btn btn-primary">OK</button></td>
                    </form>
                    <td><form action="{{route('admin.area.delete', $area->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button  type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr class="odd">
                    <form action="{{route('admin.area.store')}}" method="post">
                        @csrf
                        <td class="dtr-control sorting_1" tabindex="0">{{$area->id + 1}}</td>
                        <td>
                            <input type="text" class="form-control" name = 'name' placeholder="Enter ..." value="{{ old('name') }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'price' placeholder="Enter ..." value="{{old('price')}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'discont' placeholder="Скидка в процентах" value="{{old('discont')}}">
                        </td>
                        <td><button type="submit" class="btn btn-primary">Add</button></td>
                    </form>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" aria-sort="ascending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Название</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Цена</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Скидка</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Изменить</th>
                </tr>
                </tfoot>
            </table>
</div>
@endsection
