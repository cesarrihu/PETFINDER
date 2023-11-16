<x-action-section>
    <x-slot name="title">
        {{ __('Sesiones del Navegador') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Administra y cierra la sesión de tus sesiones activas en otros navegadores y dispositivos.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Si es necesario, puedes cerrar la sesión de todas tus otras sesiones de navegador en todos tus dispositivos. Algunas de tus sesiones recientes se enumeran a continuación; sin embargo, esta lista puede no ser exhaustiva. Si crees que tu cuenta ha sido comprometida, también deberías actualizar tu contraseña.') }}
        </div>

        @if (count($this->sessions) > 0)
            <div class="mt-5 space-y-6">
                <!-- Otras Sesiones de Navegador -->
                @foreach ($this->sessions as $session)
                    <div class="flex items-center">
                        <div>
                            @if ($session->agent->isDesktop())
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <!-- ... Código del icono de escritorio ... -->
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <!-- ... Código del icono de dispositivo móvil ... -->
                                </svg>
                            @endif
                        </div>

                        <div class="ml-3">
                            <div class="text-sm text-gray-600">
                                {{ $session->agent->platform() ? $session->agent->platform() : __('Desconocido') }} - {{ $session->agent->browser() ? $session->agent->browser() : __('Desconocido') }}
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    {{ $session->ip_address }},

                                    @if ($session->is_current_device)
                                        <span class="text-green-500 font-semibold">{{ __('Este dispositivo') }}</span>
                                    @else
                                        {{ __('Última actividad') }} {{ $session->last_active }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex items-center mt-5">
            <x-button wire:click="confirmLogout" wire:loading.attr="disabled">
                {{ __('Cerrar Sesiones en Otros Navegadores') }}
            </x-button>

            <x-action-message class="ml-3" on="loggedOut">
                {{ __('Hecho.') }}
            </x-action-message>
        </div>

        <!-- Ventana Modal de Confirmación para Cerrar Sesiones en Otros Dispositivos -->
        <x-dialog-modal wire:model.live="confirmingLogout">
            <x-slot name="title">
                {{ __('Cerrar Sesiones en Otros Navegadores') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Por favor, ingresa tu contraseña para confirmar que deseas cerrar la sesión de tus otras sesiones de navegador en todos tus dispositivos.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="logoutOtherBrowserSessions" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-button class="ml-3"
                            wire:click="logoutOtherBrowserSessions"
                            wire:loading.attr="disabled">
                    {{ __('Cerrar Sesiones en Otros Navegadores') }}
                </x-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>

