<?php

namespace App\Http\Controllers;

use App\Http\Filters\CianFilter;
use App\Http\Requests\SearchRequest;
use App\Models\LivingSpace;

class SearchController extends Controller
{
    public function __invoke(SearchRequest $request)
    {
        $maxSquare = LivingSpace::orderBy('square', 'DESC')->first()->square;
        $minSquare = LivingSpace::orderBy('square', 'ASC')->first()->square;

        $data = $request->validated();
        $filter = app()->make(CianFilter::class, ['queryParams' => array_filter($data)]);;
        $livingSpaces = LivingSpace::filter($filter)->get();
        return view('search', compact('livingSpaces'));
    }
}
