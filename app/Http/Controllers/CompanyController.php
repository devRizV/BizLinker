<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View as ViewView;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::where('user_id', Auth::user()->id)->get();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_title' => 'required|string|max:255',
            'company_meta_title' => 'nullable|string|max:255',
            'mobile_no' => 'required|string|max:15|unique:companies,mobile_no',
            'email' => 'required|string|email|max:255|unique:companies,email',
            'domain' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'company_type' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);
        
        // dd($validated);

        $request->user()->companies()->create($validated);

        return redirect()->back()->with('success', 'Company has be listed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'company_title' => 'required|string|max:255',
            'company_meta_title' => 'nullable|string|max:255',
            'mobile_no' => 'required|string|max:15|unique:companies,mobile_no' . $company->id,
            'email' => 'required|string|email|max:255|unique:companies,email' . $company->id,
            'domain' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'company_type' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $company->update($validated);
        
        return redirect()->back()->with('success', 'Company details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->back()->with('success', 'Company details deleted successfully.');
    }

    public function search(Request $request) {
        $startTime = microtime(true);

        $validator = Validator::make($request->all(), [
            'query' => "required|string|max:500",
        ], [
            'query.required' => "Search can't be empty!!!",
            'query.string' => "Invalid Search",
            'query.max' => "Query is too long",
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $searchQuery = $validator->validated()['query'];


        $searchByName = $request->input('searchByName');
        $searchByAddress = $request->input('searchByAddress');
        $searchByDomain = $request->input('searchByDomain');
        $searchByPhoneNo = $request->input('searchByPhoneNo');

        $searchResults = [];
        $query = '%' . $searchQuery . '%'; // Prepare the query string once

        $searchOptions = [
            'searchByName' => 'company_title',
            'searchByAddress' => 'address',
            'searchByDomain' => 'domain',
            'searchByPhoneNo' => 'mobile_no'
        ];

        $searchPerformed = false;

        foreach ($searchOptions as $searchOption => $column) {
            if ($$searchOption) {
                $searchResults[$searchOption] = Company::where($column, 'like', $query)->get();
                $searchPerformed = true;
            }
        }

        // Fallback to search by name if no specific search type is selected
        if (!$searchPerformed) {
            $searchResults['resultsByName'] = Company::where('company_title', 'like', $query)->get();
        }

        $endTime = microtime(true);
        $executionTime = round($endTime - $startTime, 4);

        return view('company.searchResults', compact('searchResults', 'executionTime', 'searchQuery'));
    }
}
