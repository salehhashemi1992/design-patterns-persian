<?php

interface DataReader
{
    public function readData(string $filename): array;
}