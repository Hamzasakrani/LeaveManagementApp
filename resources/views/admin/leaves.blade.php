@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Leave liste') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Employee name</th>
                                    <th scope="col">Start date</th>
                                    <th scope="col">End date</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($leaves as $items)
                                    <tr>
                                        <td>{{ $items->name }}</td>
                                        <td>{{ $items->start_date }}</td>
                                        <td>{{ $items->end_date }}</td>
                                        <td>{{ $items->comment }}</td>
                                        <td>
                                            @if ($items->status == 1)
                                                <a class="btn btn-success"
                                                    href="/acceptleave/{{ $items->id }}">Accept</a>
                                                <a class="btn btn-danger" href="/refuseleave/{{ $items->id }}">refuse</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
