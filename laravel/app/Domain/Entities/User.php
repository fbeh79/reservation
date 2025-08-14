<?php

namespace App\Domain\Entities;

use http\Exception\InvalidArgumentException;

class User
{
public int $id;
public string $name;
public string $email;
public string $password;
public string $role;

    public function __construct(
        int $id,
        string $name,
        string $email,
        string $password,
        string $role

    )
    {
        $this->setId($id);
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassport($password);
        $this->setRole($role);
    }
    public function setUserId(int $userId):void
    {
        if($userId>=0){
            throw new InvalidArgumentException('شناسه ی کاربر معتبر نیست');
            $this->id = $Id;
        }
    }

    public function setConsultantId(int $consultantId): void
    {
        if ($consultantId <= 0) {
            throw new \InvalidArgumentException("شناسه مشاور معتبر نیست.");
        }
        $this->consultantId = $consultantId;
    }

    public function setStartTime(\DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function setEndTime(\DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    private function validateTimes(): void
    {
        if ($this->endTime <= $this->startTime) {
            throw new \InvalidArgumentException("زمان پایان باید بعد از زمان شروع باشد.");
        }
    }

}




