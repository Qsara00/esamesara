<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller

{
    public function list() {
        return Platform::all();
    }

    public function detail($id) {
        $platform = Platform::where('id', $id)->first();
        return $platform;
    }

    public function create(Request $request) {
        $newPlatformData = json_decode($request->getContent());

        $platform = new Platform();

        $platform->comune = $newPlatformData->comune;
        $platform->foto = $newPlatformData->foto;
        $platform->dimensione = $newPlatformData->dimensione;
        $platform->fogliocatasto = $newPlatformData->fogliocatasto;
        $platform->mappacatasto = $newPlatformData->mappacatasto;
        $platform->parcellacatasto = $newPlatformData->parcellacatasto;
        $platform->terreno = $newPlatformData->terreno;
        $platform->irrigazione = $newPlatformData->irrigazione;
        $platform->offerta = $newPlatformData->offerta;
        $platform->canoneofferta = $newPlatformData->canoneofferta;
        $platform->disponibilita = $newPlatformData->disponibilita;

        $platform->save();
        return response()->json($platform, 201);
    }

    public function edit(Request $request, $id) {
        $platform = Platform::find($id);

        $newPlatformData = json_decode($request->getContent());

        $platform->comune = $newPlatformData->comune;
        $platform->foto = $newPlatformData->foto;
        $platform->dimensione = $newPlatformData->dimensione;
        $platform->fogliocatasto = $newPlatformData->fogliocatasto;
        $platform->mappacatasto = $newPlatformData->mappacatasto;
        $platform->parcellacatasto = $newPlatformData->parcellacatasto;
        $platform->terreno = $newPlatformData->terreno;
        $platform->irrigazione = $newPlatformData->irrigazione;
        $platform->offerta = $newPlatformData->offerta;
        $platform->canoneofferta = $newPlatformData->canoneofferta;
        $platform->disponibilita = $newPlatformData->disponibilita;

        $platform->save();
        return response()->json($platform, 200);
    }

    public function delete($id) {
        $platform = Platform::where('id', $id)->delete();

        return $platform;
    }
}
