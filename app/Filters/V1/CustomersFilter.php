<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{

    protected $safeParms = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
        ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<='
    ];
}
