<?php


class EditorCommand implements Command
{
    private $start;
    private $end;
    public $operator;
    private $buffer;
    private $editor;
    private $oldText;

    public function __construct($start, $end, $operator, $buffer, Editor $editor)
    {
        $this->start = $start;
        $this->end = $end;
        $this->operator = $operator;
        $this->buffer = $buffer;
        $this->editor = $editor;
    }

    public function execute()
    {
        $response = $this->editor->operation($this->start, $this->end, $this->operator, $this->buffer);
        extract($response);
        $this->buffer = $buffer;
        $this->oldText = $oldText;
    }

    public function unExecute()
    {
        switch ($this->operator) {
            case 'cut':
                $this->editor->operation($this->start, strlen($this->buffer) + $this->start - 1, 'paste', $this->buffer);
                break;
            case 'paste':
                $this->editor->operation($this->start, strlen($this->buffer) + $this->start, 'paste', $this->oldText);
                break;
        }
    }
}