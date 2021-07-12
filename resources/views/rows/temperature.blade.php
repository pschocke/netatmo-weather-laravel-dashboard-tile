<li class="grid grid-cols-1-auto py-1">
    <span class="truncate"
          title=""
    >
        Temperature
    </span>
    <span>
        <span class="font-bold tabular-nums flex items-center">
            {{ $current }} °C&nbsp;
            <span class="flex items-center text-xs">
                (<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg> {{ $max }} <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg> {{ $min }})
            </span>
        </span>
    </span>
</li>
