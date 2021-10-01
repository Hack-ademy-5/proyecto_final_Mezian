<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use PhpParser\Node\Expr\Cast\Bool_;
use Laravel\Nova\Http\Requests\NovaRequest;
use Waynestate\Nova\CKEditor;

class Ad extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Ad::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','body','description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('Titulo'),'title'),
            TextArea::make(__('Descripción'),'description')->alwaysShow(),
            CKEditor::make(__('Texto'),'body')->options([
                'height'=>200,
                'toolbar'=>[
                    ['Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print', 'SpellChecker', 'Scayt'],
                    ['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight'],
                    ['Link', 'Unlink', 'Anchor'],
                ]
            ]),
            Number::make(__('Precio'),'price')->min(1)->max(1000)->step(1),
            Boolean::make(__('Aceptado'),'is_accepted'),
            Date::make(__('Creado el'),'created_at')
                ->format('DD/MM/YYYY')
                ->pickerDisplayFormat('d/m/Y'),
            DateTime::make(__('Acutalizado el'),'updated_at')
                ->format('DD/MM/YYYY HH:mm:ss')
                ->pickerDisplayFormat('d/m/Y H:i:S')
                ->hideWhenCreating(),
            BelongsTo::make(__('Categoria'),'category',Category::class),
            BelongsTo::make(__('Usuario'),'user',User::class)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
