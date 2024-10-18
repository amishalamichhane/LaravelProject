<?php

namespace App\Filament\Resources\CapacityBuildingResource\Pages;

use App\Filament\Resources\CapacityBuildingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCapacityBuilding extends EditRecord
{
    protected static string $resource = CapacityBuildingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
