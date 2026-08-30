@props([
    'type' => 'success',
    'message' => 'Default toast message',
    'action' => 'Got it'
])

@if($type == 'success')
<div class="fixed bottom-4 left-4 rounded-lg p-4 bg-emerald-50 border-emerald-200 text-emerald-800 flex items-center gap-14 ">
    <div class="flex items-center gap-2">
        <i class="fas fa-square-check text-xl text-emerald-500"></i>
        {{ $message }}
    </div>
    <button class="cursor-pointer bg-emerald-800 hover:bg-emerald-700 text-emerald-200 px-4 py-2 rounded-lg">
        {{ $action }}
    </button>
</div>
@endif

@if($type == 'error')
<div class="fixed bottom-4 left-4 rounded-lg p-4 bg-red-50 border-red-200 text-red-800 flex items-center gap-14 ">
    <div class="flex items-center gap-2">
        <i class="fas fa-circle-xmark text-xl text-red-500"></i>
        {{ $message }}
    </div>
    <button class="cursor-pointer bg-red-800 hover:bg-red-700 text-red-200 px-4 py-2 rounded-lg">
        {{ $action }}
    </button>
</div>
@endif

@if($type == 'warning')
<div class="fixed bottom-4 left-4 rounded-lg p-4 bg-amber-50 border-amber-200 text-amber-800 flex items-center gap-14 ">
    <div class="flex items-center gap-2">
        <i class="fas fa-triangle-exclamation text-xl text-amber-500"></i>
        {{ $message }}
    </div>
    <button class="cursor-pointer bg-amber-800 hover:bg-amber-700 text-amber-200 px-4 py-2 rounded-lg">
        {{ $action }}
    </button>
</div>
@endif

@if($type == 'info')
<div class="fixed bottom-4 left-4 rounded-lg p-4 bg-blue-50 border-blue-200 text-blue-800 flex items-center gap-14 ">
    <div class="flex items-center gap-2">
        <i class="fas fa-circle-info text-xl text-blue-500"></i>
        {{ $message }}
    </div>
    <button class="cursor-pointer bg-blue-800 hover:bg-blue-700 text-blue-200 px-4 py-2 rounded-lg">
        {{ $action }}
    </button>
</div>
@endif