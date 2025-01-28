<?php

use App\Enums\TaskPriority;

it('can get the correct label for LOW priority', function () {
    $priority = TaskPriority::LOW;
    expect($priority->label())->toBe('Low');
});

it('can get the correct value for LOW priority', function () {
    $taskStatus = TaskPriority::LOW;
    expect($taskStatus->value)->toBe('low');
});

it('can get the correct label for MEDIUM priority', function () {
    $priority = TaskPriority::MEDIUM;
    expect($priority->label())->toBe('Medium');
});

it('can get the correct value for MEDIUM priority', function () {
    $taskStatus = TaskPriority::MEDIUM;
    expect($taskStatus->value)->toBe('medium');
});

it('can get the correct label for HIGH priority', function () {
    $priority = TaskPriority::HIGH;
    expect($priority->label())->toBe('High');
});

it('can get the correct value for HIGH priority', function () {
    $taskStatus = TaskPriority::HIGH;
    expect($taskStatus->value)->toBe('high');
});

// background color
it('can get the correct background color for LOW priority', function () {
    $priority = TaskPriority::LOW;
    expect($priority->getBgColor())->toBe('bg-slate-200');
});

it('can get the correct background color for MEDIUM priority', function () {
    $priority = TaskPriority::MEDIUM;
    expect($priority->getBgColor())->toBe('bg-yellow-200');
});

it('can get the correct background color for HIGH priority', function () {
    $priority = TaskPriority::HIGH;
    expect($priority->getBgColor())->toBe('bg-rose-200');
});

// text color
it('can get the correct text color for LOW priority', function () {
    $priority = TaskPriority::LOW;
    expect($priority->getTextColor())->toBe('text-slate-600');
});

it('can get the correct text color for MEDIUM priority', function () {
    $priority = TaskPriority::MEDIUM;
    expect($priority->getTextColor())->toBe('text-yellow-600');
});

it('can get the correct text color for HIGH priority', function () {
    $priority = TaskPriority::HIGH;
    expect($priority->getTextColor())->toBe('text-rose-600');
});

// html
it('can get the correct HTML for LOW priority', function () {
    $priority = TaskPriority::LOW;
    expect($priority->getHtml())->toContain('bg-slate-200')
        ->and($priority->getHtml())->toContain('text-slate-600')
        ->and($priority->getHtml())->toContain('Low');
});

it('can get the correct HTML for MEDIUM priority', function () {
    $priority = TaskPriority::MEDIUM;
    expect($priority->getHtml())->toContain('bg-yellow-200')
        ->and($priority->getHtml())->toContain('text-yellow-600')
        ->and($priority->getHtml())->toContain('Medium');
});

it('can get the correct HTML for HIGH priority', function () {
    $priority = TaskPriority::HIGH;
    expect($priority->getHtml())->toContain('bg-rose-200')
        ->and($priority->getHtml())->toContain('text-rose-600')
        ->and($priority->getHtml())->toContain('High');
});
