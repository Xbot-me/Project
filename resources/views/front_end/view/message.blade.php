@extends('front_end.layouts.master')

@section('content')

    <div class="container">
      <div class="row">  
    @php
      if(Auth::user()->role_id == 1 && 2){
          $TO = 'Students' ;
      }else{
          $TO = 'Teachers';
      }   
    @endphp
    <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{$TO}}</div>
            
                    <div class="card-body">
                        <ul>
                            <li><a href="">Student 1</a></li>
                            <hr>
                             <li><a href="">Student 2</a></li>
                             <hr>
                            <li><a href="">Student 1</a></li>
                            <hr>
                             <li><a href="">Student 2</a></li>
                             <hr>
                            <li><a href="">Student 1</a></li>
                            
                            
                             
                              
                        </ul>
                    </div>
                    
                  </div>
    </div>
        
     <div class="wraper col-md-8">

     
       
              <div id="div" style="height:300px; overflow-y:scroll;" class="form-control  ">

                    <div class="container">
                            <p class="sender">{{Auth::user()->name}}</p>
                            <p class="messages" id="messages"></p>
                            
                          </div>
                          
                          
                  </div>
                  <form class="form" action="">
                
                        <input  type="hidden" id="tid" name="tid" value="{{ $id }}">
                        
        
                        <input class=" ms-input" name="message" id="message" placeholder="Send Your Message" type="text">
                        <button class="btn btn-success btn-right" id="submit" type="submit">Send</button>
                </form> 
              </div>
              
             
        
        
      
        
    </div>
</div>

    <script>
        function executeQuery() {
        var id = <?php echo($id) ?>;
        var usr = <?php $usr = Auth::user()->id; echo($usr) ?>;
             $.ajax({
               method:'GET',
               url:'/messages/'+ id,
               success:function(data){
               console.log(data);
                var messages = data.msg.reverse(); 
                
                var el = $.map(messages,function(val,i){
                   return "<p>"+val.message+"</p>"
               }); 
                /* var ii = data.msg[0].sender;  */
                
              
                console.log(data.msg[0].sender);
                
                 $('.messages').html(el.join(''));
                // console.log(data.msg[i].sender);
               
               
              
              /*  var receiver = data.receiver[0].name;
               var sender  = data.msg[0].sender; */
               
              
               
               
               
               
               /* document.getElementById('receiver').innerHTML= receiver; */
               var objdiv = document.getElementById('div');
               objdiv.scrollTop = objdiv.scrollHeight;
               console.log(id);
              }
             
            });
            setTimeout(executeQuery, 5000);
        }
         jQuery(document).ready(function(){
            
            
            setTimeout(executeQuery, 5000);
            var objdiv = document.getElementById('div');
             $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $('#submit').on('click', function (e){
                e.preventDefault();
                var tid = $('#tid').val();
                var message = $('#message').val();
            $.ajax({
               type:'POST',
               url: '/getmsg',
               data:{tid:tid,message:message},
               success:function(data){
                  console.log(data);
                  objdiv.scrollTop = objdiv.scrollHeight;
                  $('#message').val('');
               }
            });
         });
         });
    </script>
        

    
    <br>
    <br>
    <br>
    <br>
   
    
@endsection