<div>
    <button
        class="text-xs text-white bg-red-500 hover:bg-red-600 py-1 px-2 rounded"
        type="button"
        wire:click="delete({{ $projectId }})"
        wire:loading.attr="disabled"
        wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE"
    >
        {{__('Delete')}}
    </button>
</div>
