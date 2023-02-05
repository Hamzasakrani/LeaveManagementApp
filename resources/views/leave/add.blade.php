@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/createleave" method="POST">
                        @csrf

                        <div class="card-header">{{ __('Add your leave condetions') }}</div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" name="start_date">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" name="end_date">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
