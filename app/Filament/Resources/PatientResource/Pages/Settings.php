<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Models\Patient;
use Filament\Resources\Pages\Page;
use App\Filament\Resources\PatientResource;

class Settings extends Page
{
    protected static string $resource = PatientResource::class;

    protected static string $view = 'filament.resources.patient-resource.pages.settings';

    public Patient $patient;

    public function mount($record)
    {
        $this->patient = Patient::findOrFail($record);
    }
}
