<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Artikel;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = Setting::all();
        $berita = Artikel::orderBy('created_at', 'desc')->limit(3)->get();
        $testimoni = Testimoni::orderBy('created_at', 'desc')->limit(9)->get();

        return view('front.index',compact('data','berita','testimoni'));
    }

    public function about(){

        $data = Setting::all();

        return view('front.about',compact('data'));
    }

    public function saldo(){

        $data = Setting::all();

        return view('front.saldo',compact('data'));;
    }

    public function getURL()
    {
        $data = Setting::all();

        $urls = [
            'webReport' => '',
            'linkApk' => '',
            'popUpWa' => '',
            'csWa' => '',
            'csTelegram' => '',
            'centerWa1' => '',
            'centerWa2' => '',
            'centerWa3' => '',
        ];

        foreach ($data as $item) {
            if ($item->nama_field == 'Url Web Report') {
                $urls['webReport'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Link Apk') {
                $urls['linkApk'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Pop Up Wa') {
                $urls['popUpWa'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Cs Wa') {
                $urls['csWa'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Cs Telegram') {
                $urls['csTelegram'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 1') {
                $urls['centerWa1'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 2') {
                $urls['centerWa2'] = $item->nilai_field;
            } else if ($item->nama_field == 'Url Center Wa 3') {
                $urls['centerWa3'] = $item->nilai_field;
            }
        }

        return response()->json($urls);
    }

    public function GetDetailArtikel($slug)
    {
        $data = Setting::all();

        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        $current_artikel = Artikel::orderBy('created_at', 'desc')->get();

        return view('front.blog_details', compact('artikel','data','current_artikel'));
    }


}
