<?php
/*
 * GNU GENERAL PUBLIC LICENSE -  Version 3, 29 June 2007
 * < https://www.gnu.org/licenses/gpl-3.0.en.html >  * 
 * Autor: Jefferson Rocha <root@slackjeff.com.br> 
 * Data : 2019-08-10
 */
?>
<div id="container">
    <h1>Inscrição para Oficinas</h1>
    <p>
        Este é o formulário de inscrição para as oficinas da SlackCON.<br>
        Utilize este formulário se caso você queira realizar oficinas durante o evento.
    </p>
    <p>
        Todas oficinas deverão ser voltadas ao Slackware, e outras tecnologias são bem vindas.
    </p>

    <form action="/signup" method="post">
        <p>
            <label>Nome da Oficina <b>*</b></label><br>
            <input type="text" name="course_name" size="50" required>
        </p>

        <p>
            <label>Descrição curta da oficina <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="6" autofocus required></textarea>
        </p>

        <p>
            <label>Descrição completa da oficina <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="20" autofocus required></textarea>
        </p>

        <p>
            <label>Qual melhor dia para a sua oficina? <b>*</b></label><br>
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
        O horário da oficina será definido pela organização do evento.<br>
        Preencha o campo abaixo definindo qual melhor horário para você, assim o team local irá estudar e encaixar sua palestra.
        </p>

        <p>
            <label>Qual melhor horário para sua oficina e por que? <b>*</b></label><br>
            <textarea class="input" id="message" name="course_description" cols="70" rows="10" autofocus required></textarea>
        </p>

        <p>
            <button>Enviar</button>
            <button type="reset">Resetar Formulário</button>
        </p>
    </form>
</div>