<?php
namespace App\Classes\Containers\Exceptions;

use Exception;

/**
 * В контейнере не было обнаружено никаких записей.
 */
class NotFoundException extends Exception implements NotFoundExceptionInterface
{

}