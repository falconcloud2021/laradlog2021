@extends('layouts.admin')

@section('title', 'arolls')

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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="block-body">
    <div class="line"> </div>
    <div class="row">
      <label class="col-sm-3 form-control-label">Material Inputs</label>
      <div class="col-sm-9">
        <div class="form-group-material">
          <input id="register-username" type="text" name="registerUsername" required class="input-material">
          <label for="register-username" class="label-material">Username</label>
        </div>
        <div class="form-group-material">
          <input id="register-email" type="email" name="registerEmail" required class="input-material">
          <label for="register-email" class="label-material">Email Address</label>
        </div>
        <div class="form-group-material">
          <input id="register-password" type="password" name="registerPassword" required class="input-material">
          <label for="register-password" class="label-material">Password</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 ml-auto">
        <button type="submit" class="btn btn-secondary">Отменить</button>
        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
      </div>
    </div>
  </div>

  @include('partials.users_list')

  @stop

  @section('sidebar')
  @parent
  @endsection