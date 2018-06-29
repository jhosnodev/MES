@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Clientes')



@section('content')  
<div class="card col-md-11">
 <div class="card-header">
    <strong>Cliente</strong> Registro
</div> 
<form action="">
    <!--FORM-->
    <div class="card-body card-block">
        <!-- ROW -->
        <div class="row">
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--END  ROW -->
        <!-- ROW -->
        <div class="row">
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--END  ROW -->
        <!-- ROW -->
        <div class="row">
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--END  ROW -->
        <!-- ROW -->
        <div class="row">
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--END  ROW -->
        <!-- ROW -->
        <div class="row">
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
            <!--LABEL - INPUT -->
            <div class="form-group col-md-6 ">
                <label for="" class="form-control-label">label</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <!--END  ROW -->
        
    </div>
<!--CARD FOOTER-->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
<!--END CARD FOOTER-->
</form>
<!--END FORM-->
</div>

@endsection