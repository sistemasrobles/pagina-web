 $("#btn-enviar-promo").on('click',(event)=>{

 event.preventDefault()
    let data =   new FormData($("#promocion-form")[0])
    data.append( "_token",token_)
    $.ajax({
        "url":assetUrl,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        'success': function(response){
          

            if(response.status=='ok'){

               

                $("#promocion-form")[0].reset()

               Swal.fire({

                  icon: 'success',
                  title: 'Datos Guardados correctamente',
                  showConfirmButton: false,
                  timer: 1500

                })

               
               window.location.href="/financiamiento/gracias"

                

            }else{

                var data = response.data;

                var str = '';

                for(let i=0;i<data.length;i++){
                  str += data[i]+'<br>';
                  
                }

                Swal.fire({

                  icon: 'error',
                  title: str,
                  showConfirmButton: false,
                  timer: 2500
              })



            }
        },
        'error':(response)=>{

           console.log(response)


        }
    })
})





