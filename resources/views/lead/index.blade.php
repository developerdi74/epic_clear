@extends('layouts.main')

@section('title')
    Записи
@endsection

@section('content')
    <div><a href=" {{route('lead.create') }}">Создать</a></div>
    <div class="leads">
            @foreach($leads as $lead)
                <div class="card_lead">
                    <div>
                        <div class="first_td">Номер заявки</div>
                        <div>{{ $lead->id }}</div>
                    </div>
                    <div>
                        <div class="first_td">Имя</div>
                        <div><a href="{{ route('lead.edit',$lead->id) }}">{{ $lead->name }}</a></div>
                    </div>
                    <div>
                        <div class="first_td">Телефон</div>
                        <div><a href="{{ route('lead.edit',$lead->id) }}">{{ $lead->phone }}</a></div>
                    </div>
                    <div>
                        <div class="first_td">Дата и время</div>
                        <div><a href="{{ route('lead.edit',$lead->id) }}">{{ $lead->time }}</a></div>
                    </div>
                    <div>
                        <div class="first_td">Зоны</div>
                        <div>
                            @foreach($lead->area as $area)
                               {{ $area->name }},
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="first_td">Сообщение</div>
                        <div>
                            {{ $lead->message }}
                        </div>
                    </div>

                    <div>
                            <form class='process_form'action="{{route('lead.update', $lead->id)}}" method="post">
                                @csrf
                                @method('patch')
                                <textarea name="process" id="process" cols="30" rows="5">{{ $lead->process }}</textarea>
                                <input class='submit' type="submit" value="Изменить">
                            </form>
                    </div>
                        <a class='edit_link' href="{{route('lead.edit',$lead->id)}}">Редактировать</a>

                        <form class=''action="{{route('lead.delete',$lead->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input class='delete_link' type="submit" value="Удалить">
                        </form>
                </div>
            @endforeach
        <div class="pagination">
        </div>
    </div>
@endsection
