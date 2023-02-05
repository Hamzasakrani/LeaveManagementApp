@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a class="btn rounded-pill bg-dark text-white"
                            href="{{ URL::previous() }}">back</a>{{ __('Leave liste') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Start date</th>
                                    <th scope="col">End date</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaves as $items)
                                    <tr>
                                        <td>{{ $items->start_date }}</td>
                                        <td>{{ $items->end_date }}</td>
                                        <td>{{ $items->comment }}</td>
                                        <td>
                                            @if ($items->status == 1)
                                                <span class="badge rounded-pill bg-secondary">wating</span>
                                            @elseif ($items->status == 2)
                                                <span class="badge rounded-pill bg-success">accepted</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">refused</span>
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
