<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
    <title>Surya Electronik</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('products.index') }}" class="brand-log">
            <span>SURYA</span>ELECTRONIC
            </a>

            <ul>
                <li>
                    <a href="{{ route('products.index') }}" class="menu-item">Semua Produk</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="{{ route('products.add') }}" class="menu-item">Tambah Produk</a>
                </li>
            </ul>
        </nav>
        
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>