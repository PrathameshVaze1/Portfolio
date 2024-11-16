<div>
    <form wire:submit="changeGreeting()">
        <div class="mt-2">
            <select
                type="text"
                id="newName"
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                <option value="Hi">Hi</option>
                <option value="Hello">Hello</option>
                <option value="Hey">Hey</option>
                <option value="Howdy">Howdy</option>
            </select>
            <input
                type="text"
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="name"
            />
        </div>
        <div>
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
            >
                Greet
            </button>
        </div>

    </form>
    @if ($greetingMessage !== '')
    <div class="mt-5">{{ $greetingMessage}}</div>
    @endif
</div>
