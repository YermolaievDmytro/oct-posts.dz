@extends('layouts.app')

@section('content')
@if (count($posts) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
    </div>

    <div class="panel-body">
        <table class="table table-striped">
            <!-- Заголовок таблицы -->
            <thead>
                <tr>
                    <th>Новость</th>
                    <th>Удаление</th>
                </tr>
            </thead>

            <!-- Тело таблицы -->
            <tbody>
                @foreach ( $posts as $post )
                <tr>
                    <!-- Имя задачи -->
                    <td class="table-text">
                        <div><a href="{{route('posts.show',$post->id)}}">{{ $post->name }}</a></div>
                    </td>
                    <td>
                        @if( $post->user_id === $user_id )

                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-post-{{ $post->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Удалить
                            </button>
                        </form>

                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form action="{{ route('posts.create') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('GET') }}

        <button type="submit"  class="btn btn-success">
            <i class="fa fa-btn fa-create"></i>Добавить
        </button>
    </form>
</div>
@endif
@endsection
