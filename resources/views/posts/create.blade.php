@extends('layouts.app')

@section('content')

<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
    <form action="{{ route('posts.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <!-- Имя задачи -->
        <div >        
            <div style="width: 50%;" class="sm-6">
                <label  class="col-sm-3 control-label">Название</label>
                <input type="text" name="name" id="post-name" class="form-control">
            </div>
            <div class="sm-6">
                <label  class="col-sm-3 control-label">Текст</label>
                <textarea name="text" id="post-text" class="form-control"></textarea>
            </div>
        </div>
        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Добавить задачу
                </button>
            </div>
        </div>
    </form>
</div>
<!-- TODO: Текущие задачи -->
@endsection
