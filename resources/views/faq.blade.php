<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('../css/faq.css') }}">
</head>
<body>
    <div class="accordion">
        {{-- Product --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="first" checked>
                <label for="first">Products</label>
                <div class="content">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsum minus nobis explicabo distinctio incidunt, debitis temporibus ipsa adipisci delectus, eligendi dicta ullam nihil a hic nemo. Atque, ea dignissimos.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Information --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">Information</label>
                <div class="content">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsum minus nobis explicabo distinctio incidunt, debitis temporibus ipsa adipisci delectus, eligendi dicta ullam nihil a hic nemo. Atque, ea dignissimos.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Question --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">Question</label>
                <div class="content">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsum minus nobis explicabo distinctio incidunt, debitis temporibus ipsa adipisci delectus, eligendi dicta ullam nihil a hic nemo. Atque, ea dignissimos.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Guide --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">Guide</label>
                <div class="content">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsum minus nobis explicabo distinctio incidunt, debitis temporibus ipsa adipisci delectus, eligendi dicta ullam nihil a hic nemo. Atque, ea dignissimos.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>
