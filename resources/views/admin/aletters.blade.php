@extends('layouts.admin')

@section('title', 'aletters')

@section('content')
<div class="page-content">
  <!-- Page Header-->
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Почтовая служба блога</h2>
    <div class="block-body text-left">
      <a class="btn btn-outline-secondary" href="/addarticle" role="button">Все</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Отправка</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Прочитано</a>
      <a class="btn btn-outline-secondary" href="/aeditor" role="button">Корзина</a>
    </div>
  </div>
  <!-- Breadcrumb-->
  <!-- <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="/amonitor">На главную</a></li>
      <li class="breadcrumb-item active">Письма</li>
    </ul>
  </div> -->
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <!-- Form Elements -->
        <div class="col-lg-12">
          <div class="block">
            <div class="block-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Placeholder</label>
                  <div class="col-sm-9">
                    <input type="text" placeholder="placeholder" class="form-control">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">With dropdowns</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button>
                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="line"></div>
              </form>
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