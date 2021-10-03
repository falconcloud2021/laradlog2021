@extends('layouts.admin')

@section('title', 'aeditlist')

@section('content')
<div class="page-content">
  <!-- Page Header-->
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Список опубликованных статей блога</h2>
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
      <li class="breadcrumb-item active">Редакция</li>
    </ul>
  </div> -->

  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12">
          <div class="block">
            <div class="block-body text-right">
              <a class="btn btn-secondary" href="/amonitor/addarticle" role="button">Shange</a>
              <a class="btn btn-success" href="/amo/aeditor" role="button">+ Editor!</a>
            </div>
            <div class="block-body">
              <div class="col-lg-12">
                <div class="block">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" style="color: #978777;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Rating</th>
                          <th>Text_intro</th>
                          <th>Image_intro</th>
                          <th>Category</th>
                          <th>Hits</th>
                          <th>Meta_desc</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr style="width:100px; height:70px;">

                          <th scope="row">{{ $post->id}}</th>

                          <td>{{ $post->title }}</td>
                          <td>{{ $post->rating }}</td>
                          <td>{{ $post->text_intro }}</td>
                          <td><img src="/images/{{ $post->image_intro ?? 'noimage.jpg'}}" width="100" height="70" alt="/images/imagenon.jpg">
                          </td>

                          <td>{{ $post->category_id }}</td>
                          <td>{{ $post->hits }}</td>
                          <td>{{ $post->meta_desc }}</td>
                          <td>
                            <div style="color:#339933;">
                              Show <span style="float:right;">
                                <a href="/amonitor/article/show/{{ $post->id}}"><i class="fa fa-arrow-right"></i></a></span>
                              Edit <span style="float:right;">
                                <a href="/amonitor/article/edit/{{ $post->id}}"><i class="fa fa-edit"></i></a></span>
                              Delete <span style="float:right;">
                                <a data-del="{{ $post->id }}" href="/amonitor/article/delete/{{ $post->id}}"><i class="fa fa-remove"></i></a></span>
                            </div>

                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <form class="form-horizontal">
             
                
               
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                  <div class="col-sm-9">
                    <div class="i-checks">
                      <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                      <label for="checkboxCustom1">Option one</label>
                    </div>
                    <div class="i-checks">
                      <input id="checkboxCustom2" type="checkbox" value="" checked="" class="checkbox-template">
                      <label for="checkboxCustom2">Option two checked</label>
                    </div>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Control sizing</label>
                  <div class="col-sm-9">
                    <div class="form-group">
                      <input type="text" placeholder=".input-sm" class="form-control form-control-sm">
                    </div>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Column sizing</label>
                  <div class="col-sm-9">
                    <div class="row">
                      <div class="col-md-3">
                        <input type="text" placeholder=".col-md-3" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <input type="text" placeholder=".col-md-4" class="form-control">
                      </div>
                      <div class="col-md-5">
                        <input type="text" placeholder=".col-md-5" class="form-control">
                      </div>
                    </div>
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
                <div class="form-group row">
                  <div class="col-sm-9 ml-auto">
                    <button type="submit" class="btn btn-secondary">Отменить</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal Form-->
  <div class="col-lg-4">
    <div class="block">
      <div class="title"><strong>Авторизируйтесь в разделе!</strong></div>
      <div class="block-body text-center">
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Авторизироваться </button>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Форма авторизации редактора Блога</strong>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <form>
                  <div class="form-group">
                    <label>Логин</label>
                    <input type="email" placeholder="Введите E-mail или login" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" placeholder="Введите пароль редактора блога" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Войти!" class="btn btn-primary">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Закрыть</button>
                <button type="button" class="btn btn-primary">Изменить пароль</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop

  @section('sidebar')
  @parent
  @endsection