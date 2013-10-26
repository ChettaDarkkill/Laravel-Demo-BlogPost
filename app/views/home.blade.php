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
             <blockquote>
              <p>{{$result->title}}</p>
              <small>บทความนี้เกี่ยวกับ <cite title="Source Title">{{$result->about}}</cite></small>
             </blockquote>
             {{Form::hidden('lbl',$result->title,array('type'=>'hidden'))}}
             {{ Form::submit('อ่านบทความนี้', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
             @if(Auth::guest())
                 {{ Form::submit('แสดงความคิดเห็น', array('class' => 'btn')) }} 
             @else
                 {{ Form::submit('ดูความคิดเห็นทั้งหมดของบทความนี้', array('class' => 'btn')) }}   
             @endif
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
@stop

