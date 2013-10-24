@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<h2>บทความทั้งหมด</h2>
<?php foreach($results as $result):?>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <div class="caption">

       
         <!--{{ Form::open(array('url' => 'showarticle','class' => 'form-horizontal','method' => 'post')) }}-->
         {{Form::open(array('url' => 'showarticle'))}}
             <h3>{{Form::text('lbl',$result->title,array('type'=>'hidden'))}}</h3>
             <p> {{$result->about}} </p>
             {{ Form::submit('แสดงบทความ', array('class' => 'btn btn-primary')) }}{{ Form::submit('แสดงความคิดเห็น', array('class' => 'btn')) }}   
         {{ Form::close() }}

      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
@stop

