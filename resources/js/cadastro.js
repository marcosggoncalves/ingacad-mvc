$(document).ready(() => {
    $('#telefone').mask('(00) 00000-0000');

    $('#cpf_cnpj').on('input', () => {
        const campoCPFCNPJ = $('#cpf_cnpj')

        if (campoCPFCNPJ.val().length < 14) {
            return campoCPFCNPJ.mask('000.000.000-00');
        }
        return campoCPFCNPJ.mask('00.000.000/0000-00');
    });

    $('#cep').blur(() => {
        let cep = $('#cep').val();
        if (cep != "") {
            $.ajax({
                url: `https://viacep.com.br/ws/${cep}/json/`,
                type: 'GET',
                dataType: 'json',
                success: (data) => {
                    if (!data.erro) {
                        $('#rua').val(data.logradouro);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.localidade);
                        $('#estado').val(data.uf);
                    }
                },
                error: () => {
                    Swal.fire({
                        title: "Dado inválido!",
                        text: "CEP não localizado, digite novamente",
                        icon: "error",
                        confirmButtonColor: "#FFA500",
                        confirmButtonText: "OK"
                    });
                }
            });
        }
    });
});