<?php

namespace VmxFramework\Criacionais\Singleton;

interface Conexao
{
    static public function executeQuery(string $query): ?array;
}