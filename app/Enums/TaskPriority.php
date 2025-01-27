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
            self::LOW => 'bg-slate-200',
            self::MEDIUM => 'bg-yellow-200',
            self::HIGH => 'bg-rose-200',
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
            '<span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold rounded-md %s %s"> %s </span>',
            $this->getBgColor(),
            $this->getTextColor(),
            $this->label()
        );
    }
}
