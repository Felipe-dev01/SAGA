<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o tipo de documento como HTML5 -->
    <meta charset="UTF-8">
    <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define a viewport para garantir que a página seja exibida corretamente em dispositivos móveis -->
    <title>Recuperação de senha</title>
    <!-- Título da página -->
    <link rel="stylesheet" href="../CSS/styles.css">
    <!-- Vincula o arquivo CSS externo -->
</head>
<body>
    <!-- Início do corpo da página -->
    <header>
        <!-- Cabeçalho da página (vazio neste caso) -->
    </header>
    <main>
        <!-- Elemento principal da página -->
        <div class="login-container">
            <!-- Container que centraliza o conteúdo da recuperação de senha -->
            <img src="../imagens/SagaLogo.png" alt="Logo" class="logo_login">
            <!-- Imagem do logo no topo do formulário -->
            <h1>Recuperação de senha</h1>
            <!-- Título do formulário de recuperação de senha -->
            <form method="get">
                <!-- Início do formulário de recuperação de senha -->
                <label for="role">Entrar como:</label>
                <!-- Rótulo para o campo de seleção de papel -->
                <select id="role" name="role" onchange="updateCPF()">
                    <!-- Campo de seleção de papel (aluno, responsável, professor) -->
                    <option value="aluno">Aluno</option>
                    <!-- Opção "Aluno" -->
                    <option value="responsavel">Responsável</option>
                    <!-- Opção "Responsável" -->
                    <option value="professor">Professor</option>
                    <!-- Opção "Professor" -->
                </select>

                <label for="etec-code">Cod. ETEC:</label>
                <!-- Rótulo para o campo de código da ETEC -->
                <input type="text" id="etec-code" name="etec-code">
                <!-- Campo de entrada para o código da ETEC -->

                <label for="cpf" id="cpf-label">CPF do aluno:</label>
                <!-- Rótulo para o campo CPF -->
                <input type="text" id="cpf" name="cpf">
                <!-- Campo de entrada para o CPF -->

                <button type="submit">Enviar</button>
                <!-- Botão de envio do formulário -->

                <a href="../../index.html" id="reset-password">Fazer login</a>
                <!-- Link para voltar à página de login -->
            </form>
            <!-- Fim do formulário de recuperação de senha -->
        </div>
        <!-- Fim do container de recuperação de senha -->
    </main>
    <!-- Fim do elemento principal -->
    
    <script src="../SCRIPT/scripts.js"></script>
    <!-- Vincula o arquivo JavaScript externo -->
</body>
</html>
