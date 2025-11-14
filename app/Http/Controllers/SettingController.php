<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Setting;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SettingController extends Controller
{
    public function index()
    {

        $data = Setting::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.setting',
                compact('data')
            );
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:setting,id',
            'nilai_field' => 'required|string',
        ]);

        $setting = Setting::findOrFail($validated['id']);
        $setting->nilai_field = $validated['nilai_field'];
        $setting->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }

    public function artikel()
    {

        $data = Artikel::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.article',
                compact('data')
            );
    }

    public function tambah_artikel()
    {

        $data = Artikel::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.tambah_article',
                compact('data')
            );
    }

    public function store_artikel(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'save_action' => 'required'
        ]);

        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;
        $counter = 1;

        while (Artikel::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        // upload image
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = $slug . '.' . $extension;
        $request->file('image')->move(public_path('berita'), $fileName);

        // simpan ke DB
        $berita = new Artikel();
        $berita->title = $validated['title'];
        $berita->slug = $slug;
        $berita->content = $validated['content'];
        $berita->image = $fileName;
        $berita->status = $validated['save_action'];
        $berita->user_id = 1;
        $berita->save();

        return redirect()->route('artikel')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit_artikel()
    {

        $data = Artikel::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.edit_article',
                compact('data')
            );
    }

    public function artikel_edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('backoffice.edit_article', compact('artikel'));
    }

    public function artikel_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->title = $request->title;
        $artikel->content = $request->content;
        $artikel->status = $request->save_action;

        // Upload gambar baru jika ada
        if ($request->hasFile('image')) {

            // Hapus file lama
            if ($artikel->image && file_exists(public_path('uploads/berita/'.$artikel->image))) {
                unlink(public_path('uploads/berita/'.$artikel->image));
            }

            $file = $request->file('image');
            $filename = 'berita_' . $artikel->id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/berita'), $filename);

            $artikel->image = $filename;
        }

        $artikel->save();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function artikel_delete($id)
    {
        $data = Artikel::findOrFail($id);

        if ($data->image && file_exists(public_path('uploads/berita/'.$data->image))) {
            unlink(public_path('uploads/berita/'.$data->image));
        }

        $data->delete();

        return back()->with('success', 'Artikel berhasil dihapus');
    }

    public function testimoni()
    {
        $data = Testimoni::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.testimoni',
                compact('data')
            );
    }

    public function tambah_testimoni()
    {

        $data = Testimoni::orderBy('id', 'asc')->get();
        return
            view(
                'backoffice.tambah_testimoni',
                compact('data')
            );
    }

    public function store_testimoni(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required',
            'pekerjaan' => 'required',
            'caption' => 'required',
            'rating' => 'required|numeric|min:1|max:5',

        ]);

        Testimoni::create([
            'namalengkap' => $request->namalengkap,
            'pekerjaan'   => $request->pekerjaan,
            'caption'     => $request->caption,
            'rating'      => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan.');
    }

}
