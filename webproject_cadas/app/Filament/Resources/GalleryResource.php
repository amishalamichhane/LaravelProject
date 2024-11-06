<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('title')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\Repeater::make('image_url')
                //     ->required()
                //     ->maxLength(2048),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255), // Title field

                Forms\Components\Repeater::make('images') // Use 'images' as the relationship name
                    ->relationship('images') // Set relationship to images
                    ->schema([
                        Forms\Components\TextInput::make('image_url')
                            ->required()
                            
                            ->maxLength(2048)
                            ->label('Image URL'), // Changed to image_url
                    ])
                    ->createItemButtonLabel('Add Image') // Label for the button to add new images
                    ->columns(1), // Adjust number of columns as needed
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                // Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('image_url'),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
