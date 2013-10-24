@extends('layouts.master')
@section('title')
@parent
:: Secret
@stop

@section('content')
 <h1>Hello :User</h1>
 <p>welcome to easy post block</p>
  <p>
        <button class="btn btn-large btn-primary" type="button" id="flippppp">สร้างบทความใหม่</button>
        <button class="btn btn-large" type="button" id="flisssss">ค้นหาบทความที่เคยเขียนไว้</button>
  </p>
      <div id="panel">
           {{ Form::open(array('url' => 'article', 'class' => 'form-horizontal','method' => 'post')) }}
               <table border="0" width="50%" > 
                      <tr>
                          <td width="20%">{{Form::label('หัวข้อบทความ')}}</td>
                          <td>{{Form::text('title')}}</td>
                      </tr>
                      <tr>
                          <td width="20%">{{Form::label('เนื้อหาเกี่ยวกับ')}}</td>
                          <td>{{Form::text('about')}}</td>
                      </tr>
                       <tr>
                          <td width="20%">{{Form::label('รายละเอียดบทความ')}}</td>
                          <td>{{Form::textarea('detail')}}</td>
                      </tr>
                       <tr>
                          <td></td>
                          <td>{{ Form::submit('บันทึกบทความ', array('class' => 'btn')) }}</td>
                      </tr>
               </table>
           {{ Form::close() }}
      </div>
      <br/>
            <strong>บทความทั้งหมดของคุณ</strong>
      <br/>
      <!--แสดงบทความทั้งหมดเมื่อ log in เข้าใช้งานแล้ว-->
       <?php foreach($results as $result):?>
            <blockquote>
                  {{ Form::open(array('url' => 'delarticle', 'class' => 'form-horizontal','method' => 'post')) }}
                  <p><a href="#">{{$result->title}} </a></p>
                  <small> {{$result->about}} <cite title="Source Title">ทดสอบ</cite></small>
                  {{ Form::text('delarticle',$result->title)}}
                  {{ Form::submit('ลบบทความนี้',array('class'=>'btn'))}}
                  {{ Form::close() }}
            </blockquote>
       <?php endforeach;?>
@stop