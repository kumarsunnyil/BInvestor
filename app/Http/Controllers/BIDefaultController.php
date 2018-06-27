<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class BIDefaultController extends Controller
{
    public function getDefaultHome()
    {
        return view('bi.index');
    }

    /**
     * Overview of the application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOverview()
    {

        /**
         * Overview
         */
        $companies = CompanyStock::all();

        return view('bi.overview', [
            'companies' => $companies,
        ]);
    }

    /**
     * List all the Companies
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getClist()
    {
        $companies = CompanyStock::all();

        return view('bi.clist', [
            'companies' => $companies,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function getAddToList()
    {
        return view('bi.addlist');
    }

    public function postAddToList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|min:5|max:35',
            'company_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('company/add-to-listing')
                ->withErrors($validator)
                ->withInput();
        }

        $company = new Company();
        $company->name = $request->input('company_name');
        $company->save();

        $companyStock = new CompanyStock();
        $companyStock->name = $request->input('company_name');
        $companyStock->stock_id = ($request->input('stocktype') == 'preferred_stock') ? 1 : 2;
        $companyStock->price = $request->input('price');
        $companyStock->companies_id = $company->id;
        $companyStock->currency = '$';
        $companyStock->cities_id = $request->input('price');

        if ($companyStock->save()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Company Name Added successfully !');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error! While adding');
        }

        return redirect('/company/add-to-listing');

    }


    public function getMarketOverview()
    {
        return view('bi.marketoverview');
    }
}
