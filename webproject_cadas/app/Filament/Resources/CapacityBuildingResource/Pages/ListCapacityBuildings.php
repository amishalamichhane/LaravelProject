<?php

namespace App\Filament\Resources\CapacityBuildingResource\Pages;

use App\Filament\Resources\CapacityBuildingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCapacityBuildings extends ListRecords
{
    protected static string $resource = CapacityBuildingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
