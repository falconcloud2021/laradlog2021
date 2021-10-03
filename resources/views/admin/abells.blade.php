@extends('layouts.admin')

@section('title', 'abells')

@section('content')
<div class="page-content">
  <!-- Page Header-->
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Уведомления для авторов блога</h2>
    <div class="block-body text-left">
      <a class="btn btn-outline-secondary" href="/filter" role="button">Фильтр</a>
      <a class="btn btn-outline-secondary" href="/letters" role="button">Письма</a>
      <a class="btn btn-outline-secondary" href="/managers" role="button">Менеджеры</a>
      <a class="btn btn-outline-secondary" href="/actions" role="button">Активности</a>
    </div>
  </div>

  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <!-- Form Elements -->
        <div class="col-lg-12">
          <div class="block">
            <div class="title"><strong>Список всех уведомлений</strong></div>
            <div class="block-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" style="color: #978777;">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Rating</th>
                      <th>Check</th>
                      <th>Category</th>
                      <th>Text</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- foreach -->
                    <tr style="width:100px; height:70px;">

                      <th scope="row"> </th>

                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td> </td>

                      <td> </td>
                      <td> </td>
                      <td> </td>
                      <td>
                        <div style="color:#339933;">

                        </div>

                      </td>
                    </tr>
                    <!-- endforeach -->

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Form-->
    <div class="col-lg-4">
      <div class="block">
        <div class="title"><strong>Список опубликованых статей</strong></div>
        <div class="block-body text-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Перейти к списку </button>
          <!-- Modal-->
          <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Signin" class="btn btn-primary">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb-->
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="/amonitor">На главную</a></li>
      <li class="breadcrumb-item active">Создать задачу</li>
    </ul>
  </div>

  @stop

  @section('sidebar')
  @parent
  @endsection