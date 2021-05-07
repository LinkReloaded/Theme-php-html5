/* Formulario de Registro */

$(document).ready(function(){
    $("#campo5").Rut({format: true,format_on: 'keyup'});
});

function ValidarCampos(){               
    
    var ret = "";
    var countError =0;
    
    if($("#campo1").val().length < 3){ 
        countError++; 
        ret ="- (1) Debe ingresar un mínimo de 3 caracteres. \n"; 
    }

    
    if($("#campo2").val().length < 3){ 
        countError++; 
        ret = ret + "- (2) Debe ingresar un mínimo de 3 caracteres. \n"; 
    }

    
    if($("#campo3").val().length < 3){ 
        countError++; 
        ret = ret + "- (3) Debe ingresar un mínimo de 3 caracteres. \n"; 
    } else { 
        if(!soloNumeros($("#campo3").val())){ 
            ret = ret + "- (3) Debe ingresar números. \n"; 
        } 
    }
    

    if($("#campo4").val().length < 3){ 
        countError++; 
        ret = ret + "- (4) Debe ingresar un mínimo de 3 caracteres. \n"; 
    } else { 
        if(!validarMail($("#campo4").val())){ 
            ret = ret + "- (4) Debe ingresar un e-mail válido. \n"; 
        } 
    }
    
    
    if($('#campo5').val().length < 2) { 
        ret = ret + "- (5) Debe ingresar un mínimo de 3 caracteres. \n"; 
    } else { 
        if(!validarRut($("#campo5").val())){ 
            ret = ret + "- (5) Debe ingresar un Rut válido. \n"; 
        } 
    }
    

    if (countError > 0) { 
        alert(ret); 
        return false; 
    } else { 
        return true; 
    }

}

function validarRut(valor){ 
    var resp=0; 
    if($.Rut.validar(valor)){ 
        resp=1; 
    } 
    return resp; 
}

function soloNumeros(valor){ 
    var reg=/^\d+$/; if(reg.test(valor)){ 
        return 1; 
    } else { 
        return 0; 
    }
}

function validarMail(valor){ 
    var reg = /^([0-9a-zA-Z]+[!\#$%&'*+-/=?^_`{}|~]*)*[^!\#$%&'*+-/=?^_`{}|~]@[0-9a-zA-Z.+-]+\.[A-Za-z0-9]+$/; 
    if(reg.test(valor)){ 
        return 1; 
    } else { 
        return 0; 
    } 
}
