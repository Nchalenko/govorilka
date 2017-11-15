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
                            <th>От</th>
                            <th>Дата Публикации</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($contacts as $contact)
                            <tr>
                                <td style="width: 25%">{{ $contact->message }}</td>
                                <td style="width: 25%">{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                                <td style="width: 25%">{{ $contact->created_at }}</td>
                                <td style="width: 25%"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                <td style="width: 25%">
                                    @if ($contact->status)
                                        <button class="btn btn-primary">Disable</button>
                                    @else
                                        <button class="btn btn-success">Activate</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
