@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Title</td>
                    <td>Price</td>
                </tr>
                <tbody id="ShowData">

                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <div id="showInfo"></div>
            <div class="panel panel-primary">
                <div class="panel-heading">New Data</div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <button type="button" id="btnSubmit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
