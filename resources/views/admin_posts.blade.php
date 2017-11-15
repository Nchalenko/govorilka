@extends('layouts.admin')

@section('content')

    <div class="container" style="margin-top: 20%">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <th>Название</th>
                            <th>Дата Публикации</th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td style="width: 50%">{{ $post->title }}</td>
                                <td style="width: 25%">{{ $post->created_at }}</td>
                                <td style="width: 25%">
                                    @if ($post->is_active)
                                        <button class="btn btn-primary">Disable</button>
                                    @else
                                        <button class="btn btn-success">Activate</button>
                                    @endif
                                    <a href="/posts/{{ $post->id }}/edit">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
