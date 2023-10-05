<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{

    protected $safeParms = [
        'customerId' => ['eq', 'ne', 'gt', 'lt'],
        'amount' => ['eq', 'ne', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'ne', 'gt', 'lt', 'gte', 'lte'],
        'paidDate' => ['eq', 'ne', 'gt', 'lt', 'gte', 'lte'],
        ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
        'ne' => '!='
    ];
}
