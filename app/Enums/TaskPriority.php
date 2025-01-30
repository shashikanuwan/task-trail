<?php

namespace App\Enums;

enum TaskPriority: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';

    public function label(): string
    {
        return match ($this) {
            self::LOW => 'Low',
            self::MEDIUM => 'Medium',
            self::HIGH => 'High',
        };
    }

    public function getBgColor(): string
    {
        return match ($this) {
            self::LOW => 'bg-slate-100',
            self::MEDIUM => 'bg-yellow-100',
            self::HIGH => 'bg-rose-100',
        };
    }

    public function getTextColor(): string
    {
        return match ($this) {
            self::LOW => 'text-slate-600',
            self::MEDIUM => 'text-yellow-600',
            self::HIGH => 'text-rose-600',
        };
    }

    public function getHtml(): string
    {
        return sprintf(
            '<span class="text-sm px-2 py-1 rounded %s %s"> %s </span>',
            $this->getBgColor(),
            $this->getTextColor(),
            $this->label()
        );
    }
}
