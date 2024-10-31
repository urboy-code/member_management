<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MembersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $filter;

    public function __construct($filter)
    {
        $this->filter = $filter;
    }
    public function collection()
    {
        return Member::all();
    }

    public function headings(): array
    {
        return ['Nama', 'NIK', 'No. HP', 'Tanggal Mendaftar'];
    }
}
