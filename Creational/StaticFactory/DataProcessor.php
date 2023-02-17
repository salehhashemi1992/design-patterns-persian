<?php

class DataProcessor
{
    public static function createDataReader(string $type): DataReader
    {
        return match ($type) {
            'csv' => new CsvReader(),
            'json' => new JsonReader(),
            'xml' => new XmlReader(),
            default => throw new InvalidArgumentException('Invalid data type.'),
        };
    }
}