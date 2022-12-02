<div style="text-align: center; padding-bottom: 30px;">

         <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>
         
         <form action="{{url('add_comment')}}" method="POST">

            @csrf

            <textarea style="height: 150px; width: 300px;" placeholder="Comment something here" name="comment"></textarea>

            <br>
            <input type="submit" class="btn btn-primary" value="Comment">

         </form>

      </div>

      <div style="padding-left: 20%;">

         <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>

         @foreach($comment as $comment)

         <div>

            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>

            <a href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}" class="text-info">Reply</a>


            @foreach($reply as $rep)

               @if($rep->comment_id==$comment->id)

               <div style="padding-left: 3%; padding-bottom: 10px;">
                  <b>{{$rep->name}}</b>
                  <p>{{$rep->reply}}</p>

                  <a href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}" class="text-info">Reply</a>
               </div>

               @endif

            @endforeach
            


         </div>

         @endforeach

         <!-- Reply Textbox -->

         <div style="display: none;" class="replyDiv">

            <form action="{{url('add_reply')}}" method="POST">
               @csrf

               <input type="text" id="commentId" name="commentId" hidden="">
               <textarea style="height: 100px; width: 500px;" name="reply" placeholder="write something here"></textarea>
               <br>
               
               <button type="submit" class="btn btn-primary bg-info">Reply</button>

               <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">Close</a>

            </form>

         </div>

      </div>