<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Vyuldashev\NovaMoneyField\Money;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;



class Examen extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Examen::class;

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
        'title',
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
            BelongsTo::make('Area'),
            BelongsTo::make('tipomuestra'),
            Text::make('Título', 'title')->rules('required','string', 'max:255'),
            Textarea::make('Descripción', 'description')->hideFromIndex(),
            Money::make('Precio', 'PEN', 'price'),
            Textarea::make('Indicadores', 'indicators')->hideFromIndex(),
            Textarea::make('Metodología', 'methodology')->hideFromIndex(),
            Text::make('Tiempo de proceso', 'process_time')->hideFromIndex(),
            Text::make('Tiempo de entrega', 'time_delivery')->hideFromIndex(),
            Boolean::make('Condición de ayuno', 'fasting_condition')
                ->trueValue('si')
                ->falseValue('no')->hideFromIndex(),
            Select::make('Tipo')->options([
                'promocion' => 'Promoción',
                'examen' => 'Examen'
            ]),
            Image::make('Imagen', 'image')->disk('public')
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
