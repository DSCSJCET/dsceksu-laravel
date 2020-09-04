<!-- SEO Meta Tag -->

<meta name="author" content="Emmanuel Joseph (JET)"/>
<meta name="title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta name="keywords" content="dsc, developer student clubs, {{ config('app.name') }}, {{ config('app.nick') }}, google developers, India, students, technology, DSCSJCET, SJCET, Kerala"/>
<meta name="description" content="Developer Student Clubs(DSC) is a Google Developers program for SJCET students to acquire technical skills and solve problems">
<link rel="icon" type="image/png" href="config('app.url') }}images/favicon_package_v0.16/android-chrome-512x512.png" />
<!-- Google -->
<meta name="google-site-verification" content="{{ config('services.google.site_id') }}" />
<link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
<meta itemprop="name" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta itemprop="description" content="Developer Student Clubs(DSC) is a Google Developers program for SJCET students to acquire technical skills and solve problems">
<meta itemprop="image" content="{{ config('app.url') }}images/favicon_package_v0.16/android-chrome-512x512.png">

<!-- Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')" />
<meta property="og:description" content="Developer Student Clubs(DSC) is a Google Developers program for SJCET students to acquire technical skills and solve problems" />
<meta property="og:image" content="{{ config('app.url') }}images/favicon_package_v0.16/android-chrome-512x512.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:alt" content="{{ config('app.nick') }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="@DscEksu">
<meta name="twitter:creator" content="@emmanuelJet_">
<meta name="twitter:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
<meta name="twitter:description" content="Developer Student Clubs(DSC) is a Google Developers program for SJCET students to acquire technical skills and solve problems">
<meta name="twitter:image:src" content="{{ config('app.url') }}images/favicon_package_v0.16/android-chrome-512x512.png">
<meta name="twitter:image:alt" content="{{ config('app.nick') }}">
