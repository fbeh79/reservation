<?php

namespace App\Domain\Entities;

class Consultant
{
    public int $id;
    public string $name;
    public string $expertise;

    public function __construct(int $id, string $name, string $expertise)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setExpertise($expertise);
    }

    public function setId(int $id): void
    {
        if ($id <= 0) {
            throw new \InvalidArgumentException("شناسه معتبر نیست.");
        }
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        if (strlen($name) < 3) {
            throw new \InvalidArgumentException("نام باید حداقل ۳ کاراکتر باشد.");
        }
        $this->name = $name;
    }

    public function setExpertise(string $expertise): void
    {
        if (strlen($expertise) < 3) {
            throw new \InvalidArgumentException("تخصص معتبر نیست.");
        }
        $this->expertise = $expertise;
    }


}
