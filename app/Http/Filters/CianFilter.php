<?php

namespace App\Http\Filters;
use Illuminate\Database\Eloquent\Builder;

class CianFilter extends AbstractFilter
{
    public const ADDRESS = 'address';
    public const SQUARE = 'square';
    public const HEIGHT = 'height';
    public const YEAR = 'year';
    public const FLOOR = 'floor';
    public const PRICE = 'price';
    public const FINISHING = 'finishing';


    protected function getCallbacks(): array
    {
        return [
            self::ADDRESS => [$this, 'address'],
            self::SQUARE => [$this, 'square'],
            self::HEIGHT => [$this, 'height'],
            self::YEAR => [$this, 'year'],
            self::FLOOR => [$this, 'floor'],
            self::PRICE => [$this, 'price'],
            self::FINISHING => [$this, 'finishing'],
        ];
    }

    public function address(Builder $builder, $value)
    {
            $builder->whereRaw('LOWER(address) ILIKE (?) ', '%' . $value.'%');
    }
    public function square(Builder $builder, $value)
    {
            $builder->whereBetween('square', $value);
    }
    public function height(Builder $builder, $value)
    {
            $builder->whereBetween('height', $value);
    }
    public function year(Builder $builder, $value)
    {
            $builder->whereBetween('year', $value);
    }
    public function floor(Builder $builder, $value)
    {
            $builder->whereBetween('floor', $value);
    }
    public function price(Builder $builder, $value)
    {
            $builder->whereBetween('price', $value);
    }
    public function finishing(Builder $builder, $value)
    {
        $builder->whereRaw('LOWER(finishing) ILIKE (?) ', '%' . $value.'%');
    }

}
