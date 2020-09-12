<?php

namespace App\DataTables;

use App\Models\Venda;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VendaDataTable extends DataTable
{
    public function dataTable($query)
    {
        return dataTables()
        
    }
    
}