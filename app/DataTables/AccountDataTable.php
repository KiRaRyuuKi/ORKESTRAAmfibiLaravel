<?php

namespace App\DataTables;

use App\Models\Account;
use Barryvdh\Snappy\Facades\SnappyPdf as SnappyPDF;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AccountDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($row) {
                $action =
                    '<a href="' . url('pages/account/' .$row->id. '/show') . '" type="button" class="btn btn-primary"><i class="bi bi-card-text"></i></a>
                     <a href="' . url('pages/account/' .$row->id. '/edit') . '" type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                     <form action="' . url('pages/account/' .$row->id. '/destroy') . '" method="POST" class="btn btn-dark p-0" onsubmit="return confirm(\'Delete?\')">
                        ' . csrf_field() . '
                        ' . method_field("DELETE") . '
                        <button class="btn btn-dark m-0"><i class="bi bi-trash"></i></button>
                     </form>';

                return $action;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Account $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    -> autoWidth (false)
                    ->setTableId('account-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload'),
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('address'),
            Column::make('telephone'),
            Column::make('picture'),
            Column::make('updated_at'),
            Column::computed('action'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Account_' . date('YmdHis');
    }
}
