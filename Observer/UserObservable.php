<?php


class UserObservable implements SplSubject
{
    private static $instance = null;
    private Array $observers = [];

    private function __construct(){}
    private function __wakeup(){}
    private function __clone(){}

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self();
            // группа событий для тех, кто хочет получть все события
            self::$instance->observers['*'] = [];
        }
        return self::$instance;
    }

    private function setupEventGroup(string  $event = "*"): void {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers(string  $event = "*"): array {
        $this->setupEventGroup($event);
        $group = [];
        if (!($event === "*")) {
            $group = $this->observers[$event];
        }
        $all = $this->observers["*"];
        var_dump($all);

        return array_merge($group, $all);
    }

    public function attach(SplObserver $observer, string $event = "*"): void {
        $this->setupEventGroup($event);
        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = "*"): void {
        foreach ($this->getEventObservers($event) as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = "*"): void {
        echo "Event triggered - {$event}".PHP_EOL;
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event);
        }
    }
}