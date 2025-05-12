<?php

namespace App\DataTables;

use Carbon\Carbon;
use App\Models\webinar;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class webinarsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<webinar> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $edit = "<a href='".route('admin.webinars.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.webinars.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $edit . $delete;
            })
            ->addColumn('date', function ($query) {
                return $query->date->format('d M Y');
            })
            ->addColumn('days_left', function($query) {
                $targetDate = Carbon::parse($query->date);
                $days = Carbon::now()->diffInDays($targetDate, false);
                $days = (int)$days;
                return $days >= 0 ? $days . ' days left' : 'Event has passed';
            })
            ->rawColumns(['action', 'days_left', 'date'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<webinar>
     */
    public function query(webinar $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('webinars-table')
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
            Column::make('title'),
            Column::make('topic'),
            Column::make('description'),
            Column::make('date'),
            Column::make('days_left'),
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
        return 'webinars_' . date('YmdHis');
    }
}
