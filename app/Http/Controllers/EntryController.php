<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Rules\NoPlusSymbolEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', new NoPlusSymbolEmail],
        ]);

        Entry::query()->firstOrCreate(
            ['email' => $request->input('email')],
            $request->only('first_name', 'last_name')
        );

        return back()->with('status', 'Entry was successful!');
    }
}
