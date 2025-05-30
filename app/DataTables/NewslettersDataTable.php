<?php

namespace App\DataTables;

use App\Models\Newsletter;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NewslettersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<Newsletter> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                // $edit = "<a href='".route('admin.newsletters.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.newsletters.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $delete;
            })
            ->addColumn('created_at', function ($query) {
                return $query->created_at->format('d M Y');
            })
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<Newsletter>
     */
    public function query(Newsletter $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('newsletters-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    // ->dom('Bfrtip') // Add this line for showing the buttons
                    ->orderBy(1)
                    ->selectStyleSingle();
                    // ->buttons([
                    //     // Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('reload')
                    // ]);

                    // ->buttons([
                    //     Button::make('csv')
                    //         ->className('btn btn-primary btn-sm mr-2'),
                    //     Button::make('reload')
                    //         ->className('btn btn-outline-secondary btn-sm'),
                    // ]);



    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false)->width(10),
            Column::make('email'),
            Column::make('created_at')->title('Signup Date'),
            Column::computed('action')
                  ->exportable(flag: true)
                  ->printable(true)
                  ->width(100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Newsletters_' . date('YmdHis');
    }
}
