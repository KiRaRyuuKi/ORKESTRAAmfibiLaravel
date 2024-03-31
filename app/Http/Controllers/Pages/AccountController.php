<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\DataTables\AccountDataTable;
use App\Models\Account;

class AccountController extends Controller
{
    // public function index(Request $request) {

    //     if ($request->ajax()) {

	//         $data = Account::all();

	//         return Datatables::of($data)
	// 	        ->addIndexColumn()
	// 	        ->addColumn('action', function($row){
	// 		        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"> View </a>';
	// 		        return $btn;
	// 	    })
    //         ->rowColumns(['action'])
    //         ->make(true);
    //     }
    //     return view('pages.account');
    // }

    // public function index(AccountDataTable $dataTable)
    // {
    //     return $dataTable->render('pages.index');
    // }

    public function generate()
    {
        $pdf = SnappyPDF::loadHTML('<h1>Hello World</h1>');

        return $pdf->download('hello-world.pdf');
    }

    public function account(AccountDataTable $dataTable)
    {
        return $dataTable->render('pages.account');

        // $account = Account::orderBy('created_at', 'DESC')->get();

        // return view('pages.account',compact('account'));
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
