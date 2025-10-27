<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class CreateQuizTable extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $topic_name = '';
    public $table_name = '';

    
    protected static ?string $navigationIcon = 'heroicon-s-plus'; // or any heroicon of your choice
    protected static string $view = 'filament.pages.create-quiz-table';
    protected static ?string $title = 'Create Quiz Table';

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('topic_name')
                ->required()
                ->label('Topic Name'),
            Forms\Components\TextInput::make('table_name')
                ->required()
                ->label('Table Name')
                ->unique('topics', 'table_name')
                ->rules(['alpha_dash']),
        ];
    }

    public function createTable()
    {
        $data = $this->form->getState();
        $newColumn = $data['table_name'];

        // Create the new quiz table dynamically
        if (!Schema::hasTable($data['table_name'])) {
            Schema::create($data['table_name'], function (Blueprint $table) {
                $table->id();
                $table->string('question');
                $table->string('correct');
                $table->string('false1');
                $table->string('false2');
                $table->string('false3');
                $table->timestamps();
            });
        }

        // Insert new topic entry
        DB::table('topics')->insert([
            'topic_name' => $data['topic_name'],
            'table_name' => $data['table_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add new column to high_scores table if it doesn't exist
        if (!Schema::hasColumn('high_scores', $newColumn)) {
            Schema::table('high_scores', function (Blueprint $table) use ($newColumn) {
                $table->integer($newColumn)->nullable()->after('quiz5s'); // Adjust position and type if needed
            });
        }

        Notification::make()
            ->title('Success')
            ->success()
            ->body('Quiz table and topic created successfully!')
            ->send();

        $this->form->fill([]);
    }

    protected function getFormActions(): array
    {
        return [
            Forms\Actions\Button::make('Create Table')
                ->action('createTable')
                ->button(),
        ];
    }
}

