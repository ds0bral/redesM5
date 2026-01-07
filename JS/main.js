window.addEventListener("load", function() {

    // --- CÓDIGO COMUM A TODAS AS PÁGINAS ---
    
    const anoAtual = document.getElementById("anoAtual");
    if (anoAtual) {
        anoAtual.textContent = new Date().getFullYear();
    }

    // --- CÓDIGO DA PÁGINA: index.html ---

    const contadorElemento = document.getElementById("contador");
    if (contadorElemento) {
        let dataLancamento = new Date().getTime() + (2 * 24 * 60 * 60 * 1000);

        let timer = setInterval(function() {
            let agora = new Date().getTime();
            let distancia = dataLancamento - agora;

            let dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
            let horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
            let segundos = Math.floor((distancia % (1000 * 60)) / 1000);

            contadorElemento.innerHTML = dias + "d " + horas + "h " + minutos + "m " + segundos + "s ";

            if (distancia < 0) {
                clearInterval(timer);
                contadorElemento.innerHTML = "LANÇAMENTO OFICIAL!";
            }
        }, 1000);
    }

    // --- CÓDIGO DA PÁGINA: financiamento.html ---
    
    const btnCalcular = document.getElementById("btn-calcular");
    if (btnCalcular) {
        btnCalcular.addEventListener("click", function() {
            let valor = document.getElementById("valor").value;
            let meses = document.getElementById("meses").value;
            let resultadoDiv = document.getElementById("resultado-financiamento");

            let valorNum = parseFloat(valor);
            let mesesNum = parseInt(meses);

            if (isNaN(valorNum) || isNaN(mesesNum) || valorNum <= 0 || mesesNum <= 0) {
                resultadoDiv.innerHTML = "Por favor, insira valores válidos.";
                resultadoDiv.style.color = "red";
            } else {
                let taxaJuroAnual = 0.05;
                let taxaJuroMensal = taxaJuroAnual / 12;
                let mensalidade = (valorNum * taxaJuroMensal) / (1 - Math.pow(1 + taxaJuroMensal, -mesesNum));
                
                let mensalidadeFormatada = mensalidade.toFixed(2); 

                resultadoDiv.innerHTML = `A sua mensalidade será de: ${mensalidadeFormatada} &euro;`;
                resultadoDiv.style.color = "#6a994e";
            }
        });
    }

    // --- CÓDIGO DA PÁGINA: contacto.html ---

    const btnEnviar = document.getElementById("btn-enviar");
    if (btnEnviar) {
        btnEnviar.addEventListener("click", function() {
            let formValido = true;

            let nomeInput = document.getElementById("nome");
            let emailInput = document.getElementById("email");

            let erroNome = document.getElementsByClassName("msgerror")[0];
            let erroEmail = document.getElementsByClassName("msgerror")[1];

            erroNome.innerHTML = "";
            erroEmail.innerHTML = "";

            if (nomeInput.value === "") {
                erroNome.innerHTML = "Deve inserir um nome.";
                erroNome.style.color = "red";
                formValido = false;
            }

            if (emailInput.value === "" || !emailInput.value.includes('@')) {
                erroEmail.innerHTML = "Deve inserir um email válido.";
                erroEmail.style.color = "red";
                formValido = false;
            }

            if (formValido) {
                alert("Mensagem enviada com sucesso! (Simulação)");
                document.getElementById("form-contacto").reset();
            }
        });
    }
});