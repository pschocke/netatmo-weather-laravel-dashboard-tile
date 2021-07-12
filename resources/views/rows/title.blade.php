<li class="grid grid-cols-1-auto py-1">
    <span class="truncate font-bold flex items-center"
          title=""
    >
        @if($reachable)
            <div class="h-3 w-3 mr-2 rounded-full bg-green-500 border border-1 border-white"></div>
        @else
            <div class="h-3 w-3 mr-2 rounded-full bg-red-500 border border-1 border-white"></div>
        @endif
        {{ $title  }}
    </span>
</li>
