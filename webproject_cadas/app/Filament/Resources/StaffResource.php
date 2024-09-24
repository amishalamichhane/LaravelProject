<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaffResource\Pages;
use App\Filament\Resources\StaffResource\RelationManagers;
use App\Models\Staff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\Text;
use Filament\Tables\Columns\Image;


class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('role')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()
                    ->maxSize(2048) // Maximum size in kilobytes
                    ->directory('staff_images') // Where the image will be stored
                    ->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name') // Using TextColumn
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('role') // Using TextColumn
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ImageColumn::make('image') // Using ImageColumn
                    ->width(50)
                    ->height(50)
                    ->label('Profile Image'), // Optional: Custom label for display
            ])
            ->filters([
                // Add any filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
