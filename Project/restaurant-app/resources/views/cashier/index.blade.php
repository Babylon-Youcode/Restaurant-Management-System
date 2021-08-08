@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="table-detail"></div>
    <div class="row justify-content-center py5">
      <div class="col-md-5">
        <button class="btn btn-primary btn-block" id="btn-show-tables">View All Tables</button>
        <div id="selected-table"></div>
        <div id="order-detail"></div>
      </div>
      <div class="col-md-7">
      </div>

      <script>
$(document).ready(function(){
    $("#btn-show-tables").click(function(){
        $.get("/cashier/getTable", function(data){
           $("#table-detail").html(data);
      })
      });
    });
  </script>

@endsection
