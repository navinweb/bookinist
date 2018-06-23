<div class="panel panel-default">
    <div class="panel-heading">Sidebar</div>
    <div class="panel-body">
        <h4>Archives</h4>
        <ul>
            @foreach($archives as $date)
                <li>
                    <a href="/posts/?month={{$date['month']}}&year={{$date['year']}}">
                        {{ $date['month'] . ' ' . $date['year'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="panel-body">
        <h4>Tags</h4>
        <ul>
            @foreach($tags as $tag)
                <li>
                    <a href="/posts/tag/{{ $tag }}">
                        {{ $tag }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
