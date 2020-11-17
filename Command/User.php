<?php


class User
{
    protected $editor;
    private $commands = [];
    private $current = 0;

    public function __construct()
    {
        $this->editor = new Editor();
    }

    public function runCmd(int $start = 0, int $end = 0, string $operator = '', string $externalBuffer = null) {
        $command = new EditorCommand($start, $end, $operator, $externalBuffer, $this->editor);
        $command->execute();
        $this->commands[] = $command;
        $this->current++;
    }

    public function down(int $levels) {
        for ($i = 0; $i < $levels; $i++) {
            if($this->current > 0) {
                if($this->commands[$this->current - 1]->operator === 'copy') {
                    $i--;
                    $this->current--;
                    continue;
                }
                $this->commands[--$this->current]->unExecute();
            }
        }
    }

    public function up(int $levels) {
        for ($i = 0; $i < $levels; $i++) {
            if($this->current <= count($this->commands)-1) {
                if($this->commands[$this->current + 1]->operator === 'copy') {
                    $i--;
                    $this->current++;
                    continue;
                }
                $this->commands[$this->current++]->execute();
            }
        }
    }

}