<?php


class Editor
{
    private string $text = '';
    private string $buffer;

    public function operation(int $start, int $end, $operator, $externalBuffer):array {
        switch ($operator) {
            case 'paste' :
                if(isset($externalBuffer)) {
                    $this->buffer = $externalBuffer;
                }
                $oldText = $this->paste($start, $end);
                echo "{$this->text}".PHP_EOL;
                return $this->preparePesponse($oldText);
            case 'cut' :
                $this->cut($start, $end);
                echo "{$this->text}".PHP_EOL;
                return $this->preparePesponse();
            case 'copy' :
                $this->copy($start, $end);
                return $this->preparePesponse();
        }
    }

    private function paste(int $start, int $end): string {
        $oldText = $this->getTextForStartEnd($start, $end);
        $this->text = substr_replace($this->text, $this->buffer, $start, $end - $start);
        return $oldText;
    }

    private function copy(int $start, int $end): void {
        $text = $this->getTextForStartEnd($start, $end);
        $this->buffer = $text;
    }

    private function cut(int $start, int $end): void {
        $text = $this->getTextForStartEnd($start, $end);
        $this->buffer = $text;
        $this->text = substr_replace($this->text, '', $start, $end - $start);
    }

    private function getTextForStartEnd(int $start, int $end): string {
        $text = '';
        for ($i = $start; $i < $end; $i++) {
            $text .= $this->text[$i];
        }
        return $text;
    }

    private function preparePesponse($oldText = ''): array {
        return ['buffer' => $this->buffer, 'oldText' => $oldText];
    }
}