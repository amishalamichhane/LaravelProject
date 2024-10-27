<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkingPaperResource\Pages;
use App\Filament\Resources\WorkingPaperResource\RelationManagers;
use App\Models\WorkingPaper;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkingPaperResource extends Resource
{
    protected static ?string $model = WorkingPaper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('authors')->required(),
                Forms\Components\DatePicker::make('date')->required(),
                Forms\Components\Textarea::make('summary')->required(),
                Forms\Components\TextInput::make('file_path')->required(), // Or use file upload component

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('authors'),
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('summary')->limit(50),
                //
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
            'index' => Pages\ListWorkingPapers::route('/'),
            'create' => Pages\CreateWorkingPaper::route('/create'),
            'edit' => Pages\EditWorkingPaper::route('/{record}/edit'),
        ];
    }
}
