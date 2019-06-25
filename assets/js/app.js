$(document).ready(function(){

    //------------------------//
    //  SignIn script        //
    //----------------------//
    $('#SignIn').on('click',function(event){
        event.preventDefault();
        let data=$('form#SignInForm').serializeArray();
        console.dir(data);
        $.ajax({
            url:'register/signin',
            data:data,
            type:'POST',
            dataType:'json',
            success:function(json){
                console.log('success');
                console.dir(json);
            },
            error:function(err){
                console.log('error');
                console.dir(err);
            }
        })
    })

});