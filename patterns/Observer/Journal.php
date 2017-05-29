<?php
require_once 'Observable.php';
require_once 'Observer.php';

Class Journal implements Observable
{
    private $observers = [];

    public function attach(Observer $instance)
    {
        foreach ($this->observers as $observer) {
            if ($instance === $observer)
                return false;
        }

        $this->observers[] = $instance;
        return true;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    /**
     * Когда журнал публикуется, он вызывает оповещение всех наблюдателей
     *
     */

    public function published()
    {
        $this->notify();
    }
}