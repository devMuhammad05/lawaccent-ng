<?php

namespace App\DataTables;

use App\Models\PodcastMedia;
use App\Models\PodcastsMedia;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class PodcastsMediaDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('audio', function($query){
                if ($query->media_location) {
                    // Internal audio file stored
                    $url = asset($query->media_location);
                } elseif ($query->media_link) {
                    // External audio file link
                    $url = $query->media_link;
                } else {
                    return 'No audio available';
                }
                return '<audio controls style="width: 200px;">
                            <source src="' . $url . '" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>';
            })
            ->addColumn('action', function ($query) {
                // $edit = "<a href='".route('admin.podcasts.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.podcasts.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $delete;
            })
            ->rawColumns(['audio', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     */
    public function query(PodcastMedia $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('podcastsmedia-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false)->width(10),
            Column::make('title'),
            Column::make('description'),
            Column::make('audio'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.a
     */
    protected function filename(): string
    {
        return 'PodcastsMedia_' . date('YmdHis');
    }
}
