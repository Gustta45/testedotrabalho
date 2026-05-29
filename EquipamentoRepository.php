<?php

require_once __DIR__ . '/Equipamento.php';

class EquipamentoRepository
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
        if (!file_exists($filePath)) {
            file_put_contents($filePath, json_encode([]));
        }
    }

    public function getAll()
    {
        $data = json_decode(file_get_contents($this->filePath), true);
        $equipamentos = [];
        foreach ($data as $item) {
            $equipamentos[] = new Equipamento(
                $item['id'],
                $item['nome'],
                $item['preco'],
                $item['quantidade'],
                $item['descricao']
            );
        }
        return $equipamentos;
    }

    public function getById($id)
    {
        $data = json_decode(file_get_contents($this->filePath), true);
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                return new Equipamento(
                    $item['id'],
                    $item['nome'],
                    $item['preco'],
                    $item['quantidade'],
                    $item['descricao']
                );
            }
        }
        return null;
    }

    public function save(Equipamento $equipamento)
    {
        $data = json_decode(file_get_contents($this->filePath), true);
        $found = false;

        foreach ($data as &$item) {
            if ($item['id'] == $equipamento->getId()) {
                $item = $equipamento->toArray();
                $found = true;
                break;
            }
        }

        if (!$found) {
            $data[] = $equipamento->toArray();
        }

        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        return true;
    }

    public function delete($id)
    {
        $data = json_decode(file_get_contents($this->filePath), true);
        $data = array_filter($data, function ($item) use ($id) {
            return $item['id'] != $id;
        });
        file_put_contents($this->filePath, json_encode(array_values($data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        return true;
    }

    public function getNextId()
    {
        $data = json_decode(file_get_contents($this->filePath), true);
        if (empty($data)) {
            return 1;
        }
        $maxId = max(array_column($data, 'id'));
        return $maxId + 1;
    }
}
