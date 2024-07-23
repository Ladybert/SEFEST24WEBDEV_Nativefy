<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Tipe;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $services = Service::where('user_id', Auth::id())
            ->when($search, function ($query, $search) {
                return $query->where('service_name', 'like', "%{$search}%")
                             ->orWhere('service_desc', 'like', "%{$search}%");
            })
            ->with(['tipe', 'kategori'])
            ->paginate(10);

        return view('admin.index', compact('services'));
    }

    public function create()
    {
        $tipes = Tipe::all();
        $kategoris = Kategori::all();
        return view('admin.create', compact('tipes', 'kategoris'));
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'service_desc' => 'required|string',
        'tipe_id' => 'required|exists:tipes,id',
        'kategori_id' => 'required|exists:kategoris,id',
        'price' => 'required|numeric',
    ]);

    // Prepare input data
    $input = $request->all();
    $input['user_id'] = 1; // Set the user ID to 1

    // Handle file upload if a new photo is provided
    if ($request->hasFile('service_photo')) {
        $service_photo = $request->file('service_photo');
        $photoName = time() . '_' . $service_photo->getClientOriginalName();
        $service_photo->storeAs('public/images', $photoName);
        $input['service_photo'] = 'images/' . $photoName;
    }

    // Create a new service
    Service::create($input);

    // Redirect with a success message
    return redirect()->route('admin.index')->with('success', 'Service created successfully.');
}


    public function show(Service $service)
{
    // Check if the service belongs to user ID 1
    if ($service->user_id !== 1) {
        abort(403, 'Unauthorized access');
    }

    return view('admin.show', compact('service'));
}


    public function edit(Service $service)
    {
        // Check if the service belongs to the authenticated user
        if ($service->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access');
        }

        $tipes = Tipe::all();
        $kategoris = Kategori::all();
        return view('admin.edit', compact('service', 'tipes', 'kategoris'));
    }

    public function update(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'service_desc' => 'required|string',
        'tipe_id' => 'required|exists:tipes,id',
        'kategori_id' => 'required|exists:kategoris,id',
        'price' => 'required|numeric',
    ]);

    // Find the service by its ID
    $service = Service::findOrFail($id);

    // Check if the service belongs to user ID 1
    if ($service->user_id !== 1) {
        abort(403, 'Unauthorized access');
    }

    // Prepare input data
    $input = $request->all();

    // Handle file upload if a new photo is provided
    if ($request->hasFile('service_photo')) {
        // Delete old photo if it exists
        if ($service->service_photo) {
            $oldPhotoPath = public_path('storage/' . $service->service_photo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        // Upload the new photo
        $service_photo = $request->file('service_photo');
        $photoName = time() . '_' . $service_photo->getClientOriginalName();
        $service_photo->storeAs('public/images', $photoName);
        $input['service_photo'] = 'images/' . $photoName;
    }

    // Update the service
    $service->update($input);

    // Redirect with a success message
    return redirect()->route('admin.index')->with('success', 'Service updated successfully.');
}


    public function destroy($id)
    {
        // Find the service by its ID
        $service = Service::findOrFail($id);

        // Check if the service belongs to the authenticated user
        if ($service->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access');
        }

        // Delete the photo if it exists
        if ($service->service_photo) {
            $oldPhotoPath = public_path('storage/' . $service->service_photo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        // Delete the service
        $service->delete();

        // Redirect with a success message
        return redirect()->route('admin.index')->with('success', 'Service deleted successfully.');
    }
}
