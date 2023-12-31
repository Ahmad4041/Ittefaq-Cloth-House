<div class="row navBar">
    <div class="col logo">
        <img src="{{ asset('Logo/IttefaqLogo.png') }}" alt="MainLogo">
    </div>
    <div class="col Buttons">
        <button onclick="window.location='{{ url('/womens') }}'" class="btnwomen">Women</button>
        <button onclick="window.location='{{ url('/') }}'" class="btnmen">Men</button>
    </div>
    <div class="col cartProf">
        <img onclick="window.location='{{ url('/signup') }}'" src="{{ asset('Icons/Profile.png') }}" alt="Profile">
        <img onclick="window.location='{{ url('/cart') }}'" src="{{ asset('Icons/Cart.png') }}" alt="Cart">
    </div>
</div>
{{-- Sub nav --}}
<div class="subnav mt-3">
    <ul>
        <li><a href="/summerWomens">Summer Lawn</a></li>
        <li><a href="/unstichWomens">Unstiched</a></li>
        <li><a href="/stichedWomens">Stiched</a></li>
        <li><a href="/designer">Designer Luxury</a></li>
        <li><a href="/pret">Pret</a></li>
        <li><a href="/wedding">Wedding</a></li>
    </ul>
</div>
{{-- Sub Nav Ends --}}
