<?php

namespace App\Livewire\Superadmin\Merit;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paginate = 10;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = [
            'employee' => Employee::where(function ($sql) {
                $sql->where('nik', 'like', '%' . $this->search . '%')
                    ->orWhere('namalengkap', 'like', '%' . $this->search . '%')
                    ->orWhere('deptcode', 'like', '%' . $this->search . '%')
                    ->orWhere('deptdesc', 'like', '%' . $this->search . '%');
            })
                ->whereNotNull('jabdesc')
                ->whereRaw("TRIM(jabdesc) != ''")
                ->orderBy('deptdesc', 'asc')
                ->paginate($this->paginate),
        ];

        return view('livewire.superadmin.merit.index', $data);
    }
}
