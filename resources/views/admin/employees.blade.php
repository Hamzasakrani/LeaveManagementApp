@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></button>{{ __('Employees liste') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $items)
                                    <tr>
                                        <td>{{ $items->name }}</td>
                                        <td>{{ $items->email }}</td>
                                        <td><a class="btn rounded-pill bg-primary text-white"
                                                href="/leavesbyuser/{{ $items->id }}">show</a>
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
