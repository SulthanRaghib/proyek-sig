<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KabupatenKotaResource\Pages;
use App\Filament\Resources\KabupatenKotaResource\RelationManagers;
use App\Models\KabupatenKota;
use App\Models\Provinsi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KabupatenKotaResource extends Resource
{
    protected static ?string $model = KabupatenKota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('alt_name')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('latitude')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->required()
                    ->numeric(),
                Select::make('provinsi_id')
                    ->label('Provinsi')
                    ->options(
                        Provinsi::all()->pluck('name', 'id')
                    )->searchable()
                // Forms\Components\TextInput::make('provinsi_id')
                //     ->required()
                //     ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alt_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi_id')
                    ->label('Provinsi')  // Opsional, untuk memberi label yang lebih deskriptif
                    ->getStateUsing(function ($record) {
                        return $record->provinsi->name ?? 'N/A';  // Menampilkan nama provinsi
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKabupatenKotas::route('/'),
            'create' => Pages\CreateKabupatenKota::route('/create'),
            'edit' => Pages\EditKabupatenKota::route('/{record}/edit'),
        ];
    }
}
