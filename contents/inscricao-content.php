<?php
/*
 * GNU GENERAL PUBLIC LICENSE -  Version 3, 29 June 2007
 * < https://www.gnu.org/licenses/gpl-3.0.en.html >  * 
 * Autor: Jefferson Rocha <root@slackjeff.com.br> 
 * Data : 2019-08-10
 */
?>

<div id="container">
    <h1>Formulário de Inscrição</h1>
    <p>
        Este é o formulário de inscrição para SlackCON.<br>
        Vamos utilizar este formulário como base nos <b>brindes</b>, <b>refeições</b> entre outras coisas.
    </p>
    <p>
        Somente se registre se você ter certeza de sua presença no evento.
    </p>

    <form action="/signup" method="post">
        <p>
            <label>Primeiro Nome</label><br>
            <input type="text" name="first_name">
        </p>
        <p>
            <label>Sobrenome</label><br>
            <input type="text" name="last_name">
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Telegram</label><br>
            <input type="tel" name="phone" placeholder="EX: @slackjeff">
        </p>
        <p>
            <label>Senha</label><br>
            <input type="password" name="password">
        </p>
        <p>
            <label>Estado</label><br>
            <select>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
            </select>
        </p>
        <p>
            <label>
                <input type="checkbox" value="terms">
                Você gostaria de receber uma bolsa refeição <b>(Almoço e Janta)</b> para os <u>quatro dias</u> da SlackCON? 
            </label>
        </p>
        <p>
            <button>Enviar</button>
            <button type="reset">Resetar Formulário</button>
        </p>
    </form>
</div>