<!-- General Meta Tags -->
<title>{{ $seo->title ?? 'Your Website Title' }}</title>
<meta name="description" content="{{ $seo->description ?? 'Your website description' }}">
<meta name="keywords" content="{{ $seo->keywords ?? 'keyword1, keyword2, keyword3' }}">
<meta name="author" content="{{ $seo->author ?? 'Muhammad Nur Alif' }}">
<meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $seo->title ?? 'Your Website Title' }}">
<meta property="og:description" content="{{ $seo->description ?? 'Your website description' }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:image" content="{{ $seo->image ?? asset('path/to/your/og-image.jpg') }}">
<meta property="og:site_name" content="{{ 'A Web Design, Development, UI / UX, Data Science Portofolio of Muhammad Nur Alif' }}">
<meta property="og:locale" content="{{ 'en_US' }}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seo->title ?? 'Your Website Title' }}">
<meta name="twitter:description" content="{{ $seo->description ?? 'Your website description' }}">
<meta name="twitter:image" content="{{ $seo->image ?? asset('path/to/your/twitter-image.jpg') }}">
<meta name="twitter:site" content="@YourTwitterHandle">

<!-- Canonical Link -->
<link rel="canonical" href="{{ Request::url() }}">

<!-- Viewport Meta Tag for Responsiveness -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
