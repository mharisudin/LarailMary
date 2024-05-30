<x-slot:sidebar drawer="main-drawer" collapsible>

    {{-- User --}}
    @if($user = auth()->user())
        <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
            <x-slot:actions>
                <x-mary-dropdown class="btn-ghost btn-circle btn-sm" icon="o-cog-6-tooth">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <x-mary-menu-item title="Logout" icon="o-power" tooltip-left="Logout"
                                          onclick="event.preventDefault();
                                                this.closest('form').submit();"/>
                    </form>
                        <x-mary-menu-item title="Theme / Light" icon="o-swatch" @click="$dispatch('mary-toggle-theme')" />
                        <x-mary-theme-toggle class="hidden" />
                </x-mary-dropdown>
            </x-slot:actions>
        </x-mary-list-item>
        <x-mary-menu-separator/>
    @endif

    {{-- Activates the menu item when a route matches the `link` property --}}
    <x-mary-menu activate-by-route>
        <x-mary-menu-item title="Home" icon="o-home" link=""/>
        <x-mary-menu-item title="Messages" icon="o-envelope" link=""/>
        <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
            <x-mary-menu-item title="Wifi" icon="o-wifi" link=""/>
            <x-mary-menu-item title="Archives" icon="o-archive-box" link=""/>
        </x-mary-menu-sub>
    </x-mary-menu>
</x-slot:sidebar>
