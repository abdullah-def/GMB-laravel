<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubsciptionResource\Pages;
use App\Filament\Resources\SubsciptionResource\RelationManagers;
use App\Models\UserSubsciption;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Plan;

class SubsciptionResource extends Resource
{
    protected static ?string $model = UserSubsciption::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $title = 'Subsciptions';
    protected static ?string $navigationLabel = 'Subsciptions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255),

                Forms\Components\Select::make('plan')
                ->options(Plan::PLANS)
                ->required(),

                Forms\Components\TextInput::make('responses')
                ->numeric()
                ->default(0)
                ->minValue(0)
                ->maxValue(10000)
                ->required(),

                Forms\Components\DatePicker::make('ended_at')
                ->format('Y/m/d')
                ->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                ->searchable(),
                Tables\Columns\TextColumn::make('plan')
                ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->searchable(),
                Tables\Columns\TextColumn::make('ended_at')
                ->searchable(),
                Tables\Columns\TextColumn::make('responses')
                ->searchable(),
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
            'index' => Pages\ListSubsciptions::route('/'),
            'create' => Pages\CreateSubsciption::route('/create'),
            'edit' => Pages\EditSubsciption::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 3;
    }
}
