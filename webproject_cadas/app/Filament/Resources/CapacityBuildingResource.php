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
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Http\Request;

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
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\FileUpload::make('image_urls') // For uploading images
                    ->multiple() // Allow multiple uploads
                    ->label('Upload Images')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->directory('capacity_building') // Set the directory where files should be uploaded
                    ->required() // Optional: make the upload required
                    ->maxFiles(5) // Limit the number of files (optional)
                    ->acceptedFileTypes(['img/jpeg', 'img/png', 'img/jpg']) // Limit file types
                    ->maxSize(1024 * 1024 * 5) // Limit file size to 5MB
                    ->placeholder('Choose images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_title')->sortable(),
                TextColumn::make('section_content')->limit(50),
                ImageColumn::make('image_urls')
                    ->label('Images')
                    ->url(fn($record) => json_decode($record->image_urls)[0] ?? null) // Get the first image URL
                    ->limit(1), // Limit to one image or adjust as needed
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

    // Custom store method to handle the file uploads
    protected function store(Request $request): void
    {
        $data = $request->validate([
            'section_title' => 'required|string|max:255',
            'image_urls' => 'required|array',
            'image_urls.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'section_content' => 'required|string',
        ]);

        $imageUrls = [];

        if ($request->hasFile('image_urls')) {
            foreach ($request->file('image_urls') as $file) {
                $path = $file->store('capacity_building', 'public');
                $imageUrls[] = $path;
            }
        }

        CapacityBuilding::create([
            'section_title' => $data['section_title'],
            'image_urls' => json_encode($imageUrls),
            'section_content' => $data['section_content'],
        ]);
    }
}
