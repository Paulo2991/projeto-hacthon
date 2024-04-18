// Adiciona um ouvinte de evento para o envio do formulário
document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio padrão do formulário
  
  // Recupera os valores dos campos de entrada
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  
  // Simula a autenticação do usuário (Substitua isso pela sua lógica real de autenticação)
  authenticateUser(email, password);
});

// Função para autenticar o usuário
function authenticateUser(email, password) {
  // Simula uma solicitação ao servidor (Substitua isso pela sua autenticação real do lado do servidor)
  setTimeout(function() {
    // Supondo que o email é o nome de usuário e a senha é '123456'
    if (email === 'exemplo@exemplo.com' && password === '123456') {
      alert('Login bem-sucedido!'); // Exibe um alerta indicando que o login foi bem-sucedido
      // Redireciona para o painel ou outra página
      window.location.href = 'painel.html';
    } else {
      alert('Login falhou. Por favor, verifique suas credenciais.'); // Exibe um alerta indicando que o login falhou
    }
  }, 1000); // Simula um atraso de 1 segundo para imitar uma solicitação ao servidor
}
