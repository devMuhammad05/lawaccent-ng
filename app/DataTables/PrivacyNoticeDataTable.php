<?php

namespace App\DataTables;

use App\Models\PrivacyNotice;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PrivacyNoticeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<PrivacyNotice> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $edit = "<a href='".route('admin.privacy-notice.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.privacy-notice.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a</form>";

                return (string) $edit.$delete;

            })->addColumn('status', function ($query) {
                $status = $query->status == 1 ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-danger">InActive</span>';

                return $status;
            })->rawColumns(['action', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<PrivacyNotice>
     */
    public function query(PrivacyNotice $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('privacynotice-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle();
                    // ->buttons([
                    //     Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('pdf'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload'),
                    // ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false),
            Column::make('question'),
            Column::make(data: 'status'),
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
        return 'PrivacyNotice_' . date('YmdHis');
    }
}
