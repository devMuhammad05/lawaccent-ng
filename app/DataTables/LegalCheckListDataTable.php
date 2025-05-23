<?php

namespace App\DataTables;

use App\Models\LegalCheckList;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LegalCheckListDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<LegalCheckList> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $edit = "<a href='".route('admin.checklists.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.checklists.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a</form>";

                return $edit.$delete;
            })
             ->rawColumns(['action', 'body'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<LegalCheckList>
     */
    public function query(LegalCheckList $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('legalchecklist-table')
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
            Column::make('title'),
            Column::make('description'),
            Column::make('body'),
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
        return 'LegalCheckList_' . date('YmdHis');
    }
}
