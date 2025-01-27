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
            self::PENDING => 'bg-slate-200',
            self::IN_PROGRESS => 'bg-violet-200',
            self::COMPLETED => 'bg-emerald-200',
            self::BLOCKED => 'bg-rose-200',
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
            '<span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold rounded-md %s %s"> %s </span>',
            $this->getBgColor(),
            $this->getTextColor(),
            $this->label()
        );
    }
}
