<?php
$data = 2.50;
switch (gettype($data)) {
    case 'integer':
    case 'double':
        echo "The data type in Number";
        break;
    case 'boolean':
        echo "The data type is Boolean";
        break;
    case 'string':
        echo "The data type is String";
        break;
    case 'array':
        echo "The data type is array";
        break;
    default:
        echo "The data type is unknown";
        break;
}
