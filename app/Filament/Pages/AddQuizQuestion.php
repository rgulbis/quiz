<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Filament\Notifications\Notification;


class AddQuizQuestion extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $selectedTable = '';
    public $question = '';
    public $correct = '';
    public $false1 = '';
    public $false2 = '';
    public $false3 = '';

    protected static ?string $navigationIcon = 'heroicon-s-plus';
    protected static string $view = 'filament.pages.add-quiz-question';
    protected static ?string $title = 'Add Quiz Question';

    protected function getFormSchema(): array
    {
        return [
            Select::make('selectedTable')
                ->label('Select Quiz Table')
                ->options($this->getQuizTables())
                ->required()
                ->reactive(),
            TextInput::make('question')
                ->label('Question')
                ->required(),
            TextInput::make('correct')
                ->label('Correct Answer')
                ->required(),
            TextInput::make('false1')
                ->label('False Answer 1')
                ->required(),
            TextInput::make('false2')
                ->label('False Answer 2')
                ->required(),
            TextInput::make('false3')
                ->label('False Answer 3')
                ->required(),
        ];
    }


    protected function getQuizTables(): array
    {
        // Fetch quiz tables from your topics table dynamically
        return DB::table('topics')->pluck('table_name', 'table_name')->toArray();
    }

    public function submit()
    {
        $data = $this->form->getState();

        if (!Schema::hasTable($data['selectedTable'])) {
            Notification::make()
                ->title('Error')
                ->danger()
                ->body("Quiz table '{$data['selectedTable']}' does not exist.")
                ->send();
            return;
        }

        DB::table($data['selectedTable'])->insert([
            'question' => $data['question'],
            'correct' => $data['correct'],
            'false1' => $data['false1'],
            'false2' => $data['false2'],
            'false3' => $data['false3'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Notification::make()
            ->title('Success')
            ->success()
            ->body('Question added successfully!')
            ->send();

        $this->form->fill([]);
    }

    protected function getFormActions(): array
    {
        return [
            Forms\Actions\Button::make('submit')
                ->label('Add Question')
                ->action('submit')
                ->button(),
        ];
    }
}
