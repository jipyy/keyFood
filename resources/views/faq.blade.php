<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
</head>
<body>
    <div class="accordion">
        <div class="title">
            <h2>FAQ Section</h2>    
        </div>
        @foreach ($faqs as $faq)
            <ul>
                <li>
                    <input type="radio" name="accordion" id="faq-{{ $loop->index }}" {{ $loop->first ? 'checked' : '' }}>
                    <label for="faq-{{ $loop->index }}">{{ $faq->title }}</label>
                    <div class="content">
                        <p>{{ $faq->content }}</p>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>
</body>
</html>
