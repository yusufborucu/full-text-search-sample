<?php

namespace App;

trait FullTextSearch
{
    public function scopeSearch($query, $term)
    {
        $query->whereRaw("MATCH (address) AGAINST (? IN BOOLEAN MODE)" , $term);
        return $query;
    }
}