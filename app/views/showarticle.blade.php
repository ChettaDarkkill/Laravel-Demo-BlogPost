@extends('layouts.master')
@section('title')
@parent
:: Show Error 
@stop

@section('content')
  	<!--ดึงบทความมาแสดงตามที่เลือก-->
      {{ Form::open(array('url' => 'postcomment', 'class' => 'form-horizontal','method' => 'post')) }}
       <?php foreach($results as $result):?>
            <blockquote>
                  <p><a href="#">{{$result->title}} </a></p>
                  <small class="text-info"> {{$result->details}} </small>
                 {{ Form::hidden('cmdarticle',$result->article_id)}}
            </blockquote> 
       <?php endforeach;?><hr/>
     <!--กล่องแสดงความคิดเห็น-->
     <h5>แสดงความคิดเห็นต่อบทความนี้</h5>
                        <textarea class="form-control counted" name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>
                        </br>
                        {{ Form::submit('Post New Message', array('class' => 'btn btn-info')) }}
         {{ Form::close() }}
        <hr/>
 		<h5>ความคิดเห็นทั้งหมดของบทความนี้</h5>
 		<!--ดึงคอมม้นของบทความนี้มาแสดง-->
        <?php foreach($results2 as $result):?>
             <table  class="table table-striped">
                  <tr>
                       <td width="20%"><h6>ความคิดเห็นที่{{$result->comment_id}}</h6></td>
                       <td align="left"><h6>{{$result->detail_comment}}</h6></td>
                  </tr>
            </table>
       <?php endforeach;?>

@stop