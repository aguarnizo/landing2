
                    //función para abrir ventana emergente
                    $(document).on('ready',ventana);
                    function ventana(){
                        //if("#popup".prop('checked')){
                        //window=this.open(pagina,'width=400,height=200,top=300,left=700,toolbar=no');  
                        //return true;
                        if($('input[name=popup]').is(':checked')){
                        window.open('mostrar.php','nuevaVentana','width=400,height=200,top=300,left=700,toolbar=no')
                            return true;
                        }
                        else{
                            return false;
                        }
                    }
                    
                    $('#popup').change(function(){
                            var c=$(this).attr("checked");
                            if(checkeado){
                                alert('activado');
                            }else{
                                alert('desactivado');
                            }
                        });
                    
                    
                    $(document).ready(function(){
                        
                        $("#formulario").validate({
                            //reglas
                            rules:{
                                
                                nombre:{
                                    required:true,
                                    //minlength:5
                                },
                                celular:{
                                    required:true,
                                    number:true
                                },
                                empresa:{
                                    required:true
                                },
                                tamano:{
                                    required:true
                                },
                                pais:{
                                    required:true
                                },
                                email:{
                                    required:true,
                                    email:true
                                },
                                popup:{
                                    required:true
                                }
                            },
                            //mensajes
                            messages:{
                                
                                 nombre:{
                                    required:"Ingresa un nombre"
                                    //minlength:5
                                },
                                celular:{
                                    required:"Ingresa un número de teléfono",
                                    number:"Sólo debes ingresar números"
                                },
                                empresa:{
                                    required:"Ingresa empresa"
                                },
                                tamano:{
                                    required:"Selecciona tipo de empresa"
                                },
                                pais:{
                                    required:"Selecciona país"
                                },
                                email:{
                                    required: "Ingresa un email",
                                    email:"Ingresa un email válido",
                                },
                                popup:{
                                    required:"Debe aceptar los términos y condiciones"
                                }
                                
                            }
                                
                                
                                
                        });
                    });
                    
                