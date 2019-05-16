@extends('layouts.app')

@section('content')
<div class="form-group">
    <label  class="col-sm-3 control-label">Название</label>
    <div class="col-sm-6">
        <input type="text" readonly class="form-control" value="{{$post->name}}">
    </div>
    <div class="col-sm-6">
        <label  class="col-sm-3 control-label">Текст</label>
        <textarea name="text" id="post-text" class="form-control">
                {{$post->text}}
        </textarea>
    </div>
    <form action="{{ route('posts.index') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('GET') }}

        <button type="submit" class="btn btn-succes">
            <i class="fa fa-btn ">Назад</i>
        </button>
    </form>
</div>
@endsection
