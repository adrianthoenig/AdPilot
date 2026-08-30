@props([
    'id' => '',
    'name' => '',
    'value' => '',
    'checked' => false,
    'title' => '',
    'icon' => null,
    'message' => null
])



<label for="{{ $id }}" class="w-full">
    <input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" checked class="peer appearance-none">
    <div
        class="cursor-pointer p-3 flex flex-col gap-2 bg-gray-100 peer-checked:bg-gray-200 hover:bg-gray-200 rounded-lg">
        <div class="flex gap-2 items-center">
            @if($icon)<i class="{{ $icon }}"></i>@endif
            <h4 class="text-lg">{{ $title }}</h4>
        </div>
        @if($message)
            <p class="text-gray-400">Your client is still in the onboarding phase</p>
        @endif
    </div>
    </input>
</label>