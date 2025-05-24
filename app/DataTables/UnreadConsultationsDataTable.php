<?php

namespace App\DataTables;

use App\Models\Consultation;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\UnreadConsultation;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class UnreadConsultationsDataTable extends DataTable
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
                $view = "<a href='".route('admin.consultations.show', $query->id)."' class='btn btn-danger mr-2'><i class='fas fa-eye'></i></a>";

                if (! $query->is_read) {
                    $markAsRead = "<a href='".route('admin.consultations.markAsRead', $query->id)."' class='btn btn-primary'>
                            <i class='fas fa-check'></i>
                    </a>";

                    return (string) $view.$markAsRead;
                }

                return $view;
            })->addColumn('type', function ($query) {

               return str_replace('-', ' ', ucfirst($query->type));

            })->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder
     */
    public function query(Consultation $model): QueryBuilder
    {
        return $model->unread();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('unreadconsultations-table')
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
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false)->width(10),
            Column::make('name'),
            Column::make('email'),
            Column::make('type')->title('Consultation Type'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(100)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'UnreadConsultations_' . date('YmdHis');
    }
}
