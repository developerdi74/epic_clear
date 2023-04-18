@extends('layouts.admin')
@section('title')
    Карточка клиента - {{$user->name}}
@endsection
@section('header')
    Карточка клиента - {{$user->name}}
@endsection
@section('content')
    @php
        $datePrev = isset($user->orders()->orderBy('id','desc')->first()->created_at) ? $user->orders()->orderBy('id','desc')->first()->created_at : 0;
        $dateNext = date('y-M-d', strtotime($datePrev)+60*60*24*14);
        $now = date('y-M-d',time());
            $call = 0;
        if(strtotime($dateNext)>strtotime($now)){
            $call = 1;
        }
    @endphp

                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="/public/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $user->name }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Телефон</b> <a href="tel:{{ $user->email }}" class="float-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Последнее посещение</b> <a class="float-right">{{$datePrev}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Следующее посещение</b> <a class="float-right">{{$dateNext}}</a>
                                </li>
                            </ul>
                            @if($call==1)
                            <a href="tel:{{ $user->email }}" class="btn btn-success btn-block"><b>Пора звонить</b></a>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">История процедур</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Настройки</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <!-- Post -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Дата</th>
                                                <th>Метка</th>
                                                <th>Сумма</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->label}}</td>
                                                <td><span class="tag tag-success">{{$order->summa}}</span></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>




                                    <div class="post">
                                        <div class="user-block">

                                        </div>
                                    <!-- /.post -->
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Примечания</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Настройки лазера</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
@endsection
