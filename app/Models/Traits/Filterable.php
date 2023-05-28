<?php
namespace App\Models\Traits;
use App\Http\filter\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $builder, FilterInterface $filter)
    {
        $filter->apply($builder);
        return $builder;
    }
}
