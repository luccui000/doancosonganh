<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class BieuDoController extends Controller
{
    public function index()
    {  
        $lava = new Lavacharts; // See note below for Laravel

        $finances = $lava->DataTable();

        $finances->addDateColumn('Year')
                ->addNumberColumn('Sales')
                ->addNumberColumn('Expenses')
                ->setDateTimeFormat('m')
                ->addRow(['4', 1000, 400]) ;

        $lava->ColumnChart('Finances', $finances, [
            'title' => 'Company Performance',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);
        return view('admin.bieudo.index', [
            'lava' => $lava
        ]);
    }
}
