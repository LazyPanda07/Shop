<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/utils/DataBase.php");

class BaseModel
{
    private $connection;
    protected $tableName;

    public function __construct()
    {
        $this->connection = DataBase::getInstance()->getConnection();
    }

    public function getList($condition = "1"): ?array
    {
        $query = "SELECT * FROM {$this->tableName} WHERE {$condition}";

        return $this->connection->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id): ?array
    {
        $query = "SELECT * FROM {$this->tableName} WHERE id = {$id}";

        return $this->connection->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function getByField(string $fieldName, $value): ?array
    {
        if (is_string($value)) {
            $value = '\'' . $value . '\'';
        }

        $query = "SELECT * FROM {$this->tableName} WHERE {$fieldName} = {$value}";

        return $this->connection->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function insert(array $attributes): int
    {
        foreach ($attributes as $key => &$value) {
            if (is_string($value)) {
                $value = '\'' . $value . '\'';
            }
        }

        $fieldNames = implode(", ", array_keys($attributes));
        $fieldValues = implode(", ", array_values($attributes));

        $query = "INSERT INTO {$this->tableName} ({$fieldNames}) VALUES ({$fieldValues})";

        $this->connection->query($query);
        $this->connection->commit();

        return $this->connection->insert_id;
    }
}
