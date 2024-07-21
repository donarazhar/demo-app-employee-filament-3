<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Patient;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {
        $patient = Patient::findOrFail($request->patient_id);
        $invoice = new Invoice();
        $invoice->patient_id = $patient->id;
        $invoice->owner_name = $patient->owner->name;
        $invoice->total_amount = $patient->treatments->sum('price');
        $invoice->save();

        return redirect()->route('filament.admin.resources.patients.index');
    }
}
