<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GridRequest;
use App\Color;
use App\GridItem;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$gridItems = GridItem::gridItemsArray();

    	return view('grid.index', compact('gridItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	$sequence = $request->sequence;
    	$colors = Color::all();

    	return view('grid.create', compact('sequence', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Requests\GridRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GridRequest $request)
    {
        $validated = $request->validated();
        GridItem::create($validated);

        return redirect('/')->with('msg_add', "Успешно добавихте елемент с име $validated[title]!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\GridItem $gridItem
     * @return \Illuminate\Http\Response
     */
    public function edit(GridItem $gridItem)
    {
        $colors = Color::all();

        return view('grid.edit', compact('gridItem', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Requests\GridRequest $request
     * @param  App\GridItem $gridItem
     * @return \Illuminate\Http\Response
     */
    public function update(GridRequest $request, GridItem $gridItem)
    {
        $validated = $request->validated();
        $gridItem->update($validated);

        return redirect('/')->with('msg_update', "Успешно обновихте елемент с име $validated[title]!"); 
    }
}
