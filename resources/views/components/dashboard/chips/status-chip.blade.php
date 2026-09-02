@if($status == 'onboarding')
<span class="block bg-sky-950 text-sky-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-sky-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'active')
<span class="block bg-emerald-950 text-emerald-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-emerald-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'paused')
<span class="block bg-mauve-700 text-mauve-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-mauve-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif

@if($status == 'draft')
<span class="block bg-amber-950 text-amber-200 text-sm p-2 rounded-sm flex items-center gap-2">
    <div class="h-2 w-2 rounded-full bg-amber-200 animate-pulse"></div> {{ ucfirst($status) }}
</span>
@endif