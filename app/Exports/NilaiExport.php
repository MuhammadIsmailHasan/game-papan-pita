<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiExport implements FromView, ShouldAutoSize, WithEvents
{
    protected $nilai;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct(Collection $nilai)
    {
        $this->nilai = $nilai;
    }

    public function view() : View
    {
        return view('nilai.xls', [
            'data' => $this->nilai
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:O1')->getAlignment()->setWrapText(true);
                $event->sheet->getStyle('A1:O1')->getAlignment()->applyFromArray([
                    'vertical' => 'center'
                ]);
                $event->sheet->getStyle('D1:O1')->getAlignment()->applyFromArray([
                    'horizontal' => 'center'
                ]);
            }
        ];
    }
}
