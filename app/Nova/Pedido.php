<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Select;
use Vyuldashev\NovaMoneyField\Money;
use Laravel\Nova\Fields\BelongsTo;

class Pedido extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Pedido::class;

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->where('status', 'finalizado');
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    // public static $search = [
    //     'id',
    // ];


    public static $searchRelations = [
        'cliente' => ['name', 'email'],
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
            Money::make('Monto', 'PEN', 'ammount'),
            Select::make('Estado','status')->options([
                'pendiente' => 'Pendiente',
                'en_proceso' => 'En Proceso',
                'pendiente' => 'Pendiente',
            ])->onlyOnForms(),
            Text::make('Estado', 'status', function(){
                if ($this->status == 'finalizado') {
                    return '<strong class=" font-bold cursor-pointer text-success">Finalizado</strong>';
                }elseif($this->status == 'en_proceso'){
                    return '<strong class="font-bold cursor-pointer text-warning">En proceso</strong>';
                }else{
                    return '<strong class="font-bold cursor-pointer text-danger">Pendiente</strong>';
                }
            })->rules('required','string', 'max:255')->asHtml()->exceptOnForms(),
            Text::make('Número de operación', 'num_operation')->rules('required','string', 'max:255'),
            Text::make('Origen', 'origin')->rules('required','string', 'max:255'),
            BelongsTo::make('Cliente', 'cliente'),
            HasMany::make('pedidodetalles')
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

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    public function authorizedToDelete(Request $request)
    {
        return false;
    }

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }
}
