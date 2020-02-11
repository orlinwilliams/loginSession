$("#formLogin").submit(function(event){
    event.preventDefault();
    
    $.ajax({
        beforSend:function(){
            $("#preloaderIon").show("slow");
        },
        //dataType:"Json",
        url:"../vistas/login.php",
        data:$("form").serialize(),
        type:"POST",
        success:function(resp){ 
            console.log(resp);
            
            if(resp==1){
                    location.href="../vistas/home.php";
                    
//
            }
            else if(resp==0){
                location.href="../vistas/home.php";        
            }
        },
        error:function(error){
            console.log(error);
        },
        complete:function(){
            $("#preloaderIon").hide();
        }

    })

})

