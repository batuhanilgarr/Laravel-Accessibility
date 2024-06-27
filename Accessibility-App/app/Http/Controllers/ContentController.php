<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Script;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'script_id' => 'required|exists:scripts,id', // scripts tablosunda geçerli bir ID olduğundan emin olun
        ]);

        // Content modelini oluştururken script_id alanını belirtiyoruz
        $content = new Content();
        $content->name = $validated['name'];
        $content->script_id = $validated['script_id'];
        $content->save();

        // Başka işlemler...

        return redirect()->route('content.index'); // Örneğin, içerik listesi sayfasına yönlendirme yapabilirsiniz
    }
}
