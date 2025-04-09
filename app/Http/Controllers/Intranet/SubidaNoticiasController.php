<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Intranet\Subida\GaleriaRequest;
use App\Http\Requests\Intranet\Subida\NoticiasRequest;
use App\Model\Estado;
use App\Model\GaleriaNoticias;
use App\Model\Noticia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubidaNoticiasController extends Controller
{
    /**
     * @param Noticia $noticia
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Noticia $noticia)
    {
        return view('intranet.subida.portada.noticias', compact('noticia'));
    }


    /**
     * @param NoticiasRequest $request
     * @param Noticia         $noticia
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postnoticia(NoticiasRequest $request, Noticia $noticia)
    {

        if ($request->hasFile('inputFile')){

            // Captura la extensión del archivo
            $extension = $request->file('inputFile')->getClientOriginalExtension();

            // Ubicacion del archivo a subir
            $path = 'assets/media/noticias/portada/';

            // Nombre final del archivo
            $fullfile = $noticia->id_noticia . '.' . $extension;

            // Subida del archivo
            $file = $request->file('inputFile')->move($path, $fullfile);
        }

        if ( $file ) {
            $update = ['portada_noticia' => ( $fullfile )];
            $actualizar = $noticia->fill($update)->save();
        }

        if ( $actualizar ) {
            session()->flash('message', ['Imagen subida correctamente.']);
            return redirect()->route('intranet.noticias.index', ['noticia' => $noticia->id_noticia]);
        }

        session()->flash('message', ['Se produjo un error subiendo la imagen.']);
        return redirect()->route('intranet.noticias.index', ['noticia' => $noticia->id_noticia]);
    }


    /**
     * @param Noticia $noticia
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexGaleria(Noticia $noticia)
    {
        return view('intranet.subida.galeria.index', compact('noticia'));
    }


    public function storeGaleria(GaleriaRequest $request, Noticia $noticia)
    {
//        dd(count($request->file('inputFile')));

        $cuenta = GaleriaNoticias::where('id_noticia', $noticia->id_noticia)
                                    ->get()
                                    ->count();


        // Ubicacion del archivo a subir
        $path = 'assets/media/noticias/galeria/' . $noticia->id_noticia. '/';

        if ( count( $request->file('inputFile') ) === 0 ) {
            session()->flash('message', ['Se produjo un error subiendo la imagen.']);
            return redirect()->route('intranet.noticias.indexgaleria', ['noticia' => $noticia->id_noticia]);
        }

        foreach ( $request->file('inputFile') as $file )
        {
            // Captura la extensión del archivo
            $extension = $file->getClientOriginalExtension();

            // Nombre final del archivo
            $fullfile = "Noticia_img_" . ( $cuenta + 1 ) . "." . $extension;

            // Subida del archivo
            $fileUpload = $file->move($path, $fullfile);

            if ( $fileUpload ) {

                GaleriaNoticias::create([
                    'id_noticia'        => $noticia->id_noticia,
                    'id_estado'         => Estado::ACTIVO,
                    'imagen_galerianot' => $noticia->id_noticia . "/" . $fullfile,
                ]);

            } else {
                session()->flash('message', ['Se produjo un error subiendo la imagen.']);
                return redirect()->route('intranet.noticias.indexgaleria', ['noticia' => $noticia->id_noticia]);
            }

            $cuenta++;
        }

        if ( count($request->file('inputFile') ) > 0 ) {
            $mensaje = "Se han publicado " . count($request->file('inputFile')) . " imágenes.";
        } else {
            $mensaje = "Se ha publicado la imagen.";
        }

        session()->flash('message', [$mensaje]);
        return redirect()->route('intranet.noticias.indexgaleria', ['noticia' => $noticia->id_noticia]);

    }
}
