<?php

namespace App\Service;

use App\Models\User;
use App\Notifications\BirthdayNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Notification;


class BirthdayService
{
    private $dateNow;
    private $usersBirthday;

    public function __construct()
    {
        $this->dateNow = \Carbon\Carbon::now();
        $this->usersBirthday = $this->getUsersBirthday();
    }

    private function getUsersBirthday() : Collection
    {
        // Заменить в будущем поля имя и дату рождения
        return User::query()
            ->select( 'id', 'name', 'created_at')
            ->whereDay('created_at', $this->dateNow->day)
            ->whereMonth('created_at', $this->dateNow->month)
            ->get();
    }

    public function sendBirthdayNotifications()
    {
        foreach ($this->usersBirthday as $user) {
            $user->notify(new BirthdayNotification($user->name));
        }
    }
}
