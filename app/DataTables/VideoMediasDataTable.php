<?php

namespace App\DataTables;

use App\Models\VideoMedia;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VideoMediasDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<VideoMedia> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('video', function($query){
                $video = '';

                if ($query->media_link) {
                    // If media_link is provided (external URL)
                    $video = "<video width='150' controls>
                                <source src='{$query->media_link}' type='video/mp4'>
                                Your browser does not support the video tag.
                              </video>";
                } elseif ($query->media_location) {
                    // If media_location is available (uploaded file)
                    $videoUrl = asset($query->media_location);
                    $video = "<video width='150' controls>
                                <source src='{$videoUrl}' type='video/mp4'>
                                Your browser does not support the video tag.
                              </video>";
                } else {
                    $video = '<span class="text-muted">No video</span>';
                }

                return $video;
            })
            ->addColumn('action', function ($query) {
                $edit = "<a href='".route('admin.videos.edit', $query->id)."' class='btn btn-primary'><i class='fas fa-edit'></i></a>";
                $delete = "<a href='".route('admin.videos.destroy', $query->id)."' class='ml-2 btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $edit . $delete;
            })
            ->rawColumns(['action', 'video'])
            ->setRowId('id');
    }


    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<VideoMedia>
     */
    public function query(VideoMedia $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('videomedias-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('S/N')->searchable(false)->orderable(false),
            Column::make('title'),
            Column::make('video'),
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
        return 'VideoMedias_' . date('YmdHis');
    }
}
