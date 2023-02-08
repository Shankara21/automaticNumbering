<?php

namespace App\Http\Controllers;

use App\Models\mst_category;
use App\Models\mst_document;
use App\Models\mst_section;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // DQ Section \\
    public function dq()
    {
        $listDocument = mst_document::where('category_id', 1)->get();
        return view('DQ.index', compact('listDocument'));
    }
    public function createDq()
    {
        $section = mst_section::all();
        return view('DQ.create', compact('section'));
    }
    public function storeDq(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // IQ Section \\
    public function iq()
    {
         $listDocument = mst_document::where('category_id', 2)->get();
        return view('IQ.index', compact('listDocument'));
    }
    public function createIq()
    {
        $section = mst_section::all();
        return view('IQ.create', compact('section'));
    }
    public function storeIq(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // PQ Section \\
    public function pq()
    {
         $listDocument = mst_document::where('category_id', 3)->get();
        return view('PQ.index', compact('listDocument'));
    }
    public function createPq()
    {
        $section = mst_section::all();
        return view('PQ.create', compact('section'));
    }
    public function storePq(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // PV Section \\
    public function pv()
    {
         $listDocument = mst_document::where('category_id', 4)->get();
        return view('PV.index', compact('listDocument'));
    }
    public function createPv()
    {
        $section = mst_section::all();
        return view('PV.create', compact('section'));
    }
    public function storePv(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // OQ Section \\
    public function oq()
    {
         $listDocument = mst_document::where('category_id', 5)->get();
        return view('OQ.index', compact('listDocument'));
    }
    public function createOq()
    {
        $section = mst_section::all();
        return view('OQ.create', compact('section'));
    }
    public function storeOq(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // RV Section \\
    public function rv()
    {
         $listDocument = mst_document::where('category_id', 6)->get();
        return view('RV.index', compact('listDocument'));
    }
    public function createRv()
    {
        $section = mst_section::all();
        return view('RV.create', compact('section'));
    }
    public function storeRv(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // FAT Section \\
    public function fat()
    {
         $listDocument = mst_document::where('category_id', 7)->get();
        return view('FAT.index', compact('listDocument'));
    }
    public function createFat()
    {
        $section = mst_section::all();
        return view('FAT.create', compact('section'));
    }
    public function storeFat(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // FR Section \\
    public function fr()
    {
         $listDocument = mst_document::where('category_id', 8)->get();
        return view('FR.index', compact('listDocument'));
    }
    public function createFr()
    {
        $section = mst_section::all();
        return view('FR.create', compact('section'));
    }
    public function storeFr(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // MS Section \\
    public function ms()
    {
         $listDocument = mst_document::where('category_id', 9)->get();
        return view('MS.index', compact('listDocument'));
    }
    public function createMs()
    {
        $section = mst_section::all();
        return view('MS.create', compact('section'));
    }
    public function storeMs(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // PS Section \\
    public function ps()
    {
         $listDocument = mst_document::where('category_id', 10)->get();
        return view('PS.index', compact('listDocument'));
    }
    public function createPs()
    {
        $section = mst_section::all();
        return view('PS.create', compact('section'));
    }
    public function storePs(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // QS Section \\
    public function qs()
    {
         $listDocument = mst_document::where('category_id', 11)->get();
        return view('QS.index', compact('listDocument'));
    }
    public function createQs()
    {
        $section = mst_section::all();
        return view('QS.create', compact('section'));
    }
    public function storeQs(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // ST Section \\
    public function st()
    {
         $listDocument = mst_document::where('category_id', 12)->get();
        return view('ST.index', compact('listDocument'));
    }
    public function createSt()
    {
        $section = mst_section::all();
        return view('ST.create', compact('section'));
    }
    public function storeSt(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }

    // SOP Section \\
    public function sop()
    {
         $listDocument = mst_document::where('category_id', 13)->get();
        return view('SOP.index', compact('listDocument'));
    }
    public function createSop()
    {
        $section = mst_section::all();
        return view('SOP.create', compact('section'));
    }
    public function storeSop(Request $request)
    {
        $validateData = $request->validate([
            'project' => 'required',
            'category_id' => 'required',
            'line' => 'required',
            'PIC' => 'required',
            'status' => 'required'
        ]);
        $category = mst_category::where('id', $validateData['category_id'])->first();
        $listDoc = mst_document::where('category_id', $validateData['category_id'])->orderBy('created_at', 'desc')->first();
        // Mengambil tahun sekarang
        $tahun = substr(date('Y'), 2);
        if ($listDoc == null) {
            $validateData['format_document'] = '001/' . 'K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id < 10) {
            $validateData['format_document'] = '00' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        } elseif ($listDoc->id >= 10) {
            $validateData['format_document'] = '0' . $listDoc->id + 1 . '/K/' . 'TD-' . $request->section . '/' . $category->name . '/' . $tahun;
        }
        mst_document::create($validateData);
        return redirect()->route('dq');
    }
}
