<?php

namespace App\View\Components\App;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SettingsHeader extends Component
{
    public function render(): View
    {
        $links = $this->getLinks();

        return view('components.app.settings-header', compact('links'));
    }

    private function getLinks(): array
    {
        return [
            (object) [
                'name' => 'Profile',
                'route' => 'app.settings.profile.index',
                'icon' => 'user',
            ],
            (object) [
                'name' => 'Password',
                'route' => 'app.settings.passwords',
                'icon' => 'lock',
            ],
            (object) [
                'name' => 'Notifications',
                'route' => 'app.settings.notifications',
                'icon' => 'bell',
            ],
            (object) [
                'name' => 'Billing',
                'route' => 'app.settings.subscriptions',
                'icon' => 'credit-card',
            ],
        ];
    }
}
