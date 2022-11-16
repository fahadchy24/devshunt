<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Category $category) {
                $html = '<a class="btn btn-link text-info" href="' . route('admin.categories.edit', $category->id) . '"> <i class="fa fa-pencil"></i> </a>';
                $html .= '<a class="btn btn-link text-danger" href="' . route('admin.categories.destroy', $category->id) . '"> <i class="fa fa-trash"></i> </a>';

                return $html;
            })
            ->editColumn('name', function (Category $category) {
                $html = $category->name;

                $html .= '</br> <a target="_blank" class="btn btn-link text-primary" href="' . route('categories.show', $category->slug) . '"> View </a>';

                return $html;
            })
            ->editColumn('created_at', function (Category $category) {
                return $category->created_at->format('Y-m-d h:s:i');
            })
            ->editColumn('updated_at', function (Category $category) {
                return $category->updated_at->diffForHumans();
            })
            ->rawColumns(['name', 'action']);
    }

    public function query(Category $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('category-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                // Button::make('add'),
                // Button::make('excel'),
                // Button::make('csv'),
                // Button::make('pdf'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('SL No.')->searchable(false)->orderable(false),
            Column::make('name')->title('Category Name'),
            Column::make('created_at')->title('Created'),
            Column::make('updated_at')->title('Last Updated'),
            Column::make('action')
                ->title('Action')
                ->searchable(false)
                ->orderable(false)
                ->printable(false),
        ];
    }

    protected function filename(): string
    {
        return 'Categories_' . date('YmdHis');
    }
}
