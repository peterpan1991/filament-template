<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('文章标题')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('URL别名')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('excerpt')
                    ->label('摘要')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->label('正文内容')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('封面图')
                    ->image()
                    ->nullable()
                    ->directory('posts'),
                Toggle::make('is_active')
                    ->label('发布状态')
                    ->default(true),
            ]);
    }
}
