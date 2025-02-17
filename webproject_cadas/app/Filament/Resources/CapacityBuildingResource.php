<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapacityBuildingResource\Pages;
use App\Models\CapacityBuilding;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Http\Request;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor; // Import TinyEditor

class CapacityBuildingResource extends Resource
{
    protected static ?string $model = CapacityBuilding::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section Title (Text Input)
                TextInput::make('section_title')
                    ->required()
                    ->label('Section Title')
                    ->maxLength(255),

                // Section Content (Using TinyEditor for Rich Text Editing)
                TinyEditor::make('section_content') // Using TinyEditor for rich text
                    ->required()
                    ->label('Section Content')
                    ->columnSpan('full') // Makes it span across the entire width of the form
                    ->maxLength(1000),

                // Slug (Text Input)
                TextInput::make('slug')
                    ->required()
                    ->label('Slug')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Section Title (Text Column)
                TextColumn::make('section_title')
                    ->sortable()
                    ->label('Title'),

                // Section Content (Preview in table - shortened)
                TextColumn::make('section_content')
                    ->limit(50)
                    ->label('Content'),
            ])
            ->filters([
                // You can add any filters here
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCapacityBuildings::route('/'),
            'create' => Pages\CreateCapacityBuilding::route('/create'),
            'edit' => Pages\EditCapacityBuilding::route('/{record}/edit'),
        ];
    }

    // Custom store method for saving records (no image upload)
    protected function store(Request $request): void
    {
        // Validate incoming request data
        $data = $request->validate([
            'section_title' => 'required|string|max:255',
            'section_content' => 'required|string|max:1000', // Validate section content
            'slug' => 'required|string|unique:capacity_buildings,slug|max:255', // Ensure unique slug
        ]);

        // Create a new record in the database
        CapacityBuilding::create([
            'section_title' => $data['section_title'],
            'section_content' => $data['section_content'],
            'slug' => $data['slug'],
        ]);
    }
}
