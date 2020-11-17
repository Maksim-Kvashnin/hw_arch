<?php


class User implements SplObserver
{
    private $name;
    private $mail;
    private $resume;

    public function __construct(String $name, String $mail, String $resume) {
        $this->name = $name;
        $this->mail = $mail;
        $this->resume = $resume;
    }

    public function update(SplSubject $subject, string $event = null)
    {
        $msg = "Доброго времени суток {$this->name}: ";
        $msg .= $event === "*" ? "проверьте личный кабинет, появились новые вакансии" : "появились вакансии по {$event}, проверьте личный кабинет";
        echo $msg.PHP_EOL;
    }
}