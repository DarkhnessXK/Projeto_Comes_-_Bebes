<?php

get_header();
?>

<section>
    <p> Olá, tiamatcod (não é tiamatcod? Sair) A partir do painel de controle de sua conta, você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da conta.</p>
</section>

<form method="get">
    <fieldset>
        <label for="nomeusuario">Nome</label>
        <input type="text" name="nome" id="nome_usuario" placeholder="Digite seu nome">
        <label for="sobrenome_usuario">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome_usuario" placeholder="Digite seu sobrenome">
        <label for="email_usuario">Email</label>
        <input type="email" name="email" id="email_usuario" placeholder="Digite seu email">
        <label for="senha_atual">Senha atual (deixe em branco para não alterar:</label>
        <input type="password" name="senha" id="senha_atual" placeholder="Digite sua senha atual">
        <label for="nova_senha">Nova senha (deixe em branco para não alterar:</label>
        <input type="password" name="senha" id="nova_senha" placeholder="Digite sua nova senha">
        <label for="senha_atual">Senha atual (deixe em branco para não alterar:</label>
        <input type="password" name="senha" id="senha_atual" placeholder="Digite sua senha atual">
        <label for="confirmacao_senha">Confirmação senha</label>
        <input type="password" name="confirmaca" id="confimacao_senha" placeholder="Confirme sua nova senha">
    </fieldset>
    <button type="button" id="button_salvar"> Salvar alterações</button>
</form>

<?php
get_footer();

?>