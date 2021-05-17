<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vacancy;
use Illuminate\Support\Facades\DB;


class JobList extends Component
{
    public function render()
    {
        return view('livewire.job-list',[ 'jobs'=>DB::table('users')
        ->join('recruiters', 'users.id', '=', 'recruiters.user_id')
        ->join('vacancies', 'recruiters.id', '=', 'vacancies.recrutier_id')
        ->select('users.*', 'recruiters.*','vacancies.*')
        ->get()]);
    }
}


