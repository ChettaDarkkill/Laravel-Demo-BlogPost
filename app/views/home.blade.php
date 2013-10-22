@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<h2>บทความทั้งหมดของระบบ</h2>
<?php foreach($results as $result):?>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>{{$result->title}} </h3>
        <p> {{$result->about}} </p>
        <p><a href="#" class="btn btn-primary">อ่านบทความนี้</a> <a href="#" class="btn btn-default">แสดงความคิดเห็น</a></p>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
@stop