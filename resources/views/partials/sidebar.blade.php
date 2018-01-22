<div class="panel panel-default">
    <div class="panel-heading">Sidebar</div>
    <div class="panel-body">
        <ul>
            @foreach($archives as $date)
                <li><a href="/posts/?month={{$date->month}}&year={{$date->year}}">
                        {{ $date->month . ' ' . $date->year }}
                    </a></li>
            @endforeach
        </ul>
    </div>
</div>
