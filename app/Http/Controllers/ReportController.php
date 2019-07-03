<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    function makeReport(Request $request)
    {
        $userid = $request->get('userid');
        $busname = $request->get('busname');
        $licenseNo = $request->get('licenseno');
        $busCompany = $request->get('company');
        $route = $request->get('route');
        $lat = $request->get('lat');
        $lon = $request->get('lon');

        $report = new Report();
        $report->userid = $userid;
        $report->busname = $busname;
        $report->licenseno = $licenseNo;
        $report->company = $busCompany;
        $report->route = $route;
        $report->lat = $lat;
        $report->lon = $lon;

        $report->save();

        return 'success';


    }

    function getReportsView()
    {
        $reports = Report::with('user')->get();
        return view('reports')->with(['reports'=>$reports->reverse()]);

    }
}
