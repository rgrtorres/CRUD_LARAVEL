<?php

namespace App\Http\Controllers;

use App\Models\ContainerModel;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function show()
    {
        $containers = ContainerModel::orderBy('id', 'DESC')->get();
        $vars = [
            'containers' => $containers
        ];
        return view('containers', compact('vars'));
    }

    public function create() {
        return view('forms.add_container');
    }

    public function edit(Request $request) {
        $oldContainer = ContainerModel::where('id', $request->id)->get();
        $vars = [
            'oldContainer' => $oldContainer
        ];
        return view('forms.edit_container', compact('vars'));
    }

    public function update(Request $request) {
        $container = ContainerModel::find($request->id);

        $container->nome = $request->nome;
        $container->tipo = $request->tipo;
        $container->status = $request->status;
        $container->categoria = $request->categoria;

        $container->save();

        return redirect()->route('container');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required | max:11',
            'tipo' => 'required',
            'status' => 'required',
            'categoria' => 'required',
        ]);

        $container = new ContainerModel();

        $container->nome = $request->nome;
        $container->tipo = $request->tipo;
        $container->status = $request->status;
        $container->categoria = $request->categoria;

        $container->save();

        return redirect()->route('container');
    }

    public function destroy(Request $request) {
        $apagar = ContainerModel::find($request->id);
        $apagar->delete();
        return redirect()->route('container');
    }
}
