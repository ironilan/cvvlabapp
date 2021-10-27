<?php

namespace App\Nova;


use Illuminate\Http\Request;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Config extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Config::class;

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
            Heading::make('Datos de la empresa'),
            Text::make('Título', 'title')->rules('required','string', 'max:255'),
            Text::make('Dirección', 'address')->rules('required','string', 'max:255')->hideFromIndex(),
            Text::make('Teléfono', 'cellphone')->rules('required','string', 'min:7','max:15')->hideFromIndex(),
            Text::make('Whatsapp: 51999999999', 'whatsapp')->rules('required','numeric', 'min:10000000','max:99999999999')->hideFromIndex(),
            Text::make('Email', 'email')->rules('required','string', 'email'),
            Textarea::make('Mapa', 'map')->rules('required','string')->hideFromIndex(),
            Image::make('Logo')->disk('web')->disableDownload(),
            Image::make('Logo_blanco')->disk('web')->disableDownload(),
            Heading::make('Meta data'),
            Text::make('Keywords', 'keywords')->rules('required','string', 'max:255')->hideFromIndex(),
            Textarea::make('Descriptions', 'description')->rules('required','string')->hideFromIndex(),
            Heading::make('Redes sociales'),
            Text::make('Facebook', 'facebook')->hideFromIndex(),
            Text::make('Twitter', 'twitter')->hideFromIndex(),
            Text::make('Instagram', 'instagram')->hideFromIndex(),
            Text::make('Youtube', 'youtube')->hideFromIndex(),           
            Text::make('Linkedin', 'linkedin')->hideFromIndex()           
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
