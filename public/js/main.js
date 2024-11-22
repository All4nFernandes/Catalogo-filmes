const parametros = new URLSearchParams(window.location.search)
const TipoMensagem = parametros.get("mensagem")

const notificacao = document.createElement("div")

if(TipoMensagem === "sucesso"){
    notificacao.innerHTML = "Operação Realizado com sucesso!"
    notificacao.className = "Notificacao sucesso"
}else if(TipoMensagem === "erro"){
    notificacao.innerHTML = "Erro ao realizar Operação"
    notificacao.className = "Notificacao erro"
}

document.body.appendChild(notificacao)

const urlSemParamentro = window.location.pathname
window.history.replaceState(null, "", urlSemParamentro)

setTimeout(function(){
    notificacao.remove()
}, 2000)

