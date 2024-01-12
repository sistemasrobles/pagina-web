$('.btn_enviar_frm_new').on("click",(event)=>{
    event.preventDefault()
    $("#spiner_load").removeClass("op0")
    $("#spiner_load").addClass('zi2')
    let nombre = $("#nombre_contacto_mailing").val();
    let correo = $("#correo_contacto_mailing").val();
    let data={
        nombre:nombre,
        correo:correo,
        _token:token_,
    }
    $.ajax({
        "url": "/mailing/crear",
        "data": data,
        "method": 'POST',
        'success': function(response){
            console.log(response)
            if(response==1){
                avion_enviar()
                $("#spiner_load").addClass('op0')
                $("#spiner_load").removeClass('zi2')


            }else{
                alertnoguardado()

            }
        },
        'error':(response)=>{
            $("#spiner_load").addClass('op0')
            $("#spiner_load").removeClass('zi2')
            $.each( response.responseJSON.errors, function( key, value) {
                response.responseJSON.errors[key].forEach(element => {
                        console.log(element)
                        toastr.error(element)
                    });
            });


        }
    })
})

function avion_enviar(){

    let button=".btn_enviar_frm_new";
    let button1=$(button)[0]

    let getVar = variable => getComputedStyle(button1).getPropertyValue(variable);
    var active=$(button).hasClass("active")
    if(!active){
        $(button).addClass("active")
        gsap.to(button, {
            keyframes: [
                {
                    "--left-wing-first-x": 50,
                    "--left-wing-first-y": 100,
                    "--right-wing-second-x": 50,
                    "--right-wing-second-y": 100,
                    duration: 0.2,
                    onComplete() {
                        gsap.set(button, {
                            "--left-wing-first-y": 0,
                            "--left-wing-second-x": 40,
                            "--left-wing-second-y": 100,
                            "--left-wing-third-x": 0,
                            "--left-wing-third-y": 100,
                            "--left-body-third-x": 40,
                            "--right-wing-first-x": 50,
                            "--right-wing-first-y": 0,
                            "--right-wing-second-x": 60,
                            "--right-wing-second-y": 100,
                            "--right-wing-third-x": 100,
                            "--right-wing-third-y": 100,
                            "--right-body-third-x": 60
                        });
                    }
                },
                {
                    "--left-wing-third-x": 20,
                    "--left-wing-third-y": 90,
                    "--left-wing-second-y": 90,
                    "--left-body-third-y": 90,
                    "--right-wing-third-x": 80,
                    "--right-wing-third-y": 90,
                    "--right-body-third-y": 90,
                    "--right-wing-second-y": 90,
                    duration: 0.2
                },
                {
                    "--rotate": 50,
                    "--left-wing-third-y": 95,
                    "--left-wing-third-x": 27,
                    "--right-body-third-x": 45,
                    "--right-wing-second-x": 45,
                    "--right-wing-third-x": 60,
                    "--right-wing-third-y": 83,
                    duration: 0.25
                },
                {
                    "--rotate": 60,
                    "--plane-x": -8,
                    "--plane-y": 40,
                    duration: 0.2
                },
                {
                    "--rotate": 40,
                    "--plane-x": 45,
                    "--plane-y": -300,
                    "--plane-opacity": 0,
                    duration: 0.375,
                    onComplete() {
                        setTimeout(() => {
                           $(button).removeAttr("style");
                            gsap.fromTo(
                                button,
                                {
                                    opacity: 0,
                                    y: -8
                                },
                                {
                                    opacity: 1,
                                    y: 0,
                                    clearProps: true,
                                    duration: 0.3,
                                    onComplete() {
                                        $("#frm_news_ecoplaza")[0].reset()
                                        $(button).removeClass("active");
                                    }
                                }
                            );
                        }, 1800);
                    }
                }
            ]
        });

        gsap.to(button, {
            keyframes: [
                {
                    "--text-opacity": 0,
                    "--border-radius": 0,
                    "--left-wing-background": getVar("--primary-dark"),
                    "--right-wing-background": getVar("--primary-dark"),
                    duration: 0.11
                },
                {
                    "--left-wing-background": getVar("--primary"),
                    "--right-wing-background": getVar("--primary"),
                    duration: 0.14
                },
                {
                    "--left-body-background": getVar("--primary-dark"),
                    "--right-body-background": getVar("--primary-darkest"),
                    duration: 0.25,
                    delay: 0.1
                },
                {
                    "--trails-stroke": 171,
                    duration: 0.22,
                    delay: 0.22
                },
                {
                    "--success-opacity": 1,
                    "--success-x": 0,
                    duration: 0.2,
                    delay: 0.15
                },
                {
                    "--success-stroke": 0,
                    duration: 0.15
                }
            ]
        });
    }





 }
