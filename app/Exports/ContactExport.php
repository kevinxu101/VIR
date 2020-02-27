<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;

class ContactExport implements FromQuery, WithTitle
{
    private $subject;
    private $year;

    public function __construct(int $year, string $subject)
    {
        $this->subject = $subject;

    }

    
    public function query()
    {
        return Contact
            ::query()
            ->wheresubjects('subjects', $this->subject);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Subject ' . $this->subject;
    }
    public function download() 
{
    return (new InvoicesExport("webdev"))->download('invoices.xlsx');
}
}
      

