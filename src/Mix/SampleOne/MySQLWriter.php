<?php

namespace OOP\App\Mix\SampleOne;

class MySQLWriter implements Writer
{
    /**
     * @var string
     */
    private string $database;

    /**
     * @var string
     */
    private string $tableName;

    /**
     * @var string
     */
    private string $field;

    /**
     * @var string
     */
    private string $data;

    /**
     * @param string $database
     * @param string $tableName
     * @param string $field
     */
    public function __construct(string $data, string $database, string $tableName, string $field)
    {
        $this->database = $database;
        $this->tableName = $tableName;
        $this->field = $field;
        $this->data = $data;
    }


    public function write(): bool
    {
        echo "MySQL Write done\n";
        return true;
    }
}
