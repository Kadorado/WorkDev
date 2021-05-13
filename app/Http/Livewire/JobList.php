<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacancy;

class JobList extends Component
{
    public function render()
    {
        return view('livewire.job-list',[ 'jobs'=>Vacancy::latest()->with('recrutier')->take(8)->get()]);
    }
}
