<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;


class TodoListController extends Controller
{
    
    public function index() {
        return view('welcome', ['listItem' => ListItem::all()]);
    }

    public function saveItem(Request $request)
{
    // Ajoute une validation pour t'assurer que le champ 'listItem' n'est pas vide
    $request->validate([
        'listItem' => 'required|string|max:255',
    ]);

    // Créer l'élément de liste
    $listItem = new ListItem();
    $listItem->name = $request->input('listItem');
    $listItem->is_complete = 0;
    $listItem->save();

    return redirect('/');
}

}
