<?php

namespace App\DataTables;

use App\Models\UnreadWebinarApplication;
use App\Models\WebinarApplication;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UnreadWebinarApplicationsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $view = "<a href='".route('admin.webinar-applications.show', $query->id)."' class='btn btn-danger mr-2'><i class='fas fa-eye'></i></a>";

                if (! $query->is_read) {
                    $markAsRead = "<a href='".route('admin.webinar-applications.markAsRead', $query->id)."' class='btn btn-primary'>
                            <i class='fas fa-check'></i>
                    </a>";

                    return (string) $view.$markAsRead;
                }

                return $view;
            })->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder
     */
    public function query(WebinarApplication $model): QueryBuilder
    {
        return $model->unread();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('unreadwebinarapplications-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle();
                    // ->buttons([
                    //     Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('pdf'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false)->width(20),
            Column::make('name'),
            Column::make('email'),
            Column::make('phone_number'),
            Column::make('question'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(value: 100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'UnreadWebinarApplications_' . date('YmdHis');
    }
}
