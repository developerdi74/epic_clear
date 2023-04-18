@extends('layouts.admin')
@section('title')
    Заявки
@endsection
@section('header')
Заявки
@endsection
@section('content')
    <div class="row">
        @foreach($users as $user)
            @php
                $datePrev = isset($user->orders()->orderBy('id','desc')->first()->created_at) ? $user->orders()->orderBy('id','desc')->first()->created_at : 0;
                $dateNext = date('y-M-d', strtotime($datePrev)+60*60*24*14);
				$now = date('y-M-d',time());
					$call = 0;
				if(strtotime($dateNext)>strtotime($now)){
					$call = 1;
				}
            @endphp
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0 {{($call==1)?'bg-info mb-2':'bg-light'}}">
                            Клиент № - {{ $user->id }}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{ $user->name }}</b></h2>
                                    <p class="text-muted text-sm">
                                        <b>Последняя процедура: </b> {{ $datePrev }}<br>
                                        <b>Количество процедур: </b> {{ $user->orders()->count() }}<br>
                                        <b>Следующая процедура: </b> {{ $dateNext }}<br>
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="big"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Телефон: <b>
                                                <a href="tel:{{ $user->email }}">{{ $user->email }}</a></b>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="/public/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="{{route('admin.user.show', $user->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> Карточка
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>

@endsection
