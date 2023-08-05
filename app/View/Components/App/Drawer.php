<?php

namespace App\View\Components\App;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Drawer extends Component
{
    public function render(): View
    {
        $links = $this->getLinks();
        $bottomLinks = $this->getBottomLinks();

        return view(
            'components.app.drawer',
            compact('links', 'bottomLinks')
        );
    }

    private function getLinks(): array
    {
        return [
            [
                'name' => 'Dashboard',
                'route' => 'app.index',
                'icon' => 'icons.dashboard',
            ], /*
            [
                'name' => 'Orders',
                'route' => 'app.orders',
                'icon' => 'icons.dashboard',
            ],
            [
                'name' => 'Invoices',
                'route' => 'app.invoices',
                'icon' => 'icons.dashboard',
            ],*/
        ];
    }

    private function getBottomLinks(): array
    {
        return [
            [
                'name' => 'Help',
                'route' => 'app.help',
                'icon' => 'icons.help',
            ],
            [
                'name' => 'Announcements',
                'route' => 'app.announcements',
                'icon' => 'icons.announcements',
                'badge' => 'New',
            ],
            [
                'name' => 'Settings',
                'route' => 'app.settings.index',
                'icon' => 'icons.settings',
            ],
            [
                'name' => 'Logout',
                'route' => 'auth.logout',
                'icon' => 'icons.power',
            ],
        ];
    }
}
