<?php

use App\Enums\TaskStatus;

it('can get the correct label for PENDING status', function () {
    $taskStatus = TaskStatus::PENDING;
    expect($taskStatus->label())->toBe('Pending');
});

it('can get the correct value for PENDING status', function () {
    $taskStatus = TaskStatus::PENDING;
    expect($taskStatus->value)->toBe('pending');
});

it('can get the correct label for IN_PROGRESS status', function () {
    $taskStatus = TaskStatus::IN_PROGRESS;
    expect($taskStatus->label())->toBe('In Progress');
});

it('can get the correct value for IN_PROGRESS status', function () {
    $taskStatus = TaskStatus::IN_PROGRESS;
    expect($taskStatus->value)->toBe('in progress');
});

it('can get the correct label for COMPLETED status', function () {
    $taskStatus = TaskStatus::COMPLETED;
    expect($taskStatus->label())->toBe('Completed');
});

it('can get the correct value for COMPLETED status', function () {
    $taskStatus = TaskStatus::COMPLETED;
    expect($taskStatus->value)->toBe('completed');
});

it('can get the correct label for BLOCKED status', function () {
    $taskStatus = TaskStatus::BLOCKED;
    expect($taskStatus->label())->toBe('Blocked');
});

it('can get the correct value for BLOCKED status', function () {
    $taskStatus = TaskStatus::BLOCKED;
    expect($taskStatus->value)->toBe('blocked');
});

// background color
it('can get the correct background color for PENDING status', function () {
    $taskStatus = TaskStatus::PENDING;
    expect($taskStatus->getBgColor())->toBe('bg-slate-100');
});

it('can get the correct background color for IN_PROGRESS status', function () {
    $taskStatus = TaskStatus::IN_PROGRESS;
    expect($taskStatus->getBgColor())->toBe('bg-violet-100');
});

it('can get the correct background color for COMPLETED status', function () {
    $taskStatus = TaskStatus::COMPLETED;
    expect($taskStatus->getBgColor())->toBe('bg-emerald-100');
});

it('can get the correct background color for BLOCKED status', function () {
    $taskStatus = TaskStatus::BLOCKED;
    expect($taskStatus->getBgColor())->toBe('bg-rose-100');
});

// text color
it('can get the correct text color for PENDING status', function () {
    $priority = TaskStatus::PENDING;
    expect($priority->getTextColor())->toBe('text-slate-600');
});

it('can get the correct text color for IN_PROGRESS status', function () {
    $priority = TaskStatus::IN_PROGRESS;
    expect($priority->getTextColor())->toBe('text-violet-600');
});

it('can get the correct text color for COMPLETED status', function () {
    $priority = TaskStatus::COMPLETED;
    expect($priority->getTextColor())->toBe('text-emerald-600');
});

it('can get the correct text color for BLOCKED status', function () {
    $priority = TaskStatus::BLOCKED;
    expect($priority->getTextColor())->toBe('text-rose-600');
});

// html
it('can get the correct HTML for PENDING status', function () {
    $priority = TaskStatus::PENDING;
    expect($priority->getHtml())->toContain('bg-slate-100')
        ->and($priority->getHtml())->toContain('text-slate-600')
        ->and($priority->getHtml())->toContain('Pending');
});

it('can get the correct HTML for IN_PROGRESS status', function () {
    $priority = TaskStatus::IN_PROGRESS;
    expect($priority->getHtml())->toContain('bg-violet-100')
        ->and($priority->getHtml())->toContain('text-violet-600')
        ->and($priority->getHtml())->toContain('In Progress');
});

it('can get the correct HTML for COMPLETED status', function () {
    $priority = TaskStatus::COMPLETED;
    expect($priority->getHtml())->toContain('bg-emerald-100')
        ->and($priority->getHtml())->toContain('text-emerald-600')
        ->and($priority->getHtml())->toContain('Completed');
});

it('can get the correct HTML for BLOCKED status', function () {
    $priority = TaskStatus::BLOCKED;
    expect($priority->getHtml())->toContain('bg-rose-100')
        ->and($priority->getHtml())->toContain('text-rose-600')
        ->and($priority->getHtml())->toContain('Blocked');
});
