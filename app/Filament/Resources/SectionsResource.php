<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionsResource\Pages;
use App\Filament\Resources\SectionsResource\RelationManagers;
use App\Models\Sections;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionsResource extends Resource
{
    protected static ?string $model = Sections::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('framework_id')
                    ->relationship('framework', 'name')
                    ->required()
                    ->label('Framework')
                    ->searchable()
                    ->preload(),

                Forms\Components\Select::make('chapter_id')
                    ->relationship('chapter', 'title')
                    ->required()
                    ->label('Chapter')
                    ->searchable()
                    ->preload(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),

                Forms\Components\Textarea::make('content')
                    ->required()
                    ->maxLength(255)
                    ->label('Isi Konten'),

                Forms\Components\Textarea::make('code_sample')
                    ->required()
                    ->maxLength(255)
                    ->label('Contoh Kode'),

                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->label('Urutan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('framework.name')
                    ->label('Framework')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('chapter.title')
                    ->label('Chapter')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('content')
                    ->label('Isi Konten')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('code_sample')
                    ->label('Contoh Kode')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
            ])->filters([
                //
            ])->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageSections::route('/'),
        ];
    }
}
