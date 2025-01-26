<?php

namespace App\Enums;

enum Permission: string
{
    case PROJECT_CREATE = 'project create';
    case PROJECT_UPDATE = 'project update';
    case PROJECT_DELETE = 'project delete';
    case PROJECT_VIEW_ALL = 'project view all';

    case TASK_CREATE = 'task create';
    case TASK_ASSIGN = 'task assign';
    case TASK_UPDATE = 'task update';
    case TASK_DELETE = 'task delete';

    case TASK_PRIORITY_DEFINE = 'task priority define';
    case TASK_PRIORITY_UPDATE = 'task priority update';

    // user
    case TASK_COMPLETED_NOTIFICATION_RECEIVE = 'task completed notification receive';

    case TASK_COMMENT = 'task comment';
    case TASK_CHANGE_STATUS = 'task change status';
    case DASHBOARD_VIEW_ASSIGNED_TASKS = 'dashboard view assigned tasks';
    case TASK_ASSIGN_NOTIFICATION_RECEIVE = 'task assign notification receive';

    // common
    case TASK_VIEW = 'task view';

    public function label(): string
    {
        return match ($this) {
            self::PROJECT_CREATE => 'Project Create',
            self::PROJECT_UPDATE => 'Project Update',
            self::PROJECT_DELETE => 'Project Delete',
            self::PROJECT_VIEW_ALL => 'Project View All',

            self::TASK_CREATE => 'Task Create',
            self::TASK_ASSIGN => 'Task Assign',
            self::TASK_UPDATE => 'Task Update',
            self::TASK_CHANGE_STATUS => 'Task Change Status',
            self::TASK_DELETE => 'Task Delete',

            self::TASK_PRIORITY_DEFINE => 'Task Priority Define',
            self::TASK_PRIORITY_UPDATE => 'Task Priority Update',

            self::TASK_COMPLETED_NOTIFICATION_RECEIVE => 'Task Completed Notification Receive',

            self::TASK_VIEW => 'Task View',
            self::TASK_COMMENT => 'Task Comment',

            self::DASHBOARD_VIEW_ASSIGNED_TASKS => 'Dashboard View Assigned Tasks',
            self::TASK_ASSIGN_NOTIFICATION_RECEIVE => 'Task Assign Notification Receive',
        };
    }
}
