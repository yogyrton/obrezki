<?php

namespace App\Service;

use App\Events\BirthdayEvent;
use App\Models\Announcement;
use App\Models\User;
use Carbon\Carbon;

class BirthdayService
{
    public function __invoke()
    {
        // Заменить в будущем на модель юзера, поля на имя и дату рождения

        $allUsers = Announcement::query()->select('title', 'created_at')->get();

        $usersBirthday = [];

        foreach ($allUsers as $user) {
            $dateUser = Carbon::create($user->created_at); // заменить на дату рождения
            $dateNow = \Carbon\Carbon::now();

            if ($dateNow->month === $dateUser->month && $dateNow->day === $dateUser->day) {
                $usersBirthday[] = $user;
            }
        }

        event(new BirthdayEvent($usersBirthday));
    }
}
