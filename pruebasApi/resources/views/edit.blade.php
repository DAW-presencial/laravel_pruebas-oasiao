@extends('layout')

@section('title','Edit product')

@section('content')
    <div class="form-body">
        <div class="row gap-2">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Edit #{{ $contact->id }}</h3>
                        <form id="editForm">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="name" placeholder="Name" class="form-control" id="contact" value="{{ old('name',$contact->name ?? '') }}"  contact="{{ $contact->id }}"/>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" name="phone" placeholder="Phone Number" class="form-control" value="{{ old('size',$contact->phone ?? '') }}"/>
                            </div>
                        </form>

                        <div class="form-button mt-3">
                            <button class="update btn btn-primary" name="{{ $contact->id }}">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
