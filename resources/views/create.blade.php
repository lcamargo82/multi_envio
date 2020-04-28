@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id="form_address">
                            @csrf
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="address">
                                <input type="checkbox" id="multiArray">
                            </div>

                            <button class="btn btn-success" id="multiEnvio">Submit</button>
                        </form>

                        <table>
                            <thead>
                                <tr>
                                    <th>Endereco</th>
                                </tr>
                            </thead>

                            <tbody id="multiTable">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
