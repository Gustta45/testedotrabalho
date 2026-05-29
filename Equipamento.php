<?php

class Equipamento
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $descricao;

    public function __construct($id, $nome, $preco, $quantidade, $descricao = '')
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'descricao' => $this->descricao
        ];
    }
}
