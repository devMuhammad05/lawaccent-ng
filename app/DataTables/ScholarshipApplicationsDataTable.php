<?php

namespace App\DataTables;

use App\Models\ScholarshipApplication;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ScholarshipApplicationsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<ScholarshipApplication> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addIndexColumn()
        ->addColumn('action', function ($query) {
            $buttonClass = $query->is_read == 1 ? 'btn-primary' : 'btn-danger';
            $view = "<a href='" . route('admin.scholarship-applications.show', $query->id) . "' class='btn $buttonClass mr-2'><i class='fas fa-eye'></i></a>";


            if (! $query->is_read) {
                $markAsRead = "<a href='".route('admin.scholarship-application.markAsRead', $query->id)."' class='btn btn-primary'>
                        <i class='fas fa-check'></i>
                </a>";

                return (string) $view.$markAsRead;
            }

            return $view;
        })
        ->addColumn('transcript_doc', function ($query) {
            if ($query->transcript_doc) {
                return "<a href='" . asset($query->transcript_doc) . "' download  class='btn btn-primary'>
                            <i class='fas fa-download'></i>
                        </a>";
            }

            return 'Not Available';
        })
        ->addColumn('essay_doc', function ($query) {
            if ($query->essay_doc) {
                return "<a href='" . asset($query->essay_doc) . "' download  class='btn btn-primary'>
                            <i class='fas fa-download'></i>
                        </a>";
            }

            return 'Not Available';
        })
        ->addColumn('cv_doc', function ($query) {
            if ($query->cv_doc) {
                return "<a href='" . asset($query->cv_doc) . "' download  class='btn btn-primary'>
                            <i class='fas fa-download'></i>
                        </a>";
            }

            return 'Not Available';
        })
        ->rawColumns(['action', 'transcript_doc', 'essay_doc', 'cv_doc'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<ScholarshipApplication>
     */
    public function query(ScholarshipApplication $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('scholarshipapplications-table')
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
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false),
            Column::make(data: 'name'),
            Column::make(data: 'email'),
            Column::make(data: 'phone_number'),
            Column::make(data: 'cgpa'),
            Column::make(data: 'transcript_doc'),
            Column::make(data: 'essay_doc'),
            Column::make(data: 'cv_doc'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(value: 100)
                // ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ScholarshipApplications_' . date('YmdHis');
    }
}
