@extends('layouts.main')

@section('title')
    Записи
@endsection

@section('content')
    <div class="leads">
        <div class="tr_lead">
            <div>Имя</div><div>Телефон</div><div>Зоны</div><div>Цена</div>
        </div>
        <div><a href="{{route('lead.edit',$lead->id)}}">Редактировать</a></div>
        <div>
            <form class='del_form' action="{{route('lead.delete',$lead->id)}}" method="post">
                @csrf
                @method('delete')
            <input class='delete_link' type="submit" value="Удалить">
            </form>
            </form>
        </div>
                <div class="tr_lead">
                    <div>{{ $lead->name }}</div><div>{{ $lead->phone }}</div><div>{{ $lead->zone }}</div><div>{{ $lead->price }}</div>
                </div>
        <div><a href="{{route('lead.index')}}">Назад</a></div>
    </div>
@endsection
