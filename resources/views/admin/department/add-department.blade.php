@extends('admin.master')

@section('title')
    Add Student
@endsection
@section('body')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                    <div id="alert">{{ Session::get('message') }}</div>

                                </div>
                                <div class="card-title">
                                    *<h3 class="d-inline-block text-info">Insert Department here</h3> <h3 class="ml-auto d-inline-block bg-primary text-light">⮯</h3>
                                    <hr>
                                </div>
                                <form action="{{ route('new-department') }}" method="post" novalidate="novalidate" >
                                    @csrf

                                    <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control">
                                    </div>





                                    <div>
                                        <button id="studentImage" type="submit" class="btn btn-lg btn-info btn-block">
                                            <span id="studentImage">Save</span>
                                            <span id="payment-button-sending" style="display:none;">Saving…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>












                </div>

            </div>
        </div>
    </div>

@endsection