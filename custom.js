document.addEventListener('DOMContentLoaded', () => {
  document.forms.formulario.onsubmit = function (e) {
    e.preventDefault();
    validaForm(e);
  };
});

function abrirModal(id) {
  var modal = document.getElementById(id);
  modal.style.display = 'flex';
}

function fecharModal(id) {
  var modal = document.getElementById(id);
  modal.style.display = 'none';
}

function validaForm(e) {
  let form = e.target;
  let formValido = true;

  const spanName = form.nome.nextElementSibling;
  const spanEmail = form.email.nextElementSibling;
  const autorSim = form.querySelector('input[name="autor"][value="Sim"]');
  const autorNao = form.querySelector('input[name="autor"][value="Nao"]');
  const infoAutor = document.getElementById("infoAutor");

  spanName.textContent = "";
  spanEmail.textContent = "";

  
  if (form.nome.value === "" || form.nome.value.indexOf(' ') <= 0 ) {
    spanName.textContent = "Nome é Inválido!";
    formValido = false;
    form.nome.classList.add("error");
  } else {
    form.nome.classList.remove("error");
  }
  if (form.email.value === "" || form.email.value.indexOf('@') <= 1 || form.email.value.indexOf('.') <= (form.email.value.indexOf('@') + 1)) {
    spanEmail.textContent = "Email Inválido!";
    formValido = false;
    form.email.classList.add("error");
  } else {
    form.email.classList.remove("error");
  }
  if (autorSim.checked) {
    infoAutor.textContent = "Sim";
  } else if (autorNao.checked) {
    infoAutor.textContent = "Não";
  } else {
    infoAutor.textContent = "Não especificado";
  }

  const assuntoOptions = form.querySelectorAll('input[name="assunto"]');
  let hasSelectedAssunto = false;

  assuntoOptions.forEach(option => {
    if (option.checked) {
      hasSelectedAssunto = true;
    }
  });

  if (!hasSelectedAssunto) {
    alert("Nenhum assunto para o contato foi selecionado");
    formValido=false;
    e.preventDefault();
  }

  if (formValido) {
    abrirModal("vis-modal");
    const infoNome = document.getElementById("infoNome");
    const infoEmail = document.getElementById("infoEmail");
    const infoAssuntos = document.getElementById("infoAssuntos");
    const infoclienttext = document.getElementById("infoclienttext");
    const mensagemSucesso = document.getElementById("mensagemSucesso");
    
    infoNome.textContent = form.nome.value;
    infoEmail.textContent = form.email.value;
    infoclienttext.textContent = form.clienttext.value;

    const assuntosSelecionados = [];
    const checkboxes = form.querySelectorAll('input[name="assunto"]');

    checkboxes.forEach(checkbox => {
      if (checkbox.checked) {
        const label = document.querySelector(`label[for="${checkbox.id}"]`).textContent;
        assuntosSelecionados.push(label);
      }
    });

    if (assuntosSelecionados.length > 0) {
      assuntosSelecionados.forEach(valores => {
        const li = document.createElement("li");
        li.textContent = valores;
        infoAssuntos.appendChild(li);
      });
    } 
    mensagemSucesso.style.display = "block"; 
    e.preventDefault();
    form.reset(); 
  }
  if (!formValido){
        e.preventDefault();
  }
}

function enviarFormulario() {
  fecharModal("vis-modal"); 
  document.forms.formulario.submit(); 
}