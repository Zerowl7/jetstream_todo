<div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Objectus</th>
                <th class="px-4 py-2">Status Qvo</th>
                <th class="px-4 py-2">Actions Todo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $object)
                <tr @if ($loop->even) class="bg-grey" @endif>
                    <td class="border px- py-2">{{ $object->description }}</td>
                    <td class="border px-4 py-2">
                        @if ($object->done)
                            Done
                        @else
                            To Do
                        @endif
                    </td>

                    <td class="border px-12 py-2 items-center">
                        @if ($object->done)
                            <button wire:click="markAsToDo({{ $object->id }})"
                                class="bg-red-100 text-red-600 px-6 rounded-full ">
                                Mark as "To Do"
                            </button>
                        @else
                            <button wire:click="markAsDone({{ $object->id }})"
                                class="bg-gray-800 text-white px-6 rounded-full ml-12">
                                Mark as "Done"
                            </button>
                        @endif

                        <button wire:click="deleteItem({{ $object->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                            Delete 
                        </button>



                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
