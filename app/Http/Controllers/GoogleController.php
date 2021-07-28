<?php 
namespace App\Http\Controllers;

use Analytics;
use Spatie\Analytics\Period;

class GoogleController extends Controller 
{
    public function index()
    {
        $analyticsData = Analytics::fetchMostVisitedPages(Period::days(1));
        return view('welcome', compact('analyticsData'));
    }
}