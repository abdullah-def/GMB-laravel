<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\Collection;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')->sortable()
                ->searchable(),
                Tables\Columns\IconColumn::make('read')->sortable()->searchable()
                ->label('Status')
                ->boolean(),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
               
                    Tables\Actions\BulkAction::make('Make it complete')->action(function (Collection $records) {
                        // 
                        $records->each(function ($record){
                            // 
                            $record->read = 1;
                            $record->save();
                        });
                    })
                    ->deselectRecordsAfterCompletion()

                ]),
                
            ]);

    }
    protected function getDefaultTableSortDirection(): ?string
    {
        return 'asc';
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name'),
                TextEntry::make('email')->icon('heroicon-m-envelope'),
                TextEntry::make('phone'),
                TextEntry::make('created_at'),
                
                TextEntry::make('body'),
                
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
            'index' => Pages\ListTickets::route('/'),
            // 'view' => Pages\ViewTicket::route('/{record}'),

        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }
    public static function getNavigationSort(): ?int
    {
        return 4;
    }
}
