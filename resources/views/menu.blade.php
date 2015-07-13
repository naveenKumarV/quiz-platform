<div id="navigation">
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href="{{ url('/') }}"><span>Home</span></a></li>
            <li class='has-sub'><a href='#'><span>Scores</span></a>
                <ul>
                    <li><a href="{{ url('quiz/scores') }}"><span>Show scores of all users</span></a></li>
                    <li class='last'><a href="{{ url('quiz/scores/user') }}"><span>Show my score alone</span></a></li>
                </ul>
            </li>
            <li class='has-sub'><a href="#"><span>Play Quiz</span></a>
                <ul>
                    <li><a href="{{ url('quiz/play') }}"><span>All categories</span></a></li>
                    <li><a href="{{ url('quiz/play/history') }}"><span>History</span></a></li>
                    <li><a href="{{ url('quiz/play/sports') }}"><span>Sports</span></a></li>
                    <li><a href="{{ url('quiz/play/literature') }}"><span>Literature</span></a></li>
                    <li><a href="{{ url('quiz/play/politics') }}"><span>Politics</span></a></li>
                    <li><a href="{{ url('quiz/play/science') }}"><span>Politics</span></a></li>
                    <li class='last'><a href="{{ url('quiz/answered') }}"><span>Show previously answered questions</span></a></li>
                </ul>
            </li>
            <li class='has-sub'><a href="#"><span>Design Quiz</span></a>
                <ul>
                    <li><a href="{{ url('quiz/design') }}"><span>Show all my questions</span></a></li>
                    <li class='last'><a href="{{ url('quiz/design/create') }}"><span>Create a new question</span></a></li>
                </ul>
            </li>
            <li class='last'><a href="{{ url('quiz/instructions') }}"><span>Instructions</span></a></li>
            @if(Auth::guest())
                <li class="right"><a href="{{ url('/auth/login') }}"><span>Log in</span></a></li>
                <li class="first right"><a href="{{ url('/auth/register') }}"><span>Sign up</span></a></li>
            @else
                <li class="first right"><a href="{{ url('/auth/logout') }}"><span>Log out</span></a></li>
            @endif
        </ul>
    </div>
</div>