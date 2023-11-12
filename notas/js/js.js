//Simplificação de msg de erro da SweetAlert2
function msgErro(msg, tempo) {
  //Exibe erro
  Swal.fire({
    title: msg,
    icon: 'error',
    showConfirmButton: false,
    timer: tempo,
    willClose: () => { }
  })
}

//Simplificação de msg de OK da SweetAlert2
function msgOK(msg, tempo) {
  //Exibe erro
  Swal.fire({
    title: msg,
    icon: 'success',
    showConfirmButton: false,
    timer: tempo,
    willClose: () => { }
  })
}

function limpar() {
  document.location.reload(true);
}


//FUNÇÃO PARA APLICAR CAIXA ALTA NOS FORMULARIOS
function toUpperText(idElemento) {
  document.getElementById(idElemento).value = document.getElementById(idElemento).value.toString().toUpperCase();
}


function redireciona(pagina) {
  var link = window.location.href
  var tamanhoLink = 0;

  for(let tamanho = link.length-1; tamanho > 0; tamanho--) {
      if( link[tamanho]  == '/') {
          tamanhoLink = tamanho;
          break
      }
  }

  //window.location.href = link.substring(0, tamanhoLink)+'/'+pagina;
  window.open(link.substring(0, tamanhoLink)+'/'+pagina)
  }

  function navega(pagina) {
    var linkNavega = window.location.href
    var tamanhoLinkNavega = 0;
  
    for(let tamanho = linkNavega.length-1; tamanho > 0; tamanho--) {
      if( linkNavega[tamanho]  == '/') {
          tamanhoLinkNavega = tamanho;
          break
      }
    }
  
    //window.location.href = link.substring(0, tamanhoLink)+'/'+pagina;
    window.location.href = linkNavega.substring(0, tamanhoLinkNavega)+'/'+pagina
  
  }