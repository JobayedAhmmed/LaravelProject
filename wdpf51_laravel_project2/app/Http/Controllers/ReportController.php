<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    // public function Report1()
    // {

    //     // $data = DB::table('products')->get();

    //     $data = DB::table('products')->where('product_category', 3)->get();

    //     echo "<pre>";

    //     print_r($data);
    // }
    public function Report1()
    {

        // $data = DB::table('products')->get();


        #############Report 1

        // $data = DB::table('offices')->where('country', 'USA')->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);

        // return view("reports.report1", compact('data'));

        ###############Report 2

        // $data = DB::table('employees')->where('officeCode', 3)->get();

        // echo "<pre>";

        // print_r($data);

        ###############Report 3

        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3])->get();

        // echo "<pre>";

        // print_r($data);

        ###############Report 4

        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3])->where('jobTitle', 'Sales Rep')->get();

        // echo "<pre>";

        // print_r($data);

        ###############Report 5

        // $data = DB::table('employees')->select(DB::raw('CONCAT(lastName," ",firstName) AS fullname'), 'email', 'jobTitle')->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);

        ###############Report 6

        // $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'), 'jobTitle')->groupBy('jobTitle')->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);


        ###############Report 8

        // $data = DB::table('employees')->whereBetween('officeCode', [1, 3])->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);

        ###############Report 9

        // $data = DB::table('employees')->join('offices', 'employees.officeCode', '=', 'offices.officeCode')->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);


        // ###############Report 7

        // $data = DB::table('employees')->where('officeCode',3)->orWhere('officeCode',5')->get();

        // echo $data->count();

        // echo "<pre>";

        // print_r($data);


    }
}
