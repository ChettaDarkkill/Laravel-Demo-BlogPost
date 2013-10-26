@extends('layouts.master')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script> 
      $(document).ready(function(){
          $("#flippppp").click(function(){
            $("#panel").slideDown(800);
        });
        
         $("#flisssss").click(function(){
           $("#panel").slideUp(800);
        });
          $("#stop").click(function(){
            $("#panel").stop();
        });
       });
</script>
<style type="text/css"> 
    #panel,#flip
    {
    padding:5px;
    text-align:left;
    background-color:#e5eecc;
    border:solid 1px #c3c3c3;
    }
    #panel
    {
    padding:10px;
    display:none;
    }
</style>
@section('title')
@parent
:: Secret
@stop

@section('content')
 <h1>Hello User !</h1>
 <p>If you see this page, you are logged in.</p>
  <p>
        <button class="btn btn-large btn-primary" type="button" id="flippppp">สร้างบทความใหม่</button>
        <button class="btn btn-large" type="button" id="flisssss">ค้นหาบทความที่เคยเขียนไว้</button>
  </p>
      <div id="panel">
           {{ Form::open(array('url' => 'article', 'class' => 'form-horizontal','method' => 'post')) }}
              <center><table width="800px">
                      <tr>
                           <td width = "200px"> <strong>ใส่ชื่อบทความของคุณ</strong> </td>
                           <td><input type="text" placeholder="ชื่อบทความ"></td>
                      </tr>
                      <tr>
                           <td width = "200px"><strong>เนื้อหาย่อย</strong></td>
                           <td><input type="text" placeholder="เนื้อหาย่อย"></td>
                      </tr>
                      <tr>
                           <td width = "200px"><strong>เนื้อหาหลัก</strong></td>
                           <td><textarea rows="10" width="500px"></textarea></td>
                      </tr>
                </table>
                <!-- Login button -->
                  <div class="control-group">
                      <div class="controls">
                          {{ Form::submit('Login', array('class' => 'btn')) }}
                      </div>
                  </div>
              </center>  
           {{ Form::close() }}
      </div>
      <br/>
          <strong>บทความทั้งหมดของคุณ</strong>
      <br/>
      <blockquote>
            <p><a href="#">การออกรายงานด้วย Crystal report </a></p>
            <small> โปรแกรมที่ใช้ช่วยในการทำรายงานในรูปแบบต่าง ๆ. <cite title="Source Title">ด้วยความสะดวกและง่ายในการใช้งาน. Crystal Report Vesion. Crystal Report 4.6; Crystal Report 6</cite></small>
      </blockquote>
@stop