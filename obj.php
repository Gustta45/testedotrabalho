<?php

/**
 * ---------------------------------------------------------
 * Arquivo simples para classes de modelo usadas no sistema.
 * Cada classe representa um tipo de dado básico do projeto.
 * ---------------------------------------------------------
 */

/**
 * Classe Equipamento
 *
 * Esta classe armazena os dados de um equipamento e
 * fornece métodos simples para acessar e modificar as
 * informações.
 */
class equipamento
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $descricao;

    /**
     * Construtor do equipamento.
     *
     * @param string $nome
     * @param float $preco
     * @param int $quantidade
     * @param string $descricao
     * @param int|null $id
     */
    public function __construct($nome, $preco, $quantidade = 1, $descricao = '', $id = null)
    {
        $this->id = $id;
        $this->nome = trim($nome);
        $this->preco = floatval($preco);
        $this->quantidade = intval($quantidade);
        $this->descricao = trim($descricao);
    }

    // ----------------------
    // Getters e setters
    // ----------------------

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = trim($nome);
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = floatval($preco);
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = intval($quantidade);
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = trim($descricao);
    }

    /**
     * Calcula o valor total do equipamento.
     * Esse valor é útil para relatórios ou totais.
     *
     * @return float
     */
    public function getValorTotal()
    {
        return $this->preco * $this->quantidade;
    }

    /**
     * Converte o equipamento em um array simples.
     * Ideal para salvar em JSON ou mostrar em tela.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'descricao' => $this->descricao,
        ];
    }
}


/**
 * Classe Funcionario
 *
 * Representa um funcionário do sistema e guarda dados
 * como nome, salário, cargo e contato.
 */
class funcionario
{
    private $id;
    private $nome;
    private $salario;
    private $cargo;
    private $email;

    public function __construct($nome, $salario, $cargo = '', $email = '', $id = null)
    {
        $this->id = $id;
        $this->nome = trim($nome);
        $this->salario = floatval($salario);
        $this->cargo = trim($cargo);
        $this->email = trim($email);
    }

    // ----------------------
    // Getters e setters
    // ----------------------

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = trim($nome);
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = floatval($salario);
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = trim($cargo);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    /**
     * Converte o funcionário em array para salvar ou enviar.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'salario' => $this->salario,
            'cargo' => $this->cargo,
            'email' => $this->email,
        ];
    }
}


/**
 * Classe Cliente
 *
 * Guarda informações do cliente e permite conversão
 * para formato de armazenamento.
 */
class cliente
{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;

    public function __construct($nome, $email, $telefone = '', $endereco = '', $id = null)
    {
        $this->id = $id;
        $this->nome = trim($nome);
        $this->email = trim($email);
        $this->telefone = trim($telefone);
        $this->endereco = trim($endereco);
    }

    // ----------------------
    // Getters e setters
    // ----------------------

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = trim($nome);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = trim($telefone);
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = trim($endereco);
    }

    /**
     * Converte o cliente em array simples.
     * Útil para salvar em JSON ou exibir em tabela.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
        ];
    }
}

?>