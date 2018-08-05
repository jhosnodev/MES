@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')

 <div class="card col-md-12">
                                    <div class="card-header">
                                        <strong>Horizontal</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('proveedor.store') }}" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="identificacion" class=" form-control-label">Indentificación </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="texts" id="identificacion" name=identificacion" placeholder="RUC/NIC" class="form-control">
                                                    <span class="help-block">Please enter your email</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="razon_social" class=" form-control-label">Razón Social</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="razon_social" name="razon_social" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Please enter your password</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>

@endsection