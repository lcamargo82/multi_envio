@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        List Address
                        <a type="button" class="btn btn-sm btn-primary" style="float: right" href="{{ route('form.create') }}">Add</a>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <th scope="row">{{ $form->id }}</th>
                                <td>{{ $form->address }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
