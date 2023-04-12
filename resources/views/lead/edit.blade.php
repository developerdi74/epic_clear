@extends('layouts.main')

@section('title')
    Редактирование - {{$lead->name}}
@endsection
@section('content')
    <div class="update_page">
        <div class="lead_create">
            <div class='modal_window'>
                <form action="{{route('lead.update', $lead->id)}}" method="post">
                @csrf
                    @method('patch')
                <h3>Форма редактирования:</h3>
                <div class="left">Имя</div><div class="right"><input type="text" name="name" value="{{$lead->name}}"></div>
                <div class="left">Телефон</div><div class="right"><input type="text" name="phone" value="{{$lead->phone}}"></div>
                    <div class="left">Время</div><div class="right">
                        <input type="datetime-local" name="time" value="{{$lead->time}}" >
                        @error('time')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                <div class="left">Какие зоны:</div><div class="right"></div>
                    @foreach($areas as $area)
                        <div class="left"><input type="checkbox"
                        @foreach($lead->area as $activeArea)
                            {{$area->id === $activeArea->id ? 'checked':''}}
                        @endforeach
                                name='area_id[]' value="{{$area->id}}"> {{$area->name}} Цена - {{$area->price}}</div>
                    @endforeach
                    <div class="left">Cообщение:</div><div class="right"><textarea rows="4" name="message">{{$lead->message}}</textarea></div>
                    <div class="left">Обработка</div><div class="right"><textarea rows="4" name="message">{{$lead->process}}</textarea></div>
                <input type="submit" value="Изменить">
                </form>
            </div>
        </div>
    </div>
@endsection
