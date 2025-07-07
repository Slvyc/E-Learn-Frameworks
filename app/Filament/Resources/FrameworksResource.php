<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FrameworksResource\Pages;
use App\Filament\Resources\FrameworksResource\RelationManagers;
use App\Models\Frameworks;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FrameworksResource extends Resource
{
    protected static ?string $model = Frameworks::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';
    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->required()
                    ->directory('frameworks/logos')
                    ->columnSpan('full')
                    ->imagePreviewHeight('150')
                    ->preserveFilenames()
                    ->imageEditor(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignorable: fn (?Frameworks $record) => $record)
                    ->label('Nama Framework'),
                
                Forms\Components\TextInput::make('language')
                    ->maxLength(255)
                    ->label('Bahasa Pemrograman'),

                Forms\Components\Select::make('tech_stack')
                    ->options([
                        'backend' => 'Backend',
                        'frontend' => 'Frontend',
                        'mobiledev' => 'Mobile Development',
                    ])
                    ->label('Tech Stack')
                    ->required(),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignorable: fn (?Frameworks $record) => $record)
                    ->label('Slug'),

                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->label('Deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->square()
                    ->width(50)
                    ->height(50),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Framework')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('language')
                    ->label('Bahasa Pemrograman')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tech_stack')
                    ->label('Tumpukan Teknologi')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
                
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
            'index' => Pages\ManageFrameworks::route('/'),
        ];
    }
}
