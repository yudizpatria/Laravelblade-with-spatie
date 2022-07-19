@extends('layouts.app')

@section('title-page','Add client')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Add New Client</h4>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card-body">
                <form action="{{ route('data_client.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Client Name</label>
                            <input type="text" name="name" class="form-control" id="nameClient" placeholder="Client"
                                value="{{old('name')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Client Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="client@example.com" value="{{ old('email')}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="Password" name="password" class="form-control" id="password"
                                value="{{old('password')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="form-control" id="company_name"
                                 value="{{old('company_name')}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image">Prolfe Picture</label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option selected>Male</option>
                                <option>Famale</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="status">Status</label>
                            <select name="status" id="gender" class="form-control">
                                <option selected>active</option>
                                <option>deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
