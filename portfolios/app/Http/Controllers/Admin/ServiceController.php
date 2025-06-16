<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
<<<<<<< Updated upstream
    public function index (Request $request)
=======
    public function index(Request $request)
>>>>>>> Stashed changes
    {

        $query = auth()->user()->services();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $services = $query->paginate(10);

        return view('backoffice.services.index', compact('services'));
    }

<<<<<<< Updated upstream
    public function create ()
=======
    public function create()
>>>>>>> Stashed changes
    {
        $user = auth()->user();
        return view('backoffice.services.create', compact('user'));
    }

<<<<<<< Updated upstream
    public function store (Request $request)
=======
    public function store(Request $request)
>>>>>>> Stashed changes
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'user_id' => 'required|exists:users,id',
        ]);

        Service::create($request->all());
        return redirect()->route('services.index')->with('success', 'Service ajouté avec succès.');
    }

<<<<<<< Updated upstream
    public function edit (string $id)
=======
    public function edit(string $id)
>>>>>>> Stashed changes
    {
        $service = Service::findOrFail($id);
        return view('backoffice.services.edit', compact('service'));
    }

<<<<<<< Updated upstream
    public function update (Request $request, string $id)
=======
    public function update(Request $request, string $id)
>>>>>>> Stashed changes
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
    }

<<<<<<< Updated upstream
    public function destroy (string $id)
=======
    public function destroy(string $id)
>>>>>>> Stashed changes
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
    }
}
