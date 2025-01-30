<?php

namespace App\Enums;

enum TaskStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in progress';
    case COMPLETED = 'completed';
    case BLOCKED = 'blocked';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::IN_PROGRESS => 'In Progress',
            self::COMPLETED => 'Completed',
            self::BLOCKED => 'Blocked',
        };
    }

    public function getBgColor(): string
    {
        return match ($this) {
            self::PENDING => 'bg-slate-100',
            self::IN_PROGRESS => 'bg-violet-100',
            self::COMPLETED => 'bg-emerald-100',
            self::BLOCKED => 'bg-rose-100',
        };
    }

    public function getTextColor(): string
    {
        return match ($this) {
            self::PENDING => 'text-slate-600',
            self::IN_PROGRESS => 'text-violet-600',
            self::COMPLETED => 'text-emerald-600',
            self::BLOCKED => 'text-rose-600',
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
