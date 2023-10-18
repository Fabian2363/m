public function store(Request $request)
{
    $data = $request->all();

    $info_persona = null;
    if (\App\personas::find($data->persona_id)->estado_contrato == 1) {
        $info_persona = new contrato();
    } else {
        $info_persona = contrato::where('persona_id', $data->persona_id)->first();
    }

    if (isset($data['documento_pdf'])) {
        if (isset($info_persona->docomento_pdf)) {
            Storage::delete($info_persona->docomento_pdf); //elimiar documento
        }

        $file = $request->file('file');

        if ($file) {
            $filename = $file->getClientOriginalName();
            $foo = \File::extension($filename);
            if ($foo == 'pdf') {
                $route_file = $code . DIRECTORY_SEPARATOR . date('Ymdhmi') . '.' . $foo;
                Storage::disk('public')->put($route_file, \File::get($file));
                $info_persona->docomento_pdf = $route_file;
            }
        }
    }

    $info_persona->save();

    return redirect()->route('contratos.index');
}