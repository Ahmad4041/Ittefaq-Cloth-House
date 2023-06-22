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
        <li><a href="/ShalwarKameez">Shalwar Kameez</a></li>
        <li><a href="/unstichFabric">Unstiched Fabric</a></li>
        <li><a href="Kurta">Kurta Set</a></li>
        <li><a href="/Waistcoat">WaistCoat</a></li>
        <li><a href="/sherwani">Sherwani</a></li>
    </ul>
</div>
{{-- Sub Nav Ends --}}
