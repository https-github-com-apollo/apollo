$("#CepCadastro").focusout(function(){
    $.ajax({
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        
        dataType: 'json',

        success: function(resposta){
            $("#ruaCadastro").val(resposta.logradouro);
            $("#complementoCadastro").val(resposta.complemento);
            $("#bairroCadastro").val(resposta.bairro);
            $("#cidadeCadastro").val(resposta.localidade);
            $("#ufCadastro").val(resposta.uf);
            $("#numeroEndCadastro").focus();
        }
    });
});

