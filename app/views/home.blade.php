@extends('layouts.master')
@section('title')
@parent
:: Home
@stop

@section('content')
<form class="form-search">
    <table border="0">
        <tr>
            <td><h4>ค้นหาบทความ</h4></td>
            <td> <input type="text" class="input-medium search-query">
                 <button type="submit" class="btn">Search</button>
            </td>
        </tr>
    </table>
</form>

<!-- ดึงข้อมูลบทความมาแสดงในหน้าหลัก -->
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
              {{ Form::submit('อ่านบทความนี้', array('class' => 'btn btn-primary')) }}
              {{Form::hidden('lbl',$result->title,array('type'=>'hidden'))}}
              {{Form::hidden('ids',$result->article_id,array('type'=>'hidden'))}}
             </blockquote>       
         {{ Form::close() }}
                 @if(Auth::guest())
                 @else
                      <a href="{{{ URL::to('seecomment') }}}"><i class="icon-comment"></i>จัดการคอมเม้นจากบทความของคุณ</a>
                 @endif
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>

@stop

