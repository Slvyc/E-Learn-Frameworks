<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionsResource\Pages;
use App\Filament\Resources\SectionsResource\RelationManagers;
use App\Models\Sections;
use App\Models\Frameworks;
use App\Models\Chapters;
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
    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('framework_id')
                    ->relationship('framework', 'name')
                    ->required()
                    ->label('Framework')
                    ->options(Frameworks::all()->pluck('name', 'id'))
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('chapter_id', null))
                    ->searchable()
                    ->preload(),

                Forms\Components\Select::make('chapter_id')
                    ->relationship('chapter', 'title')
                    ->required()
                    ->label('Chapter')
                    ->options(function (callable $get) {
                        $frameworkId = $get('framework_id');
                        if (!$frameworkId) return Chapters::pluck('title', 'id');
                        return Chapters::where('framework_id', $frameworkId)->pluck('title', 'id');
                    })
                    ->searchable()
                    ->preload(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),

                Forms\Components\Textarea::make('content')
                    ->label('Isi Konten')
                    ->rows(10)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('code_sample')
                    ->label('Contoh Kode'),

                Forms\Components\Textarea::make('content2')
                    ->label('Isi Konten 2')
                    ->rows(10)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('code_sample2')
                    ->label('Contoh Kode 2'),

                Forms\Components\Textarea::make('content3')
                    ->label('Isi Konten 3')
                    ->rows(10)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('code_sample3')
                    ->label('Contoh Kode 3'),

                Forms\Components\Textarea::make('content4')
                    ->label('Isi Konten 4')
                    ->rows(10)
                    ->columnSpanFull(),

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
                    ->sortable()
                    ->wrap()
                    ->limit(100)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        return $column->getState();
                    }),
                
                Tables\Columns\TextColumn::make('code_sample')
                    ->label('Contoh Kode')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('content2')
                    ->label('Isi Konten 2')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(100)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        return $column->getState();
                    }),
                
                Tables\Columns\TextColumn::make('code_sample2')
                    ->label('Contoh Kode 2')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('content3')
                    ->label('Isi Konten 3')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(100)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        return $column->getState();
                    }),
                
                Tables\Columns\TextColumn::make('code_sample3')
                    ->label('Contoh Kode 3')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('content4')
                    ->label('Isi Konten 4')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(100)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        return $column->getState();
                    }),

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
