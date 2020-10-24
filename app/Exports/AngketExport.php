<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;

class AngketExport implements FromView, ShouldAutoSize, WithEvents
{
    protected $angket;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(Collection $angket)
    {
        $this->angket = $angket;
    }

    public function view() : View
    {
        return view('angket.xls', [
            'data' => $this->angket
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
                $event->sheet->getStyle('A1:O2')->getAlignment()->applyFromArray([
                    'horizontal' => 'center'
                ]);
            }
        ];
    }

}
