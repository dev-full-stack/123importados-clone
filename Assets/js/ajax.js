document.body.onload = function (){
    
    let form = document.getElementById("form-cadastro");
    
    let nome = document.getElementById("nome");
    let snome = document.getElementById("sn");
    let email = document.getElementById("email");
    let senha = document.getElementById("senha");
    let dia = document.getElementById("dia");
    let mes = document.getElementById("mes");
    let ano = document.getElementById("ano");
    let cpf = document.getElementById("cpf");
    let rg = document.getElementById("rg");
    let sexo = document.getElementById("sexo");
    
    form.addEventListener('submit', function (e){
        e.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "/ajax/cadastro",
            data:{
                nome: nome.value,
                snome: snome.value,
                email: email.value,
                senha: senha.value,
                dia: dia.value,
                mes: mes.value,
                ano: ano.value,
                cpf: cpf.value,
                rg: rg.value,
                sexo: sexo.value
            },
            success: (html)=>{
                $("#form-cadastro").trigger("reset");
                $(".return").html(html);
            }
        });
    });
};