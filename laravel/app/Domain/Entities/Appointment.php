<?php

namespace App\Domain\Entities;
use DateTime;
use InvalidArgumentException;
use function Termwind\terminal;

class Appointment
{

    public int $id;
    public int $userId;
    public int $consultantId;
    public \DateTime $startTime;
    public \DateTime $endTime;

    public function __construct(
        int $id,
        int $userId,
        int $consultantId,
        \DateTime $startTime,
        \DateTime $endTime
    ) {
        $this->setId($id);
        $this->setUserId($userId);
        $this->setConsultantId($consultantId);
        $this->setStartTime($startTime);
        $this->setEndTime($endTime);
        $this->validateTimes();
    }

    public function setId(int $id): void
    {
        if ($id <= 0) {
            throw new \InvalidArgumentException("شناسه معتبر نیست.");
        }
        $this->id = $id;
    }

    public function setUserId(int $userId): void
    {
        if ($userId <= 0) {
            throw new \InvalidArgumentException("شناسه کاربر معتبر نیست.");
        }
        $this->userId = $userId;
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
