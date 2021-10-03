@extends('layouts.admin')

@section('title', 'asheets')

@section('content')
<div class="page-content">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Отчет по активностям пользователей и авторов блога</h2>
    <div class="block-body text-left">
      <a class="btn btn-outline-secondary" href="/addarticle" role="button">Фильтр</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Письма</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Менеджеры</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Активности</a>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="/amonitor">На главную!</a></li>
      <li class="breadcrumb-item active">Таблицы</li>
    </ul>
  </div> -->
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="block">
            <div class="title"><strong>Список менеджеров</strong></div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Роль</th>
                    <th>Действия</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    @foreach($users as $user)
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->status }}</td>
                    <td></td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="block">
            <div class="title"><strong>Список пользователей</strong></div>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Ник</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Действия</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @stop

  @section('sidebar')
  @parent
  @endsection