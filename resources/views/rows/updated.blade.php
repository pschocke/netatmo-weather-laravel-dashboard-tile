<li class="grid grid-cols-1-auto py-1">
    <span class="truncate text-xs"
          title=""
    >
        last update: {{ \Carbon\Carbon::parse($data, 'UTC')->format('d.m.Y H:i') }}
    </span>
</li>
