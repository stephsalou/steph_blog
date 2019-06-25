$(function(){
   $('.pull-right').on('click',function(event){
       $('.replyForm').fadeOut(500);
       let form;
       event.preventDefault();
       form = `<div class="form-group mt-4 replyForm animated bounceInDown">
                      <label for="quickReplyFormComment">Your comment</label>
                      <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>
                      <div class="text-center">
                        <button class="btn btn-info btn-sm" type="submit">Post</button>
                      </div>
                    </div>`;
       //let comment=$(this).parentsUntil('.media').parent();
       let comment=$(this).parent().parent();
       $(comment).append(form);

   })
});