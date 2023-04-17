@extends('layouts.admin')
@section('title')
   Доходы
@endsection
@section('header')
    Статистика доходов и расходов
@endsection
@section('content')
<div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                <tr>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Тип</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Сумма</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Метка</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Клиент</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Дата создания</th>
                   </tr>
                </thead>
                <tbody>
                @foreach($stats as $stat)
                <tr class="odd">
                    <form action="{{route('admin.seo.update', $stat->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <td>
                            <span>{{$stat->id}}</span>
                        </td>
                        <td>
                            <select name="type" class="form-control">
                                <option {{ ($stat->type=='lead') ? 'selected':'' }} value="lead">Заявка</option>
                                <option {{ ($stat->type=='expand') ? 'selected':'' }} value="expand" >Расход</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'summa' placeholder="Сумма" value="{{$stat->summa}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'label' placeholder="Метка" value="{{$stat->label}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'description' placeholder="Примечание" value="">
                        </td>
                        <td>
                            <input type="text" class="form-control" name = 'keywords' placeholder="Ключевые слова" value="{{$stat->created_at}}">
                        </td>
                        <td><button type="submit" class="btn btn-primary">OK</button></td>
                    </form>
                    <td>
                        <form action="{{route('admin.seo.delete', $stat->id)}}" method="post">
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
