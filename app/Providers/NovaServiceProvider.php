<?php

namespace App\Providers;

use App\Models\Benefit;
use App\Models\Course;
use App\Nova\Metrics\UsersPerDay;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use DigitalCreative\CollapsibleResourceManager\Resources\InternalLink;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'ilanvaldez34@gmail.com',
                'gerencia@cvvlab.pe',
                'dcernaavila@gmail.com'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        

        return [
            
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'navigation' => [
                    TopLevelResource::make([
                        'label' => 'Usuarios',
                        'expanded' => true,
                        'resources' => [
                            \App\Nova\User::class                            
                        ]                        
                    ]),
                    TopLevelResource::make([
                        'label' => 'Configuración',
                        'expanded' => false,
                        'resources' => [
                            \App\Nova\Config::class                          
                        ]                       
                    ]),
                    TopLevelResource::make([
                        'label' => 'CMS',
                        'expanded' => false,
                        'resources' => [
                            InternalLink::make([
                                'label' => 'Banners',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/banners',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Whatsapp',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/whatsapps',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                                                        
                        ]                       
                    ]),
                    TopLevelResource::make([
                        'label' => 'Examenes',
                        'expanded' => false,
                        'resources' => [
                            InternalLink::make([
                                'label' => 'Áreas',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/areas',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Tipo de muestra',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/tipomuestras',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Exámenes',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/examens',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                                                        
                        ]                       
                    ]),
                    TopLevelResource::make([
                        'label' => 'Pedidos',
                        'expanded' => false,
                        'resources' => [
                            InternalLink::make([
                                'label' => 'Confirmados',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/pedidos',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Pendientes',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/pendientes',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                                                        
                        ]                       
                    ]),
                    
                ]
            ])
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
