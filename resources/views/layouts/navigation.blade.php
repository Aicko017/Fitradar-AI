<nav x-data="{ open: false }" class="bg-[#1E1F9D] border-b border-[#15168a]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center">
        <a href="{{ route('dashboard') }}" class="flex items-center">
          <img src="{{ asset('images/Logo.png') }}" alt="FitRadar Logo" class="h-10 w-auto mr-2">
          <span class="font-semibold text-xl text-white">FitRadar</span>
        </a>
      </div>

      <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-100 hover:bg-[#15168a] transition">
              <span>{{ Auth::user()->name }}</span>
              <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" ... />
              </svg>
            </button>
          </x-slot>
          <x-slot name="content">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <div class="sm:hidden flex items-center -me-2">
        <button @click="open = !open" class="inline-flex items-center p-2 rounded-md text-gray-400 hover:bg-[#15168a] transition">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden bg-[#15168a]">
    <div class="pt-2 pb-3 space-y-1">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-responsive-nav-link>
    </div>
    <div class="pt-4 pb-1 border-t border-[#15168a]">
      <div class="px-4">
        <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-100">{{ Auth::user()->email }}</div>
      </div>
      <div class="mt-3 space-y-1">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
