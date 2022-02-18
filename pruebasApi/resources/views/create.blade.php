@extends('layout')

@section('title','Create contact')

@section('content')
    <div class="form-body">
        <div class="row gap-2">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create</h3>
                        <form id="createForm">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="name" placeholder="Name" class="form-control" id="contact" value="{{ old('name') }}"/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="phone" placeholder="Phone Number" class="form-control" value="{{ old('phone') }}"/>
                            </div>
                        </form>

                        <div class="form-button mt-3">
                            <button class="create btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
