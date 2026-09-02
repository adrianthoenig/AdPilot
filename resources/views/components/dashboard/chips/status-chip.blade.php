@if($status == 'onboarding')
<span class="cursor-pointer block bg-sky-950 hover:bg-sky-900 transition-colors text-sky-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-sky-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'active')
<span class="block cursor-pointer bg-emerald-950 hover:bg-emerald-800 transition-colors text-emerald-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-emerald-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'paused')
<span class="block cursor-pointer bg-mauve-700 hover:bg-mauve-600 transition-colors text-mauve-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-mauve-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'draft')
<span class="block cursor-pointer bg-amber-950 hover:bg-amber-900 transition-colors text-amber-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-amber-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif