<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudyResource\Pages;
use App\Filament\Resources\StudyResource\RelationManagers;
use App\Models\Study;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class StudyResource extends Resource
{
    protected static ?string $model = Study::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                    Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\TextInput::make('image')
                    ->required(),
                // Forms\Components\TextInput::make('data_link'),
                // Forms\Components\TextInput::make('codebook_link'),
                // Forms\Components\TextInput::make('questions_link'),
                Forms\Components\TextInput::make('report_link'),
                TinyEditor::make('data_link')
                    ->columnSpan(span: 'full'),
                TinyEditor::make('codebook_link')
                    ->columnSpan(span: 'full'),
                TinyEditor::make('questions_link')
                    ->columnSpan(span: 'full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('image'),
                // Tables\Columns\TextColumn::make('data_link'),
                // Tables\Columns\TextColumn::make('codebook_link'),
                // Tables\Columns\TextColumn::make('questions_link'),
                Tables\Columns\TextColumn::make('report_link'),
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
            'index' => Pages\ListStudies::route('/'),
            'create' => Pages\CreateStudy::route('/create'),
            'edit' => Pages\EditStudy::route('/{record}/edit'),
        ];
    }
}
