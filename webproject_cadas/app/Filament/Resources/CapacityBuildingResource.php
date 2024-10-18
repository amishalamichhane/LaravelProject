<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapacityBuildingResource\Pages;
use App\Filament\Resources\CapacityBuildingResource\RelationManagers;
use App\Models\CapacityBuilding;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class CapacityBuildingResource extends Resource
{
    protected static ?string $model = CapacityBuilding::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('section_title')->required(),
                Textarea::make('section_content')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_title')->sortable(),
                TextColumn::make('section_content')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCapacityBuildings::route('/'),
            'create' => Pages\CreateCapacityBuilding::route('/create'),
            'edit' => Pages\EditCapacityBuilding::route('/{record}/edit'),
        ];
    }
}
