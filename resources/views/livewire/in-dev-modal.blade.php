<div>
    <x-modal wire:model="show">  
        <x-slot name="title">
              <h1 class="text-lg font-bold text-center">We are still in Development</h1>
            </x-slot>
            <x-slot name="body">
              <p>Refer to the "Contact Us" form or subscribe to our email list to be notified when we are production ready. </p>
            </x-slot>
            <x-slot name="footer">
              <x-button @click="show = false" class="inline-flex justify-center py-2 px-4  shadow-sm text-sm font-medium rounded-md text-gray-900 bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 ">
                  Close
                </x-button>
            </x-slot>
        
    </x-modal>
</div>
