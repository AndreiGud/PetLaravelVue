<?php

namespace base_logic\Enum;

use Exception;

enum ProductStates:int
{
    case Ordered = 1;
    case Sold_out = 2;
    case Stored = 0;

    /**
     * @throws Exception
     */
    public function get_name(): string
    {
        return match ($this){
            ProductStates::Ordered => 'Заказан',
            ProductStates::Stored => 'Хранится',
            ProductStates::Sold_out => 'Продано',
        };

    }
}


