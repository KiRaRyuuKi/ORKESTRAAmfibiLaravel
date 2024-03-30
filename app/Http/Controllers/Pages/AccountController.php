<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

use App\Models\Account;

class AccountController extends Controller
{

    public function account()
    {
        $account = Account::orderBy('created_at', 'DESC')->get();

        return view('pages.account',compact('account'));
    }

    public function name($nama)
    {
        return $nama->segment(2);
    }

    public function create()
    {
        return view('pages.account.create');
    }

    public function store(Request $request)
    {
        $account = Account::create($request->all());

        return redirect()->route('pages.account')->with('Success', 'Account added successfully.');
    }

    public function show(string $id)
    {
        $account = Account::findOrFail($id);

        return view('pages.account.show', compact('account'));
    }

    public function edit(string $id)
    {
        $account = Account::findOrFail($id);

        return view('pages.account.edit', compact('account'));
    }

    public function update(Request $request, string $id)
    {
        $account = Account::findOrFail($id);

        $account->update($request->all());

        return redirect()->route('pages.account')->with('Success', 'Account updated successfully.');
    }

    public function destroy(string $id)
    {
        $account = Account::findOrFail($id);

        $account->delete();

        return redirect()->route('pages.account')->with('Success', 'Account deleted successfully.');
    }
}
