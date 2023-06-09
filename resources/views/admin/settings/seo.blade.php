@extends('layouts.admin')
@section('title')
   SEO оптимизация
@endsection
@section('header')
    Зоны работы и стоимость
@endsection
@section('content')
<div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                <tr>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Страница</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Тайтл</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Описание</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ключевые слова</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Заголовок</th>
                </tr>
                </thead>
                <tbody>
                @foreach($seos as $seo)
                <tr class="odd">
                    <form action="{{route('admin.seo.update', $seo->id)}}" method="post">
                        @csrf
                        @method('patch')
                    <td>
                            <input type="text" class="form-control" name = 'route' placeholder="URL страницы" value="{{$seo->route}}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name = 'title' placeholder="Тайтл" value="{{$seo->title}}">
                    </td>
                        <td>
                            <input type="text" class="form-control" name = 'description' placeholder="Описание страницы" value="{{$seo->description}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'keywords' placeholder="Ключевые слова" value="{{$seo->keywords}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'header' placeholder="Заголовок" value="{{$seo->header}}">
                        </td>
                        <td><button type="submit" class="btn btn-primary">OK</button></td>
                    </form>
                    <td>
                        <form action="{{route('admin.seo.delete', $seo->id)}}" method="post">
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
                            <input type="text" class="form-control" name = 'route' placeholder="URL страницы" value="{{ old('route') }}">
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
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Страница</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Тайтл</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Описание</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ключевые слова</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Заголовок</th>
                </tr>
                </tfoot>
            </table>
</div>
@endsection
