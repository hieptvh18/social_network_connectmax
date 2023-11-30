<?php
namespace App\Enums;

enum ProfileStatusEnum:string
{
    case PRIVATE = 'PRIVATE';
    case PUBLIC = 'PUBLIC';
    case CUSTOM = 'CUSTOM';
}