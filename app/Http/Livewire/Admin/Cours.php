<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cour;
use Livewire\Component;
use Livewire\WithPagination;

class Cours extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Cours";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    public function render()
    {
        return view('livewire.admin.cours.index',[
            'cours' => Cour::latest()->paginate(10),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
}
