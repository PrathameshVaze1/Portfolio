<div>
    <div>
        Hello, {{ $name }}
    </div>
    <form wire:submit="change(document.querySelector('#newName').value)">
        <div class="mt-2">
            <input type="text" id="newName" class="block w-full p-4 border rounded-md bg-gray-700 text-white">
        </div>
        <div class="mt-2">
            <button type="submit" class="text-white font-medium rounded-md px-4 py-2 bg-blue-600" >
                Greet
            </button>
        </div>
    </form>
</div>