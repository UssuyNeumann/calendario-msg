<?php

include_once('\workspace\calendario-msg\script.php');

$dia = new Mensagem();

$data = '29-09-2021';

echo $dia->verDia($data, new MensagemStrategy());

