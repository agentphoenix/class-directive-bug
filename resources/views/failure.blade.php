<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Failure</title>
</head>
<body class="font-sans antialiased">
    @php
        $callout = 'Laravel';
        $heading = 'Hello world!';
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, numquam provident. Iusto atque laboriosam optio repellendus? Quaerat aliquid possimus magni est? Architecto, error quidem? Enim cupiditate mollitia laboriosam dignissimos perspiciatis.';
    @endphp

    <div class="@container">
        <div class="mx-auto max-w-7xl py-16">
            @if (filled($callout))
                <div class="@xs:mt-24 @md:mt-32 @xl:mt-16">
                    {{ $callout }}
                </div>
            @endif

            @if (filled($heading))
                <h1
                    @class([
                        'font-bold tracking-tight text-gray-900 @xs:text-4xl @md:text-6xl',
                        'mt-10' => filled($callout),
                        '@xs:mt-24 @md:mt-32 @xl:mt-16' => blank($callout)
                    ])
                >
                    {{ $heading }}
                </h1>
            @endif

            @if (filled($description))
                <div
                    @class([
                        'text-lg/8 text-gray-600',
                        'mt-6' => filled($heading),
                        'mt-10' => filled($callout) && blank($heading),
                        '@xs:mt-24 @md:mt-32 @xl:mt-16' => blank($callout) && blank($heading),
                    ])
                >
                    {{ $description }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>