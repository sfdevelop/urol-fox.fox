<?php

namespace App\Model\Traits;

trait isStock
{
    /**
     * @return string[]
     */
    protected static function getStock(): array
    {
        return [
            self::IS_STOCK => __('comment.in_stock'),
            self::NOT_STOCK => __('comment.not_stock'),
        ];
    }

    /**
     * @return string
     */
    public function getStockAttribute(): string
    {
        return self::getStock()[$this->in_stock];
    }
}
