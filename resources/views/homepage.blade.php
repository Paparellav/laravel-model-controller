<h1>Lista film:</h1>

<ul>
    @foreach ($films as $film)
        <li>
            <small>
                {{$film->title}}
            </small>
            <small>
                | {{$film->original_title}}
            </small>
            <small>
                | {{$film->nationality}}
            </small>
            <small>
                | {{$film->date}}
            </small>
            <small>
                | {{$film->vote}}
            </small>
        </li>
    @endforeach
</ul>
