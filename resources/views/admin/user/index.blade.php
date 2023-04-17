@extends('layouts.admin')
@section('title')
    Заявки
@endsection
@section('header')
Заявки
@endsection
@section('content')
<div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Имя</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Телефон</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Процедур</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Дата последней процедуры</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Дата регистрации клиента</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="odd">
                <form action="{{route('admin.user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <td>
                        <span>{{$user->id}}</span>
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'title' placeholder="Имя" value="{{$user->name}}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'title' placeholder="Тайтл" value="{{$user->email}}">
                    </td>
                    <td>
                        <span>{{ $user->orders()->count() }}</span>
                    </td>
                    <td>
                        <span>{{ isset($user->orders()->first()->created_at) ? $user->orders()->first()->created_at : 0}}</span>
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'keywords' placeholder="Ключевые слова" value="{{$user->created_at}}">
                    </td>
                    <td><button type="submit" class="btn btn-primary">OK</button></td>
                </form>
                <td>
                    <form action="{{route('admin.seo.delete', $user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button  type="submit" class="btn btn-danger">Del</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr class="odd">
            <form action="{{route('admin.seo.store')}}" method="post">
                @csrf
                <td>
                    New
                </td>
                <td>
                    <input type="text" class="form-control" name = 'title' placeholder="Тайтл" value="{{old('title')}}">
                </td>
                <td>
                    <input type="text" class="form-control" name = 'description' placeholder="Описание страницы" value="{{old('description')}}">
                </td>
                <td>
                    <input type="text" class="form-control" name = 'keywords' placeholder="Ключевые слова" value="{{old('keywords')}}">
                </td>
                <td>
                    <input type="text" class="form-control" name = 'header' placeholder="Заголовок" value="{{old('header')}}">
                </td>
                <td><button type="submit" class="btn btn-primary">OK</button></td>
            </form>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Тайтл</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Описание</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ключевые слова</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Заголовок</th>
        </tr>
        </tfoot>
    </table>
</div>

@endsection
