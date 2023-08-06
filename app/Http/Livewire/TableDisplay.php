<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class TableDisplay extends Component
{
    public $showTable = false;
    public $users;

    public function toggleTable()
    {
        $this->showTable = !$this->showTable;
        if ($this->showTable) {
            $this->users = User::all();
        }
    }
    public function render()
    {
        return view('livewire.table-display');
    }
}
