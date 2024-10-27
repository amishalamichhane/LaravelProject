<?php

namespace App\Filament\Resources\WorkingPaperResource\Pages;

use App\Filament\Resources\WorkingPaperResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkingPaper extends EditRecord
{
    protected static string $resource = WorkingPaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
