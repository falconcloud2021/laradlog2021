@extends('layouts.admin')

@section('title', 'addarticle') 

@section('content')
    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Раздел управления контентом блога</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/amonitor">Главная</a></li>
            <li class="breadcrumb-item active">Стандартные формы</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Поля элементов "быстрого" добавления статьи!</strong>
                    <div class="block-body text-right">
                      <a class="btn btn-secondary" href="/amonitor/aeditlist" role="button">Список статей!</a>
                      <a class="btn btn-warning" href="/amonitor/aeditor" role="button">Редактор статей!</a>
                    </div>
                  </div>
                  
                  <div class="block-body">
                    <form class="form-horizontal" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Название статьи (title)</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="title" id="title">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Вводный текст статьи (text_intro)</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="text_intro" id="text_intro"><small class="help-block-none">В это поле вводится только первое предложение текста статьи.</small>
                        </div>
                        <label class="col-sm-3 form-control-label">Полный текст статьи (text_full)</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="text_full" id="text_full"><small class="help-block-none">В это поле вводится полный текст статьи.</small>
                        </div>
                        <div class="line"></div>
                        <label class="col-sm-3 form-control-label">Выбор категории статьи</label>
                        <div class="col-sm-9">
                          <select name="account" class="form-control mb-3 mb-3">
                            <option>Бизнес</option>
                            <option>Спорт</option>
                            <option>Новости</option>
                            <option>option 4</option>
                          </select>
                        </div>
                        <label class="col-sm-3 form-control-label">Выбор подкатегории</label>
                        <div class="col-sm-9">
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                          </label>
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                          </label>
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                          </label>
                        </div>
                        
                        <label class="col-sm-3 form-control-label">Добавление основного фото поста</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control-file" id="mainPhoto">
                        </div>

                      </div>
                                                                    
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button class="btn btn-secondary">Отменить</button>
                          <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                      </div>                                                                                               
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

@stop

@section('sidebar')
    @parent
@endsection
