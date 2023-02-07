<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // DQ Section \\
    public function dq()
    {
        return view('DQ.index');
    }
    public function createDq()
    {
        return view('DQ.create');
    }

    // IQ Section \\
    public function iq()
    {
        return view('IQ.index');
    }

    // PQ Section \\
    public function pq()
    {
        return view('PQ.index');
    }

    // PV Section \\
    public function pv()
    {
        return view('PV.index');
    }

    // OQ Section \\
    public function oq()
    {
        return view('OQ.index');
    }

    // RV Section \\
    public function rv()
    {
        return view('RV.index');
    }

    // FAT Section \\
    public function fat()
    {
        return view('FAT.index');
    }

    // FR Section \\
    public function fr()
    {
        return view('FR.index');
    }

    // MS Section \\
    public function ms()
    {
        return view('MS.index');
    }

    // PS Section \\
    public function ps()
    {
        return view('PS.index');
    }

    // QS Section \\
    public function qs()
    {
        return view('QS.index');
    }

    // ST Section \\
    public function st()
    {
        return view('ST.index');
    }

    // SOP Section \\
    public function sop()
    {
        return view('SOP.index');
    }
}
