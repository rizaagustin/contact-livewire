<div class="w-full max-w-md space-y-8">
    <form>
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="name" class="sr-only">Name</label>
          <input wire:model="name" id="name" name="name" type="name" autocomplete="name" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Name">
        </div>
        <div>
          <label for="phone" class="sr-only">Phone</label>
          <input wire:model="phone" id="phone" name="phone" type="number" autocomplete="phone" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Phone">
        </div>
      </div>
                
      <div class="flex justify-end mt-3">
          
        <button  wire:click.prevent="createPost()" type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-blue-300">
            Save
          </button>
      </div>

      </form>

      <table class="w-full mt-3 border-1" aria-label="Table">
        <thead>
            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
            <th>Name</th>
            <th>No Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($contacts as $contact)
            <tr class="text-gray-700 border-b">
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

  </div>
