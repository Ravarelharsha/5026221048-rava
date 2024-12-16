<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandphoneController extends Controller
{
    // Method to list data with search and pagination
    public function index(Request $request)
    {
        // Capture search and pagination parameters
        $cari = $request->cari;
        $pagination = $request->query('pagination', 10);

        // Fetch data based on search input or default query
        $handphone = DB::table('handphone')
            ->when($cari, function ($query, $cari) {
                return $query->where('handphone_nama', 'like', "%" . $cari . "%");
            })
            ->paginate($pagination);

        // Send data to the view
        return view('datahandphone', ['handphone' => $handphone]);
    }

    // Method to show form for adding a new handphone
    public function tambah()
    {
        return view('tambahhandphone'); // No data is passed since this is just a form
    }

    // Method to insert data into the handphone table
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'handphone_nama' => 'required|string|max:255',
            'handphone_jumlah' => 'required|integer|min:0',
            'handphone_tersedia' => 'required|in:Y,N',
        ]);

        // Insert data into the table
        DB::table('handphone')->insert([
            'handphone_nama' => $validatedData['handphone_nama'],
            'handphone_jumlah' => $validatedData['handphone_jumlah'],
            'handphone_tersedia' => $validatedData['handphone_tersedia']
        ]);

        // Redirect back to the handphone listing
        return redirect('/handphone')->with('success', 'Handphone berhasil ditambahkan.');
    }

    // Method to show edit form for a specific handphone
    public function editGet($id)
    {
        // Fetch data for the given handphone ID
        $handphone = DB::table('handphone')->where('handphone_id', $id)->first();

        // Check if handphone exists
        if (!$handphone) {
            return redirect('/handphone')->with('error', 'Data handphone tidak ditemukan.');
        }

        // Pass data to the edit view
        return view('edithandphone', ['handphone' => $handphone]);
    }

    // Method to update handphone data
    public function editPost(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'handphone_nama' => 'required|string|max:255',
            'handphone_jumlah' => 'required|integer|min:0',
            'handphone_tersedia' => 'required|in:Y,N',
        ]);

        // Update the handphone data in the table
        DB::table('handphone')->where('handphone_id', $id)->update([
            'handphone_nama' => $validatedData['handphone_nama'],
            'handphone_jumlah' => $validatedData['handphone_jumlah'],
            'handphone_tersedia' => $validatedData['handphone_tersedia']
        ]);

        // Redirect back to the handphone listing
        return redirect('/handphone')->with('success', 'Handphone berhasil diperbarui.');
    }

    // Method to toggle 'tersedia' status
    public function updateTersedia(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'handphone_tersedia' => 'required|in:Y,N',
        ]);

        // Update the 'tersedia' field in the database
        DB::table('handphone')
            ->where('handphone_id', $id)
            ->update(['handphone_tersedia' => $validated['tersedia']]);

        // Redirect back with a success message
        return redirect('/handphone')->with('success', 'Status Tersedia berhasil diubah.');
    }

    // Method to delete handphone data
    public function delete($id)
    {
        // Delete the handphone record
        DB::table('handphone')->where('handphone_id', $id)->delete();

        // Redirect back to the handphone listing
        return redirect('/handphone')->with('success', 'Handphone berhasil dihapus.');
    }
}
