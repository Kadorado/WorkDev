<x-jet-form-section submit="updatePassword">
    
    <x-slot name="title">
        <h2 class="mb-2 text-xl font-semibold">{{ __('Actualiza contraseña') }}</h2>
    </x-slot>

    <x-slot name="description">
        <p class="mt-2 text-gray-800">{{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}</p>
    </x-slot>

    <x-slot name="form">
        <!-- Start of component -->
        <div class="max-w-full p-5 tracking-wide bg-white border-2 border-gray-300 rounded-md shadow-lg">
            <div id="header" class="flex flex-col gap-12 sm:flex-row"> 
            <img alt="mountain" class="border-2 border-gray-300 rounded-md w-45" width="30%" src="https://i.ibb.co/0YrmBsv/Signing-contract-Official-document-agreement-deal-commitment-Businessmen-cartoon-characters-shaking.jpg" />
            <div id="body" class="flex flex-col ">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="current_password" value="{{ __('Contraseña actual') }}" />
                    <x-jet-input id="current_password" type="password" class="block w-full mt-1" wire:model.defer="state.current_password" autocomplete="current-password" />
                    <x-jet-input-error for="current_password" class="mt-2" />
                </div>
        
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="password" value="{{ __('Nueva contraseña') }}" />
                    <x-jet-input id="password" type="password" class="block w-full mt-1" wire:model.defer="state.password" autocomplete="new-password" />
                    <x-jet-input-error for="password" class="mt-2" />
                </div>
        
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-jet-input id="password_confirmation" type="password" class="block w-full mt-1" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                    <x-jet-input-error for="password_confirmation" class="mt-2" />
                </div>
                  <!-- End of component -->
                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        {{ __('Guardar.') }}
                    </x-jet-action-message>
            
                    <x-jet-button>
                        {{ __('Guardar') }}
                    </x-jet-button>
                </x-slot>
            </div>
            </div>
          
        </div>
        
    </x-slot>

    
</x-jet-form-section>

