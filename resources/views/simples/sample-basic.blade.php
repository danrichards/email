@section ('content')
    <p>
        This is the most basic layout. All you need to do is specify a content
        section in some template file. It uses the 'simples' theme and the
        'basic' layout.
    </p>
    <blockquote>You should also be aware of the following</blockquote>
    <h2>
        Global Data (specified in the mail.php config file)
    </h2>
    <ul>
        <li>app ~ Specify your app name for the title.</li>
        <li>logo ~ Your beautiful logo.</li>
        <li>buttons ~ an array of buttons for the top right.</li>
    </ul>
    <h2>
        Optional data you may pass in.
    </h2>
    <ul>
        <li>EmailJob::title($title)</li>
        <li>EmailJob::excerpt($heading, $content)</li>
        <li>EmailJob::masthead($image, $href)</li>
    </ul>
@endsection