<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required',
                'thumb' => 'required|url',
                'price' => 'required|min:3',
                'series' => 'required|min:5',
                'sale_date' => 'required|date',
                'type' => 'required|min:5',
            ],
            [
                'title.required' => 'Il campo Titolo deve essere compilato',
                'title.max' => 'Il campo Titolo deve avere una lunghezza massima di 255 caratteri',
                'description.required' => 'Il campo Descrizione deve essere compilato',
                'thumb.required' => 'Il campo Thumbnail deve essere compilato',
                'thumb.url' => 'Il campo Thumbnail deve coincidere ad un formato URL valido',
                'price.required' => 'Il campo Prezzo deve essere compilato',
                'price.min' => 'Il campo Prezzo deve avere una lunghezza minima di 3 caratteri',
                'series.required' => 'Il campo Serie deve essere compilato',
                'series.min' => 'Il campo Serie deve avere una lunghezza minima di 5 caratteri',
                'sale_date.required' => 'Il campo Data di uscita deve essere compilato',
                'sale_date.date' => 'Inserisci una data valida',
                'type.required' => 'Il campo Genere deve essere compilato',
                'type.min' => 'Il campo Genere deve avere una lunghezza minima di 5 caratteri',
            ]
        );

        $data = $request->all();

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.index')->with('created', 'Creazione effettuata con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        if ($comic) {
            return view('comics.show', ['comic' => $comic]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            return view('comics.edit', ['comic' => $comic]);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $updatedComic = Comic::find($id);
        $updatedComic->update($data);
        $updatedComic->save();

        return redirect()->route('comics.show', ['comic' => $updatedComic])->with('status', 'Aggiornamento effettuato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedComic = Comic::find($id);

        if ($deletedComic) {
            $deletedComic->delete();
            return redirect()->route('comics.index')->with('deleted', 'Eliminazione effettuata con successo');
        } else {
            abort(404);
        }
    }
}
