<?php

Interface MensagemInterface
{
    public function mostrarMensagem($data) : string;
}


class MensagemStrategy implements MensagemInterface
{
    public function mostrarMensagem($data) : string
    {
        return date("D", strtotime($data));
    }
}

class Mensagem
{
    public function verDia(string $data, MensagemStrategy $strategy) : string
    {
        return $strategy->mostrarMensagem($data);
    }
}
