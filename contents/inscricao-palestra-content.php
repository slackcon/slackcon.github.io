<?php
/*
 * GNU GENERAL PUBLIC LICENSE -  Version 3, 29 June 2007
 * < https://www.gnu.org/licenses/gpl-3.0.en.html >  * 
 * Autor: Jefferson Rocha <root@slackjeff.com.br> 
 * Data : 2019-08-10
 */
?>
<div id="container">
    <h1>Inscrição para Palestras</h1>
    <p>
        Este é o formulário de inscrição para as palestras da SlackCON.<br>
        Utilize este formulário se caso você queira realizar palestras durante o evento.
    </p>
    <p>
        Todas palestras voltadas ao Slackware e outras tecnologias são bem vindas.
    </p>

    <!-- SE O USUARIO JA TER ALGUMA PALESTRA REGISTRADA INSIRA QUAIS -->
    <div id="palestras_cadastradas">
        <h2>Suas Palestras já cadastradas</h2>
        <a href="#">Programação em Shell script para iniciantes (TESTE)</a>
        <br>
        <a href="#">A arte do GCC (TESTE)</a>
    </div>


    <form action="/signup" method="post">
        <p>
            <label>Nome da Palestra <b>*</b></label><br>
            <input type="text" name="course_name" size="50" required>
        </p>

        <p>
            <label>Descrição curta da palestra <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="6" autofocus required></textarea>
        </p>

        <p>
            <label>Descrição completa da Palestra <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="20" autofocus required></textarea>
        </p>

        <p>
            <label>Qual melhor dia para a sua palestra? <b>*</b></label><br>
            <label>
                <input type="radio" name="title" value="23">
                23/11
            </label>
            <label>
                <input type="radio" name="title" value="24">
                24/11
            </label>
            <label>
                <input type="radio" name="title" value="25">
                25/11
            </label>
            <label>
                <input type="radio" name="title" value="26">
                26/11
            </label>
        </p>

        <p>
        <b>NOTA IMPORTANTE:</b><br>
        O horário da palestra será definido pela organização do evento.<br>
        Preencha o campo abaixo definindo qual melhor horário para você, assim o team local irá estudar e encaixar sua palestra.
        </p>

        <p>
            <label>Qual melhor horário para sua palestra e por que? <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="10" autofocus required></textarea>
        </p>

        <p>
            <button>Enviar</button>
            <button type="reset">Resetar Formulário</button>
        </p>
    </form>
</div>