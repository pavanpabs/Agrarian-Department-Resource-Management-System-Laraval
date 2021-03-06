@extends('layouts.admin')
@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item " aria-current="page">Request Fertilizers</Em></li>
                </ol>
            </nav>
        </div>
    </div>
    <br />
    <div class="col mt-8">
        <h6 class="mb-0 text-uppercase">Send Fertilizer Request</h6>
        <hr />
        <div class="card border-top border-0 border-4 border-success">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-send me-1 font-22 text-success"></i>
                    </div>
                    <h5 class="mb-0 text-success">Send Fertilizer Request</h5>
                </div>
                <hr>
                <form class="row g-3" method="POST" action="/fertilizerFarmer">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Name of the Farmer</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"" id=" name" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label @error('division') is-invalid @enderror"">Division</label>
                        <select class=" form-control" id="division" name="division">
                            <option> Division 1</option>
                            <option> Division 2</option>
                            <option> Division 3</option>
                            </select>

                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Cultivation Season</label>
                        <select class=" form-control" id="division" name="season">
                            <option> Yala Season</option>
                            <option> Maha Season</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Cultivation Type</label>
                        <select class=" form-control" id="division" name="type">
                            <option> Padding Cultivation</option>
                            <option> Additional Cultivation</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">Acres</label>
                        <input type="text" class="form-control @error('acres') is-invalid @enderror"" id=" acres" name="acres">
                        @error('acres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success px-5">Submit</button>
                    </div>
                </form>

                @if ($message = Session::get('success'))


                <div class="alert alert-success alert-dismissible  m-3">
                    <button type="button" class="btn close" data-dismiss="alert">x</button>
                    {{ $message }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="modal fade" id="suppliereditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto " id="exampleModalLabel" style="font-weight:400">
                        Update Event Details</h5>
                    <button type="button" class="close position-absolute right-0" data-dismiss="modal" aria-label="Close" style="right: 20px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- <form id="editFormID"> --}}
                    <form id="editFormID" method="POST" action="/events" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <input type="hidden" name="id" id="fid" value="">


                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
                            <div class="col-md-7">
                                <input type="date" id="dateUpdate" class="form-control" name="date" value="{{ old('date') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('Time') }}</label>
                            <div class="col-md-7">
                                <input type="time" id="timeUpdate" class="form-control" name="time" value="{{ old('time') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            <div class="col-md-7">
                                <select class="form-control" id="divisionUpdate" value="{{ old('division') }}" name="division">
                                    <option> Division 1</option>
                                    <option> Division 2</option>
                                    <option> Division 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="titleUpdate" class="form-control" name="title" value="{{ old('title') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idNo" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-7">
                                <input type="text" id="descriptionUpdate" class="form-control" name="description" value="{{ old('description') }}" autofocus>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="btn-group">
                                {{-- <button type="submit" class="btn btn-primary submit" style="font-weight: 650">UPDATE</button>  --}}
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@stop